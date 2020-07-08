<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
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
        return view('Admin.add_product')->with('getData',$getData);
    }

    public function save_product(Request $request)
    {
        
        $this -> validate($request,[
            'product_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_price' => 'integer|required',
            'product_quantity' => 'integer|required'
        ]);


        $data=array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_color'] = $request->product_color;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_status'] = $request->product_status;
        

        $image=$request->file('product_image');
        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='products_images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['product_image']=$image_url;
                $product=DB::table('tbl_product')
                         ->insert($data);
              if ($product) 
              {
                 $notification=array(
                 'messege'=>'Successfully Product Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);                      
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
            else
            {
                 $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
            }
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

    public function all_product()
    {
        $all_product = DB::table('tbl_product')
        ->join('tbl_category','tbl_product.category_id','tbl_category.category_id')
        ->join('tbl_subcategory','tbl_product.subcategory_id','tbl_subcategory.subcategory_id')
        ->select('tbl_product.*','tbl_category.category_name','tbl_subcategory.subcategory_name')
        ->get();

        return view('Admin.all_product')->with('all_product',$all_product);
    }

    public function edit_product($product_id)
    {
        $getData = DB::table('tbl_product')
                   ->join('tbl_category','tbl_product.category_id','tbl_category.category_id')
                   ->select('tbl_product.*','tbl_category.category_name')
                   ->where('product_id',$product_id)->get();
        return view('Admin.edit_product')->with('getData',$getData);
    }

    public function update_product($product_id,Request $request)
    {
        $this -> validate($request,[
            'product_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_price' => 'integer|required',
            'product_quantity' => 'integer|required'
        ]);


        $data=array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_color'] = $request->product_color;
        $data['product_short_description'] = $request->product_short_description;
        $data['product_long_description'] = $request->product_long_description;
        $data['product_status'] = 1;
        $image=$request->file('product_image');
        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='products_images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['product_image']=$image_url;
                $product=DB::table('tbl_product')
                         ->where('product_id',$product_id)->update($data);
                if ($product) {
                 $notification=array(
                 'messege'=>'Successfully Product Updated ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.product')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
        }     
                }
            else
            {
                echo "Nothing to be update";
            }
            }
    }

    public function delete_product($product_id)
    {
      $delete=DB::table('tbl_product')
                ->where('product_id',$product_id)
                ->first();
         $photo=$delete->product_image;
         unlink($photo);
         $dltprod=DB::table('tbl_product')
                  ->where('product_id',$product_id)
                  ->delete();
         if ($dltprod) {
                 $notification=array(
                 'messege'=>'Successfully Product Deleted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all.product')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
        }     
    }

    public function unactive_product($product_id)
    {
        $unactive_product = DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=> 0]);
        if ($unactive_product) 
        {
             $notification=array(
             'messege'=>'Product Unactive Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.product')->with($notification);                      
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

    public function active_product($product_id)
    {
        $active_product = DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=> 1]);
        if ($active_product) 
        {
             $notification=array(
             'messege'=>'Product Active Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.product')->with($notification);                      
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

    public function view_product($product_id)
    {
        $getData = DB::table('tbl_product')->where('product_id',$product_id)
                   ->join('tbl_category','tbl_product.category_id','tbl_category.category_id')
                   ->select('tbl_product.*','tbl_category.category_name')
                   ->get();
        return view('Admin.view_product')->with('getData',$getData);
    }

}
