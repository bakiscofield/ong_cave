@extends('projet.index')
@section('content')
<div >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">ENREGISTREMENT DU PROJET </h5>
            </div>
            <!--/ forulaire Table -->
            <div class="modal-body">

                <form action="{{ route('projet.update','projet') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                        <select class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example" name="id_categorie">
                            <option selected>categorie</option>
                            @foreach ($categorie_projets as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
                            @endforeach
                        </select>
                    </div>


                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="titre_projet"
                            placeholder="Titre" value="{{$projet->titre_projet}}" />
                    </div> <br>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">objectif_global</label>
                        <div class="col-sm-10">
                            <textarea name="objectif_global" id="basic-default-message" class="form-control"
                                 value="{{$projet->objectif_global}}"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"
                            for="basic-default-message">objectif_specifiques</label>
                        <div class="col-sm-10">
                            <textarea name="objectif_specifiques" id="basic-default-message" class="form-control"
                                 value="{{$projet->objectif_specifiques}}"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Financement</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="financement"
                                placeholder="Titre" value="{{$projet->financement}}"/>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Budjet</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name"
                                    name="budjet" placeholder="Budjet" value="{{$projet->budjet}}"/>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Zone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name"
                                        name="zone" placeholder="Zone" value="{{$projet->zone}}"/>
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-date-input"
                                        class="col-md-2 col-form-label">DateDebut</label>
                                    <div class="col-md-10">
                                        <input name="date_debut" class="form-control" type="date"
                                            value="2021-06-18" id="html5-date-input" value="{{$projet->date_debut}}"/>
                                    </div>
                                </div>



                                <div class="mb-3 row">
                                    <label for="html5-date-input" class="col-md-2 col-form-label">DateFin</label>
                                    <div class="col-md-10">
                                        <input name="date_fin" class="form-control" type="date"
                                            value="2021-06-18" id="html5-date-input" value="{{$projet->date_fin}}" />
                                    </div>
                                </div>

                                <div class="mb-3">

                                    <label for="formFileMultiple" class="form-label"></label>
                                    <input name="fichier_projet" class="form-control" type="file"
                                        id="formFileMultiple" multiple value="{{$projet->fichier_projet}}"/>
                                </div>



                                <div class="modal-footer">
                                    <a href="{{route('projet.index')}}">
                                        <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal" >
                                        Close
                                    </button>
                                </a>

                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
@stop
