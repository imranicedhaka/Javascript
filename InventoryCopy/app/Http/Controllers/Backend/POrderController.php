<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PProduct;
use App\Models\PCustomer;
use App\Models\POrder;
use App\Models\POrderdetails;
use Carbon\Carbon; 
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;
use Barryvdh\DomPDF\Facade\Pdf;

class POrderController extends Controller
{
    public function FinalInvoice(Request $request){

        $rtotal = $request->total;
        $rpay = $request->pay;
        $mtotal = $rtotal - $rpay;

        $data = array();
        $data['customer_id'] = $request->customer_id;
        $data['order_date'] = $request->order_date;
        $data['order_status'] = $request->order_status;
        $data['total_products'] = $request->total_products;
        $data['sub_total'] = $request->sub_total;
        $data['vat'] = $request->vat;

        $data['invoice_no'] = 'EPOS'.mt_rand(10000000,99999999);
        $data['total'] = $request->total;
        $data['payment_status'] = $request->payment_status;
        $data['pay'] = $request->pay;
        $data['due'] = $mtotal;
        $data['created_at'] = Carbon::now(); 

        $order_id = POrder::insertGetId($data);
        $contents = Cart::content();
 
        $pdata = array();
        foreach($contents as $content){
            $pdata['order_id'] = $order_id;
            $pdata['product_id'] = $content->id;
            $pdata['quantity'] = $content->qty;
            $pdata['unitcost'] = $content->price;
            $pdata['total'] = $content->total;
            
            $insert = POrderdetails::insert($pdata); 

        } // end foreach


        $notification = array(
            'message' => 'Order Complete Successfully',
            'alert-type' => 'success'
        );

        Cart::destroy();

        return redirect()->route('admin.dashboard')->with($notification);

    } // End Method 


    public function PendingOrder(){

        $orders = POrder::where('order_status','pending')->get();
        return view('backend.order.pending_order',compact('orders'));

    }// End Method 

     public function CompleteOrder(){

        $orders = POrder::where('order_status','complete')->get();
        return view('backend.order.complete_order',compact('orders'));

    }// End Method 


    public function OrderDetails($order_id){

        $order = POrder::where('id',$order_id)->first();

        $orderItem = POrderdetails::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('backend.order.order_details',compact('order','orderItem'));

    }// End Method 


    public function OrderStatusUpdate(Request $request){

        $order_id = $request->id;
      
 
    $product = POrderdetails::where('order_id',$order_id)->get();
    // dd($product);
        foreach($product as $item){
           PProduct::where('id',$item->product_id)
                ->update(['product_store' => DB::raw('product_store - '.$item->quantity) ]);
        }

     POrder::findOrFail($order_id)->update(['order_status' => 'complete']);

         $notification = array(
            'message' => 'Order Done Successfully',
            'alert-type' => 'success'
        ); 

        return redirect()->route('pending.porder')->with($notification);


    }// End Method 


    public function StockManage(){

    $product = PProduct::latest()->get();
    return view('backend.stock.all_stock',compact('product'));

    }// End Method 


    public function OrderInvoice($order_id){

         $order = POrder::where('id',$order_id)->first();

        $orderItem = POrderdetails::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = Pdf::loadView('backend.order.order_invoice', compact('order','orderItem'))->setPaper('a4')->setOption([
                'tempDir' => public_path(),
                'chroot' => public_path(),

        ]);
         return $pdf->download('invoice.pdf');

    }// End Method 


    public function PendingDue(){

        $alldue = POrder::where('due','>','0')->orderBy('id','DESC')->get();
        // dd( $alldue);
        return view('backend.order.pending_due',compact('alldue'));
    }// End Method 


    public function OrderDueAjax($id){

        $order = POrder::findOrFail($id);
        return response()->json($order);

    }// End Method 


    public function UpdateDue(Request $request){

        $order_id = $request->id;
        $due_amount = $request->due;
        // dd($order_id);
        $pay_amount = $request->pay;

        $allorder = POrder::findOrFail($order_id);
        $maindue = $allorder->due;
        $maindpay = $allorder->pay;
 
        $paid_due = $maindue - $due_amount;
        $paid_pay = $maindpay + $due_amount;

        POrder::findOrFail($order_id)->update([
            'due' => $paid_due,
            'pay' => $paid_pay, 
        ]);

         $notification = array(
            'message' => 'Due Amount Updated Successfully',
            'alert-type' => 'success'
        ); 

        return redirect()->route('pending.due')->with($notification);


    }// End Method 

 //
}