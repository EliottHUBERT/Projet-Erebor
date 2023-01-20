@include('header')
<body>
    @include('panel')
    <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style='border-top-left-radius: 15px'>IdUser</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($lesAcces as $acces)
                <tr>
                    <th scope="row">{{$acces->user->name}}</th>
                    <td>{{ $acces->role }}</td>
                    <td>
                        <div class="btn-group">
                        <form action="/editAcces" method="POST" class="form-example">
                                @csrf

                                <input type="text" value="{{$acces->idUser}}" name="idUser" hidden>
                                <input type="text" value="{{$acces->idEspace}}" name="idEspace" hidden>

                                <button type='submit' class="btn btn-primary"><img src="../../../../Images/settings.svg"></button>

                            </form>
                            
                            <form action="/delAcces/valider" method="POST" class="form-example">
                                @method('DELETE')
                                @csrf

                                <input type="text" value="{{$acces->idUser}}" name="idUser" hidden>
                                <input type="text" value="{{$acces->idEspace}}" name="idEspace" hidden>

                                <button type="submit" class="btn btn-danger"><img src="../../../../Images/trash.svg"></button>

                            </form>
                            
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
        <form action="/addAcces" method="POST" class="form-example">
            @csrf
            <input type="text" value="{{$idEspace}}" name="idEspace" hidden>
            <button  type='submit' class="btn btn-success mb-2" style="min-width:10%"><img src="../../../../Images/adduser.svg" style="width: 25%"></button>

        </form>
            <button class="btn btn-secondary mb-2" style="min-width: 10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
            <ul class="pagination justify-content-center mb-0">
                {{$lesAcces->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
    </body>
</html>
