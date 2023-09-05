<div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--/ forulaire Table -->




            <div class="modal-body">

                <form action="{{ route('archive.update', $archive) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    { {dump($archive->id_type_archive)}}
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                            name="id_type_archive">
                            <option>Open this select menu</option>
                            @foreach ($type_archive as $type)
                                @if ($archive->id_type_archive == $type->id)
                                    <option selected value="{{ $type->id }}"> {{ $type->nom_type }}</option>
                                @else
                                    <option value="{{ $type->id }}"> {{ $type->nom_type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>


                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="basic-default-name" name="titre_archives"
                            placeholder="Titre" value="{{ $archive->titre_archives }}" />
                    </div> <br>






                    <div class="mb-3">

                        <label for="formFileMultiple" class="form-label"></label>
                        <input name="fichier_archives[]" class="form-control" type="file" value="{{$archive->id}}" multiple />
                    </div>
                    <script>
                        let fichier = {!! $archive->fichiers !!}
                        //console.log(fichier);0
                    </script>



                    <div class="modal-footer">
                        <a href="{{ route('archive.index') }}">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </a>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </div>
        </div>
        </form>



    </div>
</div>
</div>

</div>
