<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index() //recuperer tous les produits et appel la vue en envoyant la liste des produits
    {
        $products = Products::simplePaginate(6);
        return view('welcome', ['products' => $products]);
    }

    public function listing() //recuperer tous les produits et appel la vue en envoyant la liste des produits pour la page admin
    {
        $products = Products::simplePaginate(15);
        return view('admin', ['products' => $products]);
    }

    public function show(int $id) // affiche la page specifique a un produit 
    {
        $products = Products::findOrFail($id);
        return view('show', ['product' => $products]);
    }

    public function create() // appelle le formurlaire pour ajouter un nouvel éléments
    {
        return view('form');
    }

    public function store(Request $request) // stock les nouvelles données dans la table
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

        return redirect()->route('products.listing');
    }

    public function edit(int $id) // appelle le formurlaire pour modifier un éléments
    {
        $products = Products::findOrFail($id);
        return view('form', ['product' => $products]);
    }

    public function update(Request $request, $id) // modifie les données de la table
    {
        $products = Products::findOrFail($id);

        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->visible = $request->input('visible');
        $products->state = $request->input('state');
        $products->reference = $request->input('reference');
        $products->category_id = $request->input('category_id');
        $products->save();

        return redirect()->route('products.listing');
    }

    public function destroy(int $id) // supprime une ligne de la table
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('products.listing');
    }

    public function filterByCategory($category_id) // filtre sur la category_id
    {
        $products = Products::where('category_id', $category_id)->get();
        return view('category', ['products' => $products]);
    }

    public function filterByState($state) // filtre sur le state
    {
        $products = Products::where('state', $state)->get();
        return view('state', ['products' => $products]);
    }
}
