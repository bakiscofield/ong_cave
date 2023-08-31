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
                                    data-bs-target="#modalScrollable" style="width: 100px; height: 30px; ">
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
                                @foreach ($type_archives as $type_archive)
                                    <tr class="text-nowrap">
                                        <!-- ... Contenu des cellules ... -->

                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $type_archive->id }}</strong>
                                        </td>
                                        <td>{{ $type_archive->nom_type }}</td>

                                        <td>

                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('type_archive.edit',$type_archive)}}">
                                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                                    </a>

                                                    <form action="{{ route('type_archive.destroy', $type_archive) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bx bx-trash me-1"></i> Delete
                                                        </button>
                                                    </form>


                                                </div>
                                            </div </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ... Le reste de votre contenu ... -->
        @include('type_archive.create')

        <!-- Inclure jQuery (une seule fois) -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

        <!-- Inclure les scripts DataTables (après jQuery) -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <!-- Inclure Bootstrap JavaScript (après jQuery) -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- ... D'autres scripts ... -->

    @stop