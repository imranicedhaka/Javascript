<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IProduct;
use App\Models\ICategory;
use App\Models\Supplier;
use App\Models\Unit;
use Auth;
use Illuminate\Support\Carbon;

class IProductController extends Controller
{
    public function ProductAll(){

        $product = IProduct::latest()->get();
        return view('backend.iproduct.product_all',compact('product'));

    } // End Method 


    public function ProductAdd(){

        $supplier = Supplier::all();
        $category = ICategory::all();
        $unit = Unit::all();
        return view('backend.iproduct.product_add',compact('supplier','category','unit'));
    } // End Method 


    public function ProductStore(Request $request){

        IProduct::insert([

            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'unit_id' => $request->unit_id,
            'category_id' => $request->category_id,
            'quantity' => '0',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Product Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('product.all')->with($notification); 

    } // End Method 



    public function ProductEdit($id){

        $supplier = Supplier::all();
        $category = ICategory::all();
        $unit = Unit::all();
        $product = IProduct::findOrFail($id);
        return view('backend.iproduct.product_edit',compact('product','supplier','category','unit'));
    } // End Method 



    public function ProductUpdate(Request $request){

        $product_id = $request->id;

        IProduct::findOrFail($product_id)->update([

            'name' => $request->name,
            'supplier_id' => $request->supplier_id,
            'unit_id' => $request->unit_id,
            'category_id' => $request->category_id, 
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Product Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('product.all')->with($notification); 


    } // End Method 


    public function ProductDelete($id){
       
        IProduct::findOrFail($id)->delete();
            $notification = array(
            'message' => 'Product Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 


}
