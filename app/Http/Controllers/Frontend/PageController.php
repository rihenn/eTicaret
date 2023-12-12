<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function products(){
    return view("frontend.pages.products");
   }
   public function about(){
    return view("frontend.pages.about");
   }
   public function productDetail(){
    return view("frontend.pages.productDetail");
   }
   public function communication(){
    return view("frontend.pages.communication");
   }
   public function cart(){
    return view("frontend.pages.cart");
   }

}
