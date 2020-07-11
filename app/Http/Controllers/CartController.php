<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	
    	$qty = $request->qty;
    	$product_id = $request->product_id;
    	$product_info = DB::table('tbl_product')
    				   ->where('product_id',$product_id)
    				   ->first();
		if($qty>0 && $qty <5)
		{
			$data = array();
			$data['qty']=$qty;
			$data['id']=$product_info->product_id;
			$data['name']=$product_info->product_name;
			$data['price']=$product_info->product_price;
			$image = $data['options']['image']=$product_info->product_image;
			Cart::add($data);
			return Redirect::to('/show-cart');		}
		else if($qty < 5)
		{
			echo "Sorry No more the  5 product order at a time";
		}
		else
		{
			echo "Select Quentity";
		}
    	
    }

    public function show_cart()
    {
    	return view('Users.shipping_cart');
    }

}
