<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Assurez-vous que l'utilisateur est authentifié avant d'accéder à cette méthode
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Seulement pour les utilisateurs authentifiés
    // }


    // Sauvegarder un produit associé à la personne authentifiée
    public function store(ProductFormRequest $request)
    {
        // dd('Product');
        // Valider les données du formulaire
        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'prix' => 'required|floatval|min:0',
        //     'quantite' => 'required|integer|max:255',
        //     'description' => 'required|string|min:0',
        // ]);

        // Créer un produit et l'associer à la personne authentifiée
        // $produit = new Produit();
        // $produit->nom = $request->input('nom');
        // $produit->prix = $request->input('prix');
        // $produit->quantite = $request->input('quantite');
        // $produit->description = $request->input('description');
        // $produit->personne_id = Auth::id(); // Associer le produit à la personne authentifiée
        // $produit->save();

        try {
            DB::transaction(function () use ($request){
                $newproduct = new Produit();
                $newproduct->nom = $request->nom;
                $newproduct->prix = $request->prix;
                $newproduct->quantite = $request->quantite;
                $newproduct->description = $request->description;
                $newproduct->personne_id  = Auth::guard('personnes')->user()->id;
                $newproduct->save();
            });
            return redirect()->route('main_dash');

        } catch (\Throwable $th) {
            // throw $th;
            return back();
        }

        // $newproduct = Produit::create([
        //     'nom' => $request->nom,
        //     'prix' => $request->prix,
        //     'quantite' => $request->quantite,
        //     'description' => $request->description,
        //     'personne_id' =>  Auth::guard('personnes')->user()->id, // Associer le produit à la personne authentifiée
        // ]);

       
    }

    public function delete_product(Request $request)
    {
        $id = $request->product_id;
        // $product = Produit::find($id);
        $product = Produit::where('id', $id);
        $product->delete();
        return redirect()->route('main_dash');
    }
    public function update_product(Request $request)
    {
        $id = $request->product_id;

        // $newproduct = Produit::find($id);
        // $newproduct->nom = $request->nom;
        // $newproduct->prix = $request->prix;
        // $newproduct->quantite = $request->quantite;
        // $newproduct->description = $request->description;
        // $newproduct->save();

        Produit::where('id', $id)->update([
            'nom' => $request->nom,
            "prix" => $request->prix,
            "quantite" => $request->quantite,
            "description" => $request->description
        ]);
        return redirect()->route('main_dash');
    }
}
