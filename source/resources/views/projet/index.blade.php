@extends('layout.dashboard')
@section('content')
<div class="content-wrapper">

 <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Liste des projets</h4>


              <!-- Bordered Table -->
              <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header">Liste des projets1</h5>
                    <a href="#" target="_blank" class="btn btn-primary" style="margin:20px;">ajouter</a>
                </div>




                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered owerflow-x-auto"  >
                      <thead>
                        <tr class="text-nowrap">
                            <th>Titre_projet</th>
                            <th>Objectif_global</th>
                            <th>Financement</th>
                            <th>Budjet</th>
                            <th>Zone</th>
                            <th>Durée</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($projets as $projet)


                        <tr class="text-nowrap">
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$projet->titre_projet}}</strong>
                          </td>
                          <td>{{$projet->objectif_global}}</td>
                          <td>
                            {{$projet->financement}}
                          </td>
                          <td>
                            {{$projet->budjet}}
                        </td>
                          <td>
                            {{$projet->zone}}
                          </td>
                          <td>
                            {{$projet->find_duration()}}
                          </td>
                          <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                  >
                                  <a class="dropdown-item" href="javascript:void(0);"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                  >
                                </div>
                          </td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/ Bordered Table -->



              <hr class="my-5" />

              <!-- Responsive Table -->

              <!--/ Responsive Table -->
            </div>



@stop
