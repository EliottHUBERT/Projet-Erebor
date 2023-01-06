@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">

        <br>
        <br>

        <div class="alert alert-danger mx-sm-3" role="alert">
                Vous êtes sur le point de supprimé le dossier "{{$espace->nom}}" qui a {{$espace->nbFiles}} fichier(s) !
        </div>

        <form action="/delDossier/valider" method="POST" class="form-example">
            @method('DELETE')
            @csrf

            <input type="text" value="{{$espace->id}}" name="id" hidden>

            <button type="submit" class="btn btn-danger mx-sm-3 mb-2">Supprimer</button>

        </form>

        <div class="text-center">
            <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>

    </div>
    </body>
</html>
