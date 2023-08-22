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


                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalScrollable"
                            style="width: 100px; height: 30px;">
                            Ajouter
                        </button>


                </div>




                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered owerflow-x-auto" id="example" style="padding:20px margin:30px">
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
                                @foreach ($projets as $projet)
                                    <tr class="text-nowrap">
                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $projet->titre_projet }}</strong>
                                        </td>
                                        <td>{{ $projet->objectif_global }}</td>
                                        <td>
                                            {{ $projet->financement }}
                                        </td>
                                        <td>
                                            {{ $projet->budjet }}
                                        </td>
                                        <td>
                                            {{ $projet->zone }}
                                        </td>
                                        <td>
                                            {{ $projet->find_duration() }} mois
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('projet.edit',$projet,$categorie_projets)}}">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </a>
                                                    <form action="{{ route('projet.destroy', $projet) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bx bx-trash me-1"></i> Delete
                                                        </button>
                                                    </form>


                                                </div>
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

            @include('projet.create')
        </div>

<script>
         new DataTable('#example', {
            // Options de configuration de DataTables
            lengthChange: false, // Désactiver la sélection du nombre de lignes
            info: false,
            paging: false,
             language: {
                 "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
             }
            // Vous pouvez définir d'autres paramètres tels que les colonnes, etc.
        });


</script>


        {{-- <script>
            new DataTable('#example', {});
        </script> --}}






                    {{-- <script src="../assets/vendor/libs/jquery/jquery.js"></script>
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
                    <script src="../assets/js/dashboards-analytics.js"></script> --}}



                @stop
