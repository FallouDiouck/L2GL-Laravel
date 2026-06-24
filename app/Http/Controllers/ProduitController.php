<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::paginate(5);
        return view('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\Categorie::all();
        return view('produits.create', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nom'         => 'required|min:3',
                'prix'        => 'required|numeric',
                'quantite'    => 'required|integer',
                'description' => 'nullable|max:500',
            ],
            [
                'nom.required'      => 'Le nom du produit est obligatoire.',
                'nom.min'           => 'Le nom doit contenir au moins 3 caractères.',
                'prix.required'     => 'Le prix est obligatoire.',
                'prix.numeric'      => 'Le prix doit être un nombre.',
                'quantite.required' => 'La quantité est obligatoire.',
                'quantite.integer'  => 'La quantité doit être un nombre entier.',
                'description.max'   => 'La description ne peut pas dépasser 500 caractères.',
            ]
        );
        Produit::create($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::find($id);
        $categories = \App\Models\Categorie::all();
        return view('produits.edit', compact('produit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nom'         => 'required|min:3',
                'prix'        => 'required|numeric',
                'quantite'    => 'required|integer',
                'description' => 'nullable|max:500',
            ],
            [
                'nom.required'      => 'Le nom du produit est obligatoire.',
                'nom.min'           => 'Le nom doit contenir au moins 3 caractères.',
                'prix.required'     => 'Le prix est obligatoire.',
                'prix.numeric'      => 'Le prix doit être un nombre.',
                'quantite.required' => 'La quantité est obligatoire.',
                'quantite.integer'  => 'La quantité doit être un nombre entier.',
                'description.max'   => 'La description ne peut pas dépasser 500 caractères.',
            ]
        );

        $produit = Produit::find($id);
        $produit->update($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès !');
    }
}
