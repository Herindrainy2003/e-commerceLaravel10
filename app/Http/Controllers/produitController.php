<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\categories;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nomProduit'=>'required|regex:/^[a-zA-Z0-9]/',
        //     'prixProduit'=>'required|regex:/^[0-9]/',
        //     'categories'=>'required|unique:categories',
        //     'image'=>'required|mimes:png,jpg,jpeg,ico'
        // ]);
        // $input=$request->all();
        // if($image=$request->file('image')){
        //     $destination='/images';
        //     $nomImage=date('YmdHis').'.'.$image->getClientOriginalExtension();
        //     $image->move($destination,$nomImage);
        //     $input['image']="$nomImage";
        // }
        // Produits::create($input);
        // return redirect('/afficherProduit');
        print($request->input('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $Produit)
    {
        $Produit=Produit::get();
        return view('updateproduit',compact('Produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $Produit)
    {
        $request->validate([
            'nomProduit'=>'required|regex:/^[a-z]/',
            'prixProduit'=>'required|regex:/^[0-9]/',
            'categories'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg'
        ]);
        $input->request->all();
        //pour l'image
      if($image=$request->file('image')) {
        $destination='/images';
        $nomImage=date('YmdHis').'.'.$image->getClientOriginalExtension();
        $Image->move($destination,$nomImage);
        $input['image']="$nomImage";
         }
        $Produit= Produit::update($input);
         return redirect('/afficherproduit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
