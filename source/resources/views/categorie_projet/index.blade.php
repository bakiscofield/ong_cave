@extends('layout.dashboard')
@section('content')



    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- ... Votre contenu ... -->

            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered owerflow-x-auto" id="example">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header">Liste des Categories de Projets</h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalScrollable" style="width: 100px; height: 30px;">
                                    Ajouter
                                </button>
                            </div>

                            <thead>
                                <tr class="text-nowrap">
                                    <!-- ... En-têtes de colonnes ... -->

                                    <thead>
                                        <tr class="text-nowrap">
                                            <th>ID</th>
                                            <th>Axes Strategiques</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projet_categories as $categorie_projet)
                                    <tr class="text-nowrap">
                                        <!-- ... Contenu des cellules ... -->

                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $categorie_projet->id }}</strong>
                                        </td>
                                        <td>{{ $categorie_projet->nom_categorie }}</td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <form action="{{ route('categorie_projet.edit') }}" method="GET">
                                                        @csrf
                                                        <a class="dropdown-item">
                                                            <button type="submit" class="btn p-0">

                                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                                            </button>

                                                        </a>
                                                    </form>

                                                    <form
                                                        action="{{ route('categorie_projet.destroy', $categorie_projet) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item">
                                                            <button type="submit" class="btn p-0">

                                                                <i class="bx bx-trash me-1"></i> Delete

                                                            </button>

                                                        </a>


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

        <!-- ... Le reste de votre contenu ... -->

        <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--/ forulaire Table -->




                    <div class="modal-body">

                        <form action="{{ route('categorie_projet.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="nom_categorie"
                                        placeholder="Axes Stratégiques" />
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                        </form>




                    </div>
                </div>
            </div>

        </div>

        <!-- Inclure jQuery (une seule fois) -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

        <!-- Inclure les scripts DataTables (après jQuery) -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <!-- Inclure Bootstrap JavaScript (après jQuery) -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- ... D'autres scripts ... -->

    @stop
