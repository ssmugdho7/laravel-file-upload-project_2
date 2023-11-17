<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index($id,Request $request){
        $name = "Donald Trump";
        $age = "75";
        
        $data = array(
            "id" => $id,
            "name" => $name,
            "age"  => $age,
         ); 

    
        $name  = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $httpOnly = true;
        $secure = false;

   

         return response($data)->cookie($name,$value,$minutes,$path,$domain,$httpOnly,$secure,200);
    
    
    }



}
