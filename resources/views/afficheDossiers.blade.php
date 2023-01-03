@include('header')
    <body>
        <div class="border border-dark" style="margin-left: 10%;">
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
                        <form method="GET" action="/listeFichiers/{{$espace->id}}">  
                            <button type="submit" class="btn btn-success">Ouvrir</button>
                        </form>      
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
