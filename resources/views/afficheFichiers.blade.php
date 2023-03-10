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
                                @if($role!="Lecture")
                                    <form action="/delFichier/{{ $fichier->id }}" method="post" enctype="multipart/form-data">
                                    @method('DELETE')
                                    @csrf
                                    <input type="text" name="idEspace" id="idEspace" value="{{$idEspace}}" hidden>
                                    <input type="text" name="nom" id="nom" value="{{$fichier->nom}}" hidden>
                                    <button type="submit" class="btn btn-danger"><img src="../../../../Images/trash.svg"></button>
                                    </form>
                                @endif
                                    <form action="/download/{{ $fichier->nom }}" method="get" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="idEspace" id="idEspace" value="{{$idEspace}}" hidden>
                                    <input type="text" name="nom" id="nom" value="{{$fichier->nom}}" hidden>
                                    <button type="submit" class="btn btn-success"><img src="../../../../Images/download.svg"></button>
                                    </form>
                                </div>
                            </div>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('Error'))
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
            </div>
    <div class="text-center">
                @if($role!="Lecture")
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" style="min-width: 10%; margin-bottom: 0.5%" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="../../../../Images/add-File.svg" style="width: 25%">
                </button>
                @endif
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
        </div>
    </body>

    @include('MoToReadable')

    <script>
        Go("size");
    </script>
</html>
