<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class layoutController extends Controller
{

 public function dashboard()
    {
        $pagetype="dashboard";
        return view('layouts.dashboard')->with(['pagetype'=>$pagetype]);
    }

     public function products()
    {
        $pagetype="products";
        return view('layouts.products')->with(['pagetype'=>$pagetype]);
    }

 public function payment()
    {
        $pagetype="payment";
        return view('layouts.payment')->with(['pagetype'=>$pagetype]);
    }

    public function orderPlaced()
    {
        $pagetype="orderPlaced";
        return view('layouts.orderPlaced')->with(['pagetype'=>$pagetype]);
    }

public function orderHistory()
    {
        $pagetype="orderHistory";
        return view('layouts.orderHistory')->with(['pagetype'=>$pagetype]);
    }

public function checkout()
    {
        $pagetype="checkout";
        return view('layouts.checkout')->with(['pagetype'=>$pagetype]);
    }

public function signup()
    {
        $pagetype="signup";
        return view('layouts.signup')->with(['pagetype'=>$pagetype]);
    }

    public function userlogin()
    {
        $pagetype="userlogin";
        return view('layouts.userlogin')->with(['pagetype'=>$pagetype]);
    }

    public function reset()
    {
        $pagetype="reset";
    	return view('layouts.reset')->with(['pagetype'=>$pagetype]);
    }

public function mobiles()
    {
        $pagetype="mobiles";
        return view('layouts.mobiles')->with(['pagetype'=>$pagetype]);
    }
 public function myProfile()
    {
        $pagetype="myProfile";
        return view('layouts.myProfile')->with(['pagetype'=>$pagetype]);
    }

public function resetpassword()
    {
        $pagetype="resetpassword";
        return view('layouts.resetpassword')->with(['pagetype'=>$pagetype]);
    }

}

   /* public function index1()
    {
        $pagetype="index1";
        return view('pages.index1')->with(['pagetype'=>$pagetype]);
    }

     public function services()
    {
        $pagetype="services";
    	return view('pages.services')->with(['pagetype'=>$pagetype]);
    }

     public function portfolio()
    {
        $pagetype="portfolio";
    	return view('pages.portfolio')->with(['pagetype'=>$pagetype]);
    }

     

     public function mail()
    {
        $pagetype="mail";
    	return view('pages.mail')->with(['pagetype'=>$pagetype]);
    }

     public function shortcodes()
    {
        $pagetype="shortcodes";
    	return view('pages.short-codes')->with(['pagetype'=>$pagetype]);
    }

     public function single()
    {
        $pagetype="single";
    	return view('pages.single')->with(['pagetype'=>$pagetype]);
    }
}  