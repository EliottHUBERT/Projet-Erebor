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
            <button class="btn btn-success mx-sm-3 mb-2" style="min-width:10%" onclick="location.href='/addDossier'"><img src="../../../../Images/addfolder.svg" style="width: 25%"></button>
                <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
                <br>
            </div>
            <ul class="pagination justify-content-center mb-0">
            {{$fichiers->links("pagination::bootstrap-4")}}
            </ul>
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
 Go("size");

</script>
</html>
