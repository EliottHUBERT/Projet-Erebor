@include('header')
    <body>
        <div class="border border-dark" style="margin-left: 15%;">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Taille</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fichiers as $fichier)
                    <tr>
                        <th scope="row">{{ $fichier->id }}</th>
                        <td>{{ $fichier->nom }}</td>
                        <td>{{ $fichier->taille }}</td>
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
            <button class="btn btn-secondary" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
            </div>
        </div>
    </body>
</html>
