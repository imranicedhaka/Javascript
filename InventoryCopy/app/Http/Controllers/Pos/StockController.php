<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IProduct;
use App\Models\ICategory;
use App\Models\Supplier;
use App\Models\Unit;
use Auth;
class StockController extends Controller
{
    public function StockReport(){

        $allData = IProduct::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();
        return view('backend.stock.stock_report',compact('allData'));

    } // End Method


    public function StockReportPdf(){

        $allData = IProduct::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();
        return view('backend.pdf.stock_report_pdf',compact('allData'));

    } // End Method


    public function StockSupplierWise(){

        $supppliers = Supplier::all();
        $category = ICategory::all();
        return view('backend.stock.supplier_product_wise_report',compact('supppliers','category'));

    } // End Method


    public function SupplierWisePdf(Request $request){

        $allData = IProduct::orderBy('supplier_id','asc')->orderBy('category_id','asc')->where('supplier_id',$request->supplier_id)->get();
        return view('backend.pdf.supplier_wise_report_pdf',compact('allData'));

    } // End Method


    public function ProductWisePdf(Request $request){

        $product = IProduct::where('category_id',$request->category_id)->where('id',$request->product_id)->first();
        return view('backend.pdf.product_wise_report_pdf',compact('product'));
    } // End Method



}
