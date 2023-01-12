@include('header')

<script>

</script>

<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">

    <form action="" method="POST" class="form-example">
        @method('PUT')
        @csrf

        <div class="form-example">
            <label for="name">Utilisateur : </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nom..." class="typeahead" required>
        </div>

        <div class="form-example">
            <label for="email">Droit : </label>
            <div>
                <input type="radio" id="lecture" name="acces" value="lecture"
                       checked>
                <label for="huey">Lecture</label>
              </div>

              <div>
                <input type="radio" id="ecriture" name="acces" value="ecriture">
                <label for="ecriture">Ecriture</label>
              </div>

              <div>
                <input type="radio" id="gestionnaire" name="acces" value="gestionnaire">
                <label for="gestionnaire">Gestionnaire</label>
              </div>
        </div>
            <input type="hidden" name="idEspace" id="idEspace" value="{{$espace->idEspace}}">
    </form>

        <div class="text-center">
            <button class="btn btn-success" style="min-width:10%" onclick="location.href='/addAcces'"><img src="../../../../Images/validate.svg" style="width: 25%"></button>
            <button class="btn btn-secondary" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>
    </div>
    </body>
</html>
