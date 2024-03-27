<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PCategory;
use Carbon\Carbon;
class PCategoryController extends Controller
{
    public function AllCategory(){

        $category = PCategory::latest()->get();
        return view('backend.pcategory.all_category',compact('category'));

    }// End Method


    public function StoreCategory(Request $request){

        PCategory::insert([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.pcategory')->with($notification);  
    }// End Method


    public function EditCategory($id){
        $category = PCategory::findOrFail($id);
        return view('backend.pcategory.edit_category',compact('category'));

    }// End Method


    public function UpdateCategory(Request $request){

        $category_id = $request->id;

        PCategory::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.pcategory')->with($notification);   

    }// End Method


    public function DeleteCategory($id){

        PCategory::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);  


    }// End Method

}