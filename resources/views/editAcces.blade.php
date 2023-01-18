@include('header')

<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">

    <form action="editAcces/valider" method="POST" class="form-example">
        @method('PUT')
        @csrf

        <div class="form-example">
            <label for="name">Utilisateur : </label>
            <input type="text" class="form-control" name="name" id="name" value="{{$acces->user->name}}" required disabled>
            
            <input type="text" value="{{$acces->idUser}}" name="idUser" >
            <input type="text" value="{{$acces->idEspace}}" name="idEspace" >

            <br>

            <label>Droit : </label>
            <select name="role" id="role">
                <option value="{{$acces->role}}">Role</option>
                <option value="Lecture">Lecture</option>
                <option value="Ecriture">Ecriture</option>
                <option value="Gestionnaire">Gestionnaire</option>
            </select>
        </div>
            
    

        <div class="text-center">
            <button class="btn btn-success mx-sm-3 mb-2"  type="submit" style="min-width:10%"><img src="../../../../Images/validate.svg" style="width: 25%"></button>
            <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>
    </form>
    </div>
    </body>
</html>
