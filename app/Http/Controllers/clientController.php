<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class clientController extends Controller
{
    public function home(){
        return view('frontend.index');
    }
    public function shop(){
        return view('frontend.shop');
    }
    public function cart(){
        return view('frontend.cart');

    }
    public function checkout(){
        return view('frontend.checkout');
    }
    public function affichage(){
        return view('admin.affichage');
    }
}
