@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 100%; border-radius: 15px;">
        <br>
        <form action="/editDossier" method="POST" class="form-example">
            @method('PUT')
            @csrf

            <input type="text" value="{{$espace->id}}" name="id" hidden>

            <div class="form-group mx-sm-3 mb-2">
                <label for="name">Nom : </label>
                <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom..." value="{{$espace->nom}}" required>
            </div>

            <div class="form-group mx-sm-3 mb-5">
                <label for="email">Quota Max : </label>
                <input class="form-control" type="number" id="quota" name="quota" min="10" max="1000000000" placeholder="Nombre de mo..." value="{{$espace->quotaMax}}" required>
            </div>

            <div class="text-center">
                <button class="btn btn-success mx-sm-3 mb-2"  type="submit" style="min-width:10%"><img src="../../../../Images/validate.svg" style="width: 25%"></button>

            </div>
        </form>
    </div>
    </body>
</html>
