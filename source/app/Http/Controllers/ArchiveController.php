<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Fichier;
use App\Models\TypeArchive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archive=Archive::latest()->get();
        return view("archive.index", compact("archive"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_archive=TypeArchive::all();
        //dd($type_archive[0]->nom_type);
       return view("archive.create", compact('type_archive'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['id_user']=1;
      //  dd(request());
        //dd($request->id_type_archive);
        $archive = Archive::create($request->all());
      //  $projets = Projet::create($request->all());
       //  dd($request->file('fichier_archives'));
      $i=0;
      //dd($request->all());
      if ($request->file('fichier_archives') ){
       foreach($request->file('fichier_archives') as $file){
       // dd($file);
           //dd($file);
           $path=$archive->titre_archives.++$i.".".$file->extension();
           $path="archives/".$path;
           // dd($path);

           $file->storeAs('public/',$path );
           Fichier::create(
               [
                   'nom_fichier'=>$path,
                   'id_archive'=>$archive->id,
               ]
               );
          }
      }

    }

    /**
     * Display the specified resource.
     */
    public function show(Archive $archive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archive $archive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archive $archive)
    {
        //
    }
}
