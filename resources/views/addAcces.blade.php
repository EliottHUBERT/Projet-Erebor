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
            <div>
            <br>
            <label>Droit : </label>
            <select name="role" id="role">
                <option value="Lecture">Lecture</option>
                <option value="Ecriture">Ecriture</option>
                <option value="Gestionnaire">Gestionnaire</option>
            </select>
        </div>
            <input type="hidden" name="idEspace" id="idEspace" value="{{$espace}}">
           
        <div class="text-center">
            <button type='submit' class="btn btn-success" style="min-width:10%"><img src="../../../../Images/validate.svg" style="width: 25%"></button>
            <button class="btn btn-secondary" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>

    </form>

    </div>
    </body>
</html>
