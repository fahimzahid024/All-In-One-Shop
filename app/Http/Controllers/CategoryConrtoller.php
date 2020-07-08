<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Http\Controllers\Controller;

class CategoryConrtoller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.add_category');
    }
    public function save_category(Request $request)
    {
    	$data=array();
    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;
    	$data['status'] = $request->status;
    	

    	$insert = DB::table('tbl_category')->insert($data);
      if ($insert) {
           $notification=array(
           'messege'=>'Successfully Category Deleted ',
           'alert-type'=>'success'
            );
          return Redirect()->route('all.category')->with($notification);                      
       }else{
        $notification=array(
           'messege'=>'error ',
           'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);
       }
    }

    public function all_category()
    {
    	$all_category = DB::table('tbl_category')->get();

    	return view('Admin.all_category')->with('all_category',$all_category);
    }

    public function delete_category($category_id)
    {
    	$delete_category = DB::table('tbl_category')->where('category_id',$category_id)->delete();
        if ($delete_category) 
        {
             $notification=array(
             'messege'=>'Successfully Category Deleted ',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.category')->with($notification);                      
         }
         else
         {
             $notification=array(
             'messege'=>'error ',
             'alert-type'=>'success'
              );
             return Redirect()->back()->with($notification);
         }
    }

    public function edit_category($category_id)
    {
    	$getData = DB::table('tbl_category')->where('category_id',$category_id)->get();
    	return view('Admin.edit_category')->with('getData',$getData);
    }

    public function update_category($category_id,Request $request)
    {
    	$data = array();
    	$data['category_name'] = $request->category_name;
    	$data['category_description'] = $request->category_description;
    	$data['status'] = 1;
    	
    	$update_category = DB::table('tbl_category')->where('category_id',$category_id)->update($data);
    	if ($update_category) 
        {
             $notification=array(
             'messege'=>'Successfully Updated Category ',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.category')->with($notification);                      
         }
         else
         {
             $notification=array(
             'messege'=>'Please Update Something',
             'alert-type'=>'success'
              );
             return Redirect()->back()->with($notification);
         }

    }

    public function unactive_category($category_id)
    {
    	$unactive_category = DB::table('tbl_category')->where('category_id',$category_id)->update(['status'=> 0]);
    	if ($unactive_category) 
        {
             $notification=array(
             'messege'=>'Category Unactive Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.category')->with($notification);                      
         }
         else
         {
             $notification=array(
             'messege'=>'Error',
             'alert-type'=>'success'
              );
             return Redirect()->back()->with($notification);
         }
    }

    public function active_category($category_id)
    {
    	$active_category = DB::table('tbl_category')->where('category_id',$category_id)->update(['status'=> 1]);
    	if ($active_category) 
        {
             $notification=array(
             'messege'=>'Category Active Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.category')->with($notification);                      
         }
         else
         {
             $notification=array(
             'messege'=>'Error',
             'alert-type'=>'success'
              );
             return Redirect()->back()->with($notification);
         }
    }

    public function view_category($category_id)
    {
        $getData = DB::table('tbl_category')->where('category_id',$category_id)->get();
        return view('Admin.view_category')->with('getData',$getData);
    }
}
