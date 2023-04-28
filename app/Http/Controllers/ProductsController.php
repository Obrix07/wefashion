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
        $products = Products::findOrFail($id);
        return view('show', ['product' => $products]);
    }

    public function listing() 
    {
        $products = Products::all();
        return view('admin', ['products' => $products]);
    }

    public function edit(int $id) //appelé le formulaire
    {
        $products = Products::findOrFail($id);
        return view('edit', ['product' => $products]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'price' => 'required|numeric',
        'visible' => 'required|boolean',
        'state' => 'required|boolean',
        'reference' => 'required|unique:products|max:255',
        'category_id' => 'required|exists:categories,id'
    ]);

    $product = new Products();
    $product->name = $validatedData['name'];
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->visible = $validatedData['visible'];
    $product->state = $validatedData['state'];
    $product->reference = $validatedData['reference'];
    $product->category_id = $validatedData['category_id'];

    $product->save();

    return redirect()->route('products-listing');
}

    public function create() // 
    {
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        $products = Products::findOrFail($id);

        // Mettre à jour l'élément avec les données du formulaire
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        // ...

        $products->save();

    return redirect()->route('products-listing');
    }

    // public function destroy(int $id)
    // {
    //     # code...
    // }
}
