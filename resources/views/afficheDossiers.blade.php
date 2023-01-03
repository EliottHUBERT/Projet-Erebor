@include('header')
    <body>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Quota</th>
                    <th scope="col">Quota Maximum</th>
                    <th scope="col">Nb Fichiers</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($espaces as $espace)
                <tr>
                    <th scope="row">{{ $espace->id }}</th>
                    <td>{{ $espace->nom }}</td>
                    <td>{{ $espace->quota }}</td>
                    <td>{{ $espace->quotaMax }}</td>
                    <td>{{ $espace->nbFiles }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </body>
</html>
