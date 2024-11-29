<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Assurez-vous que l'utilisateur est authentifié avant d'accéder à cette méthode
    public function __construct()
    {
        $this->middleware('auth'); // Seulement pour les utilisateurs authentifiés
    }


    // Sauvegarder un produit associé à la personne authentifiée
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|floatval|min:0',
            'quantite' => 'required|integer|max:255',
            'description' => 'required|string|min:0',
        ]);

        // Créer un produit et l'associer à la personne authentifiée
        $produit = new Produit();
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->quantite = $request->input('quantite');
        $produit->description = $request->input('description');
        $produit->personne_id = Auth::id(); // Associer le produit à la personne authentifiée
        $produit->save();

        return redirect()->route('main_dash');
    }
}
