@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 100%; border-radius: 15px;">
        
    <form action="" method="POST" class="form-example">
        @method('PUT')
        @csrf
        
        <div class="form-group mx-sm-3 mb-2">
            <label for="name">Nom : </label>
            <input type="text" name="nom" id="nom" placeholder="Nom..." required>
        </div>

        <div class="form-group mx-sm-3 mb-5">
            <label for="email">Quota Max : </label>
            <input type="number" id="quota" name="quota" min="10" placeholder="Nombre de mo... " required>
        </div>

        <div class="text-center">
            <button class="btn btn-success mx-sm-3 mb-2"  type="submit" style="min-width:10%"><img src="../../../../Images/download.svg" style="width: 25%"></button>
        </div>

    </form>
    </div>
    </body>
</html>