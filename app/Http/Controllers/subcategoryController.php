<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Http\Controllers\Controller;

class subcategoryController extends Controller
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
    	$getData = DB::table('tbl_category')->get();
        return view('Admin.add_subcategory')->with('getData',$getData);
    }

    public function save_subcategory(Request $request)
    {
    	$data = array();
    	$data['subcategory_name'] = $request -> subcategory_name;
    	$data['category_id'] = $request -> category_id;
    	$data['subcategroy_description'] = $request -> subcategory_description;
    	$data['sub_status'] = $request -> subcategory_status;

    	$insert = DB::table('tbl_subcategory')->insert($data);
    	if ($insert) {
           $notification=array(
           'messege'=>'Successfully Sub Category Inserted ',
           'alert-type'=>'success'
            );
          return Redirect()->route('all.subcategory')->with($notification);                      
       }else{
        $notification=array(
           'messege'=>'error ',
           'alert-type'=>'success'
            );
           return Redirect()->back()->with($notification);
       }
    }

    public function all_subcategory()
    {
    	$all_subcategory = DB::table('tbl_subcategory')
    					   ->join('tbl_category','tbl_subcategory.category_id','tbl_category.category_id')
    					   ->select('tbl_subcategory.*','tbl_category.category_name')
    					   ->get();

    	return view('Admin.all_subcategory')->with('all_subcategory',$all_subcategory);
    }

    public function edit_subcategory($subcategory_id)
    {
    	$getData = DB::table('tbl_subcategory')
    				->join('tbl_category','tbl_subcategory.category_id','tbl_category.category_id')
    				->select('tbl_subcategory.*','tbl_category.category_name')
    				->where('subcategory_id',$subcategory_id)
    				->get();
    	return view('Admin.edit_subcategory')->with('getData',$getData);
    }

    public function update_subcategory($subcategory_id,Request $request)
    {
    	$data = array();
    	$data['subcategory_name'] = $request -> subcategory_name;
    	$data['category_id'] = $request -> category_id;
    	$data['subcategroy_description'] = $request -> subcategory_description;
    	$data['sub_status'] = 1;
    	
    	$update_subcategory = DB::table('tbl_subcategory')->where('subcategory_id',$subcategory_id)->update($data);
    	if ($update_subcategory) 
        {
             $notification=array(
             'messege'=>'Successfully Updated Subcategory ',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.subcategory')->with($notification);                      
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

    public function unactive_subcategory($subcategory_id)
    {
    	$unactive_subcategory = DB::table('tbl_subcategory')->where('subcategory_id',$subcategory_id)->update(['sub_status'=> 0]);
    	if ($unactive_subcategory) 
        {
             $notification=array(
             'messege'=>'Subcategory Unactive Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.subcategory')->with($notification);                      
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

    public function active_subcategory($subcategory_id)
    {
    	$active_subcategory = DB::table('tbl_subcategory')->where('subcategory_id',$subcategory_id)->update(['sub_status'=> 1]);
    	if ($active_subcategory) 
        {
             $notification=array(
             'messege'=>'Subcategory Active Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.subcategory')->with($notification);                      
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

    public function delete_subcategory($subcategory_id)
    {
    	$delete_subcategory = DB::table('tbl_subcategory')->where('subcategory_id',$subcategory_id)->delete();
        if ($delete_subcategory) 
        {
             $notification=array(
             'messege'=>'Successfully Sub Category Deleted ',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.subcategory')->with($notification);                      
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

    public function view_subcategory($subcategory_id)
    {
        $getData = DB::table('tbl_subcategory')
				  ->join('tbl_category','tbl_subcategory.category_id','tbl_category.category_id')
				  ->select('tbl_subcategory.*','tbl_category.category_name')
				  ->where('subcategory_id',$subcategory_id)
				  ->get();
        return view('Admin.view_subcategory')->with('getData',$getData);
    }
}
