<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use App\Models\Demo;

class IndexController extends Controller
{
   public function Index()
   {


      return view('frontend.demo');
   } // End Method 

   public function saveData(Request $request)
   {
      // Retrieve inputs from the request
      $text1 = $request->input('text1');
      $text2 = $request->input('text2');
      $time1 = $request->input('time1');
      $time2 = $request->input('time2');

      // Create a new instance of the Demo model with the attributes set
      $demo = new Demo();
      $demo->text1 = $text1;
      $demo->text2 = $text2;
      $demo->text1_entry_time = $time1;
      $demo->text2_entry_time = $time2;

      // Save the new record to the database
      $demo->save();

      // Return a JSON response indicating success
      return response()->json(['message' => 'Data saved successfully']);
   }
   public function Youtube(Request $request)
   {
      // Retrieve inputs from the request
      $text1 = $request->input('text1');
      $text2 = $request->input('text2');
      $time1 = $request->input('time1');
      $time2 = $request->input('time2');

      // Create a new instance of the Demo model with the attributes set
      $demo = new Demo();
      $demo->text1 = $text1;
      $demo->text2 = $text2;
      $demo->text1_entry_time = $time1;
      $demo->text2_entry_time = $time2;

      // Save the new record to the database
      $demo->save();

      // Return a JSON response indicating success
      return response()->json(['message' => 'Data saved successfully']);
   }
   public function VendorDetails($id)
   {

      $vendor = User::findOrFail($id);
      $vproduct = Product::where('vendor_id', $id)->get();
      return view('frontend.vendor.vendor_details', compact('vendor', 'vproduct'));
   } // End Method 


   public function VendorAll()
   {

      $vendors = User::where('status', 'active')->where('role', 'vendor')->orderBy('id', 'DESC')->get();
      return view('frontend.vendor.vendor_all', compact('vendors'));
   } // End Method 


   public function CatWiseProduct(Request $request, $id, $slug)
   {
      $products = Product::where('status', 1)->where('category_id', $id)->orderBy('id', 'DESC')->get();
      $categories = Category::orderBy('category_name', 'ASC')->get();

      $breadcat = Category::where('id', $id)->first();

      $newProduct = Product::orderBy('id', 'DESC')->limit(3)->get();

      return view('frontend.product.category_view', compact('products', 'categories', 'breadcat', 'newProduct'));
   } // End Method 


   public function SubCatWiseProduct(Request $request, $id, $slug)
   {
      $products = Product::where('status', 1)->where('subcategory_id', $id)->orderBy('id', 'DESC')->get();
      $categories = Category::orderBy('category_name', 'ASC')->get();

      $breadsubcat = SubCategory::where('id', $id)->first();

      $newProduct = Product::orderBy('id', 'DESC')->limit(3)->get();

      return view('frontend.product.subcategory_view', compact('products', 'categories', 'breadsubcat', 'newProduct'));
   } // End Method 


   public function ProductViewAjax($id)
   {

      $product = Product::with('category', 'brand')->findOrFail($id);
      $color = $product->product_color;
      $product_color = explode(',', $color);

      $size = $product->product_size;
      $product_size = explode(',', $size);

      return response()->json(array(

         'product' => $product,
         'color' => $product_color,
         'size' => $product_size,

      ));
   } // End Method 


   public function ProductSearch(Request $request)
   {

      $request->validate(['search' => "required"]);

      $item = $request->search;
      $categories = Category::orderBy('category_name', 'ASC')->get();
      $products = Product::where('product_name', 'LIKE', "%$item%")->get();
      $newProduct = Product::orderBy('id', 'DESC')->limit(3)->get();
      return view('frontend.product.search', compact('products', 'item', 'categories', 'newProduct'));
   } // End Method 


   public function SearchProduct(Request $request)
   {

      $request->validate(['search' => "required"]);

      $item = $request->search;
      $products = Product::where('product_name', 'LIKE', "%$item%")->select('product_name', 'product_slug', 'product_thambnail', 'selling_price', 'id')->limit(6)->get();

      return view('frontend.product.search_product', compact('products'));
   } // End Method
}
