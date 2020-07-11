<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Http\Controllers\Controller;
Use Cart;

class UserController extends Controller
{
    
    public function index()
    {
    	$publish_product = DB::table('tbl_product')
                   ->join('tbl_category','tbl_product.category_id','tbl_category.category_id')
                   ->select('tbl_product.*','tbl_category.category_name')
                   ->where(['product_status'=> 1])->get();

        return view('Users.publish_product')->with('publish_product',$publish_product);
    }

    public function view_product($product_id)
    {
    	$product_details = DB::table('tbl_product')
                ->where('product_id',$product_id)
                ->get();
      return view('Users.product_details')->with('product_details',$product_details);
    }

    public function grocery_product($subcategory_id)
    {
      $grocery_product = DB::table('tbl_product')
                         ->where('subcategory_id',$subcategory_id)
                         ->get();
      return view('Users.subcategoryProduct')->with('grocery_product',$grocery_product);
    }

    public function clothes_product($subcategory_id)
    {
      $grocery_product = DB::table('tbl_product')
                         ->where('subcategory_id',$subcategory_id)
                         ->get();
      return view('Users.subcategoryProduct')->with('grocery_product',$grocery_product);
    }
}
