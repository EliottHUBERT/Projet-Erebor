@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 100%; border-radius: 15px;">

    <br>
    <br>

    <div class="alert alert-success mx-sm-3" role="alert">
    Votre demande de modification pour le dossier "{{$espace->nom}}" a bien été prise en compte !
    </div>

        <div class="text-center">
            <button class="btn btn-secondary mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>

    </div>
    </body>
</html>
