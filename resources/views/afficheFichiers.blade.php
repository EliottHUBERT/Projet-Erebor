@include('header')
    <body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-bottom: 0%; margin-left: 15%; width: 85%; border-radius: 15px;">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="border-top-left-radius: 15px">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Taille</th>
                        <th scope="col">Date</th>
                        <th scope="col" style="border-top-right-radius: 15px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fichiers as $fichier)
                    <tr>
                        <th scope="row">{{ $fichier->id }}</th>
                        <td>{{ $fichier->nom }}</td>
                        <td class="size">{{ $fichier->taille }} Mo</td>
                        <td>{{ $fichier->date }}</td>
                        <td>
                            <div>
                                <div class="btn-group">
                                    <button class="btn btn-danger"><img src="../../../../Images/trash.svg"></button>
                                    <button class="btn btn-success"><img src="../../../../Images/download.svg"></button>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

    <div class="text-center"> 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" style="min-width: 10%" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="../../../../Images/addfolder.svg" style="width: 25%">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajout de fichier</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                                <input type="text" name="idEspace" id="idEspace" value="{{$idEspace}}" hidden>
                                <label class="custom-file-label" for="chooseFile">Fichier choisie</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                Envoyer
                            </button>
                        </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
                <br>
            </div>
            <ul class="pagination justify-content-center mb-0">
            {{$fichiers->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </body>
    <script>

 function Go(ClassName) {
    myCells = document.getElementsByClassName(ClassName);
    console.log(myCells);

    for (let i = 0; i < myCells.length; i++){

        var value = myCells[i].innerHTML;
        value = parseInt(value.substr(0, value.length-2));

        if(value>=1024){

                value = (value/1024).toFixed(2);
                myCells[i].innerHTML = value+" Go"
            }
    }
}
 Go("size");

</script>
</html>
