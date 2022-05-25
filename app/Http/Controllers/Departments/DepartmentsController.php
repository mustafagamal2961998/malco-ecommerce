<?php

namespace App\Http\Controllers\Departments;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function body_func(){
        // Get All Ads
        $ads = Ad::All();
        return view('departments.body',['ads'=>$ads]);
    }
    public function gifts_func(){
        // Get All Ads
        $ads = Ad::All();
        return view('departments.gifts',['ads'=>$ads]);
    }

    public function hair_func(){
        // Get All Ads
        $ads = Ad::All();
        return view('departments.hair',['ads'=>$ads]);
    }

    public function makeup_func(){
        // Get All Ads
        $ads = Ad::All();
        return view('departments.makeup',['ads'=>$ads]);
    }
    
}
