@include('header')
    <body>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Taille</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fichiers as $fichier)
                <tr>
                    <th scope="row">{{ $fichier->id }}</th>
                    <td>{{ $fichier->nom }}</td>
                    <td>{{ $fichier->taille }}</td>
                    <td>{{ $fichier->date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </body>
</html>
