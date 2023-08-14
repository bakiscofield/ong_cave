@extends('layout.dashboard')
@section('content')

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<div class="content-wrapper">

 <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Liste des projets</h4>


              <!-- Bordered Table -->
              <div class="card">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-header">Liste des projets1</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable" style="width: 100px; height: 30px;">
                        Option 2
                    </button>
                </div>




                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered owerflow-x-auto" id="example" style="padding:20px margin:30px" >
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


            <script>
                new DataTable('#example', {});
            </script>







    <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                 <!--/ forulaire Table -->




                <div class="modal-body">


                    <div class="col-md-10">
                        <input class="form-control" type="text" value="Sneat" id="html5-text-input" />
                      </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>



@stop
