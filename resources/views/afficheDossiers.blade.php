@include('header')
    <body>
        <div class="border border-dark" style="margin-left: 15%;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
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
                            <button class="btn btn-secondary"><img src="../../../../Images/user.svg"></button>
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
