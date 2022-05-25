<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class AdminsController extends Controller
{

    // Return view if click on dashbord for go to 
    public function home_dashboard(){
        return view('admins/dashboard');
    }

    // Return view if click on add product for add new product 
    public function add_products(){
        return view('admins/upload_products');
    }

    // Insert => [ Product ] data to database 
    public function upload_product(Request $request){
        $validated = $request->validate([
            // Input name
            'product_title' => 'required|max:255',
            'product_description' => 'required',
            'product_price' => 'required|max:100',
            'department' => 'required',
        ]);
        $file_extension  = $request->product_img->getClientOriginalExtension();
        $randomId        =   rand(1,500000000000000);
        $file_name=time().$randomId.'.'.$file_extension;
        $path = 'assist/images/products';

        $upload_images =$request->product_img->move($path,$file_name);

        Product::create([  
            //Colums name    Input name 
            'products_img'=>$upload_images,
            'products_title'=>$request->product_title,
            'products_decrption'=>$request->product_description,
            'products_price'=>$request->product_price,
            'products_discount'=>$request->product_discount,
            'products_department'=>$request->department
        ]);
       
         return redirect(url('manage_products'));
    }


    // Get all => [ Products ] from database to [ Dashboard Management Products View ] 
    public function manage_products(){
        $management_prducts = Product::All();
        return view('admins.manage_products',
        [
            'management_prducts'=>$management_prducts
             
        ]);
    }

    // Get data => for [ Product ] by id with [ ajax ] and put this data in form inputs for edit that data
    public function control_management_products($product_id){
        
        $product_data = Product::findOrFail($product_id);
        return response()->json(['product_data' =>$product_data]);

    }

    // Delete [ Product ] by id
    public function delete_product($product_id){
        Product::findOrFail($product_id)->delete();
        return response()->json('Deleted Successfully');

    }

    public function edit_product(Request $request, $product_id){

        $edit_product = Product::findOrFail($product_id)->update([
            'products_title' => $request->product_title,
            'products_decrption' => $request->product_decription,
            'products_price' => $request->product_price
        ]);
        $message = 'Updated Successfully';
        return response()->json(['msg'=>$message]);

    }
}
