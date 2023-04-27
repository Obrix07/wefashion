<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()//recuperer tous les produits et appel le vue en envoyant la liste des produits
    {        
        $products = Products::all();
        return view('welcome', ['products' => $products]);
    }
    
    public function show(int $id) // affiche la page specifique a un produit 
    {
        $products = Products::find($id);
        return view('show', ['products' => $products]);
    }

    // public function create() //appelé le formulaire
    // {
    //     # code...
    // }

    // public function store(Request $request) // recupere les données de la request, validation a faire
    // {
    //     $name = $request->input('name');
    //     Products::create([
    //         'name' => $name
    //     ]);
    // }


    // public function edit(int $id) // 
    // {
    //     # code...
    // }

    // public function update(Request $request)
    // {
    //     $name = $request->input('name');
    // }

    // public function destroy(int $id)
    // {
    //     # code...
    // }
}
