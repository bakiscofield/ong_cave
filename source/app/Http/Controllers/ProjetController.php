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
        $projets = Projet::all();
        $categorie_projets=CategorieProjet::all();
        //dd($categorie_projets[0]->nom_categorie);
        return view('projet.create', compact('projets', 'categorie_projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $projet=Projet::all();

       //dd($request->file('fichier_projet')[0]->extension());
        $request['id_user']=1;
       // dd($request->all());

       $projets = Projet::create($request->all());
       dd($projets[0]);
       dd($request->file('fichier_projet'));
       $i=0;
       foreach($request->file('fichier_projet') as $file){

           $path=$projets->titre_projetbel.++$i.".".$file->extension();
           $path="fichier/".$path;
           // dd($path);

           $file->storeAs('public/',$path );
           Projet::create(
               [
                   'path'=>$path,
                   'id_projets'=>$projets->id,
               ]
               );
       }




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
        $projets = Projet::all();
        $categorie_projets=CategorieProjet::all();

        return view('projet.edit',compact('projets','categorie_projets','projet'));
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
