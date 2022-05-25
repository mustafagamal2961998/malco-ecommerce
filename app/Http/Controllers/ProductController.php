<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Ad;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get all [ Products ] With Where Department & all [ Ads ] 
    public function getAllProducts(){

        // Get All Ads
        $ads=Ad::All();
        

        // Get all [ Skin Care ] products Where Products_department = skin_care
        $skin_care_products=Product::where('products_department','skin_care')->get();

        // Get all [ Hair Care ]  products Where Products_department = hair_care
        $hair_care_products=Product::where('products_department','hair_care')->get();
        
        // Get all [ Body Care ] products Where Products_department = body_care
       
        $body_care_products=Product::where('products_department','body_care')->get();
       
        // Get all [ Nail Care ] products Where Products_department = nail_care
        $nail_care_products=Product::where('products_department','nail_care')->get();

        
        // Get all [ Make Up ] products Where Products_department = make_up
        $make_up_products=Product::where('products_department','make_up')->get();


        // Get all [ Perfume ] products Where Products_department = Perfume
        $perfume_products=Product::where('products_department','perfume')->get();


        // Get all [ Womens Accessories ] products Where Products_department = womens_accessories
        $womens_accessories_products=Product::where('products_department','womens_accessories')->get();


        // Get all [ Ramadan Accessories ] products Where Products_department = ramadan_accessories
        $ramadan_accessories_products=Product::where('products_department','ramadan_accessories')->get();


        // Get all [ Mans Accessories ] products Where Products_department = mans_accessories
        $mans_accessories_products=Product::where('products_department','mans_accessories')->get();
        
        
        // Get all [ Womens Bages ] products Where Products_department = womens_bages
        $womens_bages_products=Product::where('products_department','womens_bages')->get();
        

        // Get all [ Womens Clothes ] products Where Products_department = womens_clothes
        $womens_clothes_products=Product::where('products_department','womens_clothes')->get();
        

        // Get all [ Toys ] products Where Products_department = toys
        $toys_products=Product::where('products_department','toys')->get();

        
        
        // Get all [ Gifts ] products Where Products_department = gifts
        $gifts_products=Product::where('products_department','gifts')->get();

        
      

        return view('home',
        [
            'ads'=>$ads,
            'skin_care_products'=>$skin_care_products,
            'hair_care_products'=>$hair_care_products,
            'body_care_products'=>$body_care_products,
            'nail_care_products'=>$nail_care_products,
            'make_up_products'=>$make_up_products,
            'perfume_products'=>$perfume_products,
            'womens_accessories_products'=>$womens_accessories_products,
            'ramadan_accessories_products'=>$ramadan_accessories_products,
            'mans_accessories_products'=>$mans_accessories_products,
            'womens_bages_products'=>$womens_bages_products,
            'womens_clothes_products'=>$womens_clothes_products,
            'toys_products'=>$toys_products,
            'gifts_products'=>$gifts_products
            
        ]);
    }


    // Show details for [ Product ] by id
    public function products_show_details($id,$products_title){
        $product_details = Product::findOrFail($id)->first();

        return view('products_show_details/show_details',
        [   
            'product_details'=>$product_details,
            'id'=>$id,
            'title'=>$products_title
        ]);
    }
    
    
}
