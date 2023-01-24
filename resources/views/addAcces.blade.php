@include('header')

<script>

</script>

<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">

    <form action="/addAcces/valider" method="POST" class="form-example">
        @method('PUT')
        @csrf

        <div class="form-example">
            <label for="name">Utilisateur : </label>
            <div classs="form-group">
            <input type="text" id="search" name="search" class="form-control" autocomplete="off"/>
            <input type="hidden" name="idUser" id="idUser" hidden>
        </div>
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
            <button type='submit' class="btn btn-success mx-sm-3 mb-2"  style="min-width:10%"><img src="../../../../Images/validate.svg" style="width: 25%"></button>
            <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>

    </form>

    </div>
    </body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
  
    $('#search').typeahead({

        source: function (query, process) {
            return $.get(path, {
                query: query
            }, function (data) {

                return process(data);
            });
        },
        updater: function(selection){
            var inputId = document.getElementById("idUser");
            inputId.value = selection["id"];

            var inputName = document.getElementById("search");
            inputName.value = selection["name"];
    },
});

</script>
</html>
