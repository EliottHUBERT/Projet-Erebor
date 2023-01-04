@include('header')
    <body>
        <div style="background-color: #3d3d3d; height: calc(100vh - 3.5rem); max-width: 15%; border-top-right-radius: 15px;">
            <p>qsdsq</p>
        </div>
        <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 100%; border-radius: 15px;">

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="border-top-left-radius: 15px">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Quota</th>
                    <th scope="col">Quota Maximum</th>
                    <th scope="col">Nb Fichiers</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($espaces as $espace)
                <tr>
                    <th scope="row">{{ $espace->id }}</th>
                    <td>{{ $espace->nom }}</td>
                    <td>{{ $espace->quota }}mo</td>
                    <td>{{ $espace->quotaMax }}mo</td>
                    <td>{{ $espace->nbFiles }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-success" onclick="location.href='/listeFichiers/{{$espace->id}}'"><img src="../../../../Images/open.svg"></button>
                            <button class="btn btn-primary" onclick="location.href='/listeDossiers'"><img src="../../../../Images/settings.svg"></button>
                            <button class="btn btn-secondary" onclick="location.href='/detailDossier/{{$espace->id}}'"><img src="../../../../Images/user.svg"></button>
                            <button class="btn btn-danger"><img src="../../../../Images/trash.svg"></button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
