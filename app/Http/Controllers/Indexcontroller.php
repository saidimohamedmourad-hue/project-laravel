<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    function index()
     {
        return view("index");
     }
      function contact()
     {
        return view("contact",["pagetitle"=>'contact page']);
     }
     function about()
     {
        return view("about",["pagetitle"=>'about page']);
     }
    
}
 

