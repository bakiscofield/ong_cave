<?php

namespace App\Http\Controllers;

use App\Models\CategorieProjet;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        $categorie_projets=CategorieProjet::all();
        //dd($categorie_projets[0]->nom_categorie);
        return view('projet.index', compact('projets', 'categorie_projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request['id_user']=1;
       // dd($request->all());
        $projets = Projet::create($request->all());


        return redirect()->route('projet.index')->with('success', 'Consultant supprimé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
       //dd($categorie_projet);
       $projet->delete();
       return redirect()->route('projet.index')->with('success', 'Consultant supprimé avec succès.');
    }
}
