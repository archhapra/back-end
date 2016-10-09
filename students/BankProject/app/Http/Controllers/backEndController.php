<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class backEndController extends Controller
{

 public function BannersPage()
    {
        $pagetype="BannersPage";
        return view('back end.BannersPage')->with(['pagetype'=>$pagetype]);
    }

    public function CategoryPage()
    {
        $pagetype="CategoryPage";
        return view('back end.CategoryPage')->with(['pagetype'=>$pagetype]);
    }


    public function CategoryPageAddCategory()
    {
        $pagetype="CategoryPageAddCategory";
        return view('back end.CategoryPageAddCategory')->with(['pagetype'=>$pagetype]);
    }

    public function CategoryPageEditCategory()
    {
        $pagetype="CategoryPageEditCategory";
        return view('back end.CategoryPageEditCategory')->with(['pagetype'=>$pagetype]);
    }

    public function CategoryPageListAttributes()
    {
        $pagetype="CategoryPageListAttributes";
        return view('back end.CategoryPageListAttributes')->with(['pagetype'=>$pagetype]);
    }

    public function CategoryPageProductListing()
    {
        $pagetype="CategoryPageProductListing";
        return view('back end.CategoryPageProductListing')->with(['pagetype'=>$pagetype]);
    }


	public function OrderListingPage()
    {
        $pagetype="OrderListingPage";
        return view('back end.OrderListingPage')->with(['pagetype'=>$pagetype]);
    }


	public function ProductsPage()
    {
        $pagetype="ProductsPage";
        return view('back end.ProductsPage')->with(['pagetype'=>$pagetype]);
    }


	public function ProductsPageAddProduct()
    {
        $pagetype="ProductsPageAddProduct";
        return view('back end.ProductsPageAddProduct')->with(['pagetype'=>$pagetype]);
    }


	public function ProductsPageEditProduct()
    {
        $pagetype="ProductsPageEditProduct";
        return view('back end.ProductsPageEditProduct')->with(['pagetype'=>$pagetype]);
    }


	public function StaticPages()
    {
        $pagetype="StaticPages";
        return view('back end.StaticPages')->with(['pagetype'=>$pagetype]);
    }

public function backendDashboard()
    {
        $pagetype="backendDashboard";
        return view('back end.backendDashboard')->with(['pagetype'=>$pagetype]);
    }

 public function addStaticPage()
    {
        $pagetype="addStaticPage";
        return view('back end.addStaticPage')->with(['pagetype'=>$pagetype]);
    }

     public function editStaticPage()
    {
        $pagetype="editStaticPage";
        return view('back end.editStaticPage')->with(['pagetype'=>$pagetype]);
    }

}
