<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
     return view("frontand.index");
   }

   public function aboutus()
   {

      return view("frontand.about");
      
   }
   public function contactus()
   {

     return view("frontand.contact");

   }
   public function services()
   {

     return view("frontand.services");

   }
   public function gallery()
   {

     return view("frontand.gallery");

   }
   public function plans()
   {

     return view("frontand.plans");

   }
   public function packages()
   {

     return view("frontand.packages");

   }


  }


