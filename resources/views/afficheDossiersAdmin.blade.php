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
                            <button class="btn btn-success" onclick="location.href='/listeFichiers/{{$espace->id}}'"><img src="../../../../Images/open.svg"></button>
                            <button class="btn btn-primary" onclick="location.href='/editDossier/{{$espace->id}}'"><img src="../../../../Images/settings.svg"></button>
                            <button class="btn btn-secondary" onclick="location.href='/detailDossier/{{$espace->id}}'"><img src="../../../../Images/user.svg"></button>
                            <button class="btn btn-danger" onclick="location.href='/delDossier/{{$espace->id}}'"><img src="../../../../Images/trash.svg"></button>
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
 Go("quota");
 Go("quotaMax");

</script>
</html>
