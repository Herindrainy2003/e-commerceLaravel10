<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\Produit;
class adminController extends Controller
{
    public function dashboard(){
        return view ('admin.dashboard');
    }
    public function ajouterCategories(){
        return view ('admin.ajouterCategories');
    }
    public function afficherCategories(){
        $categories=categories::get();
        return view ('admin.afficherCategories',compact('categories'));
    }
    public function ajouterProduit(){
       $categories=categories::All()->pluck('nomcategorie','nomcategorie');
        return view ('admin.ajouterproduit',compact('categories'));
    }
    public function afficherProduit(){
        $Produit=Produit::get();
        return view ('admin.afficherProduit');
    }
    
    public function afficherSliders(){
        return view ('admin.afficherSliders');
    }
    public function ajouterSliders(){
        return view ('admin.ajoutersliders');
    }
    public function commandes(){
        return view ('admin.commandes');
    }
    public function login(){
        return view ('admin.login');
    }
    public function signup(){
        return view ('admin.signup');
    }
}
