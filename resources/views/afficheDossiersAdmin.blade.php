@include('header')

    <body>
        @include('panel')
        <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-bottom: 0%; margin-left: 15%; width: 85%; border-radius: 15px;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="border-top-left-radius: 15px">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Quota</th>
                    <th scope="col">Quota Maximum</th>
                    <th scope="col">Nb Fichiers</th>
                    <th scope="col" style="border-top-right-radius: 15px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($espaces as $espace)
                <tr>
                    <th scope="row">{{ $espace->id }}</th>
                    <td>{{ $espace->nom }}</td>
                    <td class='quota'>{{ $espace->quota }} Mo</td>
                    <td class='quotaMax'>{{ $espace->quotaMax }} Mo</td>
                    <td>{{ $espace->nbFiles }}</td>
                    <td>
                        <div class="btn-group">
                        <form action=/listeFichiers method="POST">
                                @csrf
                                <input type="text" name="idEspace" id="idEspace" value="{{$espace->id}}" hidden>
                                <input type="text" name="role" id="role" value="{{$espace->role}}" hidden>
                                <button type=submit class="btn btn-success"><img src="../../../../Images/open.svg"></button>
                            </form>

                            <form action=/editDossier method="POST">
                                @csrf
                                <input type="text" name="idEspace" id="idEspace" value="{{$espace->id}}" hidden>
                                <button type='submit' class="btn btn-primary"><img src="../../../../Images/settings.svg"></button>
                            </form>

                            <form action=/detailDossier method="POST">
                                @csrf
                                <input type="text" name="idEspace" id="idEspace" value="{{$espace->id}}" hidden>
                                <button type='submit' class="btn btn-secondary"><img src="../../../../Images/user.svg"></button>
                            </form>

                            <form action=/delDossier method="POST">
                                @csrf
                                <input type="text" name="idEspace" id="idEspace" value="{{$espace->id}}" hidden>
                                <button type='submit' class="btn btn-danger"><img src="../../../../Images/trash.svg"></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">

            <button class="btn btn-success mx-sm-3 mb-2" style="min-width:10%" onclick="location.href='/addDossier'"><img src="../../../../Images/addfolder.svg" style="width: 25%"></button>

            <ul class="pagination justify-content-center mb-0">
            {{$espaces->links("pagination::bootstrap-4")}}
            </ul>

        </div>

    </div>
    </body>
    @include('MoToReadable')
    <script>
        Go("quota");
        Go("quotaMax");
    </script>
</html>
