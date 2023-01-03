@include('header')
    <body>
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
                            <button class="btn btn-danger"><img src="../../../../Images/trash.svg"></button>
                            <button class="btn btn-success"><img src="../../../../Images/download.svg"></button>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </body>
</html>
