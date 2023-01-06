@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 100%; border-radius: 15px;">
        
    <div class="alert alert-success" role="alert">
    Le dossier "{{$espace->nom}}" à bien rejoin la montagne !
    </div>
        <div class="text-center">
            <button class="btn btn-secondary" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>

    </div>
    </body>
</html>