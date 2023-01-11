@include('header')
    <body>
        @include('panel')
        <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                  <h2 class="accordion-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" id="headingOne">
                    <button class="accordion-button" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Demandes d'espaces
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="border-top-left-radius: 15px">ID</th>
                                    <th scope="col">Demandeur</th>
                                    <th scope="col">Nom Espace</th>
                                    <th scope="col">Quota Maximum</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="border-top-right-radius: 15px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($demandesespace as $demande)
                                <tr>
                                    <th scope="row">{{ $demande->id }}</th>
                                    <td>{{ $demande->user->name }}</td>
                                    <td>{{ $demande->nom }}</td>
                                    <td class="quotaMax">{{ $demande->quotaMax }}mo</td>
                                    <td>{{ $demande->date }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/validateDemande" method="POST" class="form-example">
                                                @method('PUT')
                                                @csrf

                                                <input type="text" value="{{$demande->id}}" name="id" hidden>

                                                <button type="submit" class="btn btn-success mx-sm-3 mb-2"><img src="../../../../Images/validate.svg"></button>

                                            </form>
                                            <form action="/delDemande" method="POST" class="form-example">
                                                @method('DELETE')
                                                @csrf

                                                <input type="text" value="{{$demande->id}}" name="id" hidden>

                                                <button type="submit" class="btn btn-danger mx-sm-3 mb-2"><img src="../../../../Images/cross.svg"></button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Demandes de modifications d'espaces
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="border-top-left-radius: 15px">ID</th>
                                    <th scope="col">Espace</th>
                                    <th scope="col">Demandeur</th>
                                    <th scope="col">Ancien Nom</th>
                                    <th scope="col">Nouveau Nom</th>
                                    <th scope="col">Ancien Quota</th>
                                    <th scope="col">Nouveau Quota</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="border-top-right-radius: 15px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($demandemodifespace as $demande)
                                <tr>
                                    <th scope="row">{{ $demande->id }}</th>
                                    <td>{{ $demande->idEspace }}</td>
                                    <td>{{ $demande->user->name }}</td>
                                    <td>{{ $demande->Anciennom }}</td>
                                    <td>{{ $demande->nom }}</td>
                                    <td class="quotaMax">{{ $demande->AncienquotaMax }}mo</td>
                                    <td class="quotaMax">{{ $demande->quotaMax }}mo</td>
                                    <td>{{ $demande->date }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="/validateDemandeModif" method="POST" class="form-example">
                                                @method('PUT')
                                                @csrf

                                                <input type="text" value="{{$demande->id}}" name="id" hidden>
                                                <input type="text" value="{{$demande->idEspace}}" name="idEspace" hidden>

                                                <button type="submit" class="btn btn-success mx-sm-3 mb-2"><img src="../../../../Images/validate.svg"></button>

                                            </form>
                                            <form action="/delDemandeModif" method="POST" class="form-example">
                                                @method('DELETE')
                                                @csrf

                                                <input type="text" value="{{$demande->id}}" name="id" hidden>

                                                <button type="submit" class="btn btn-danger mx-sm-3 mb-2"><img src="../../../../Images/cross.svg"></button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>

        <div class="text-center">
            <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width:10%" onclick="location.href='/listeDossiers'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>
    </div>
    </body>
    <script>

        function Go(ClassName) {
           myCells = document.getElementsByClassName(ClassName);
           console.log(myCells);

           for (let i = 0; i < myCells.length; i++){

               var value = myCells[i].innerHTML;
               value = parseInt(value.substr(0, value.length-2));

               if(value>=1024){

                       value = (value/1024).toFixed(2);
                       myCells[i].innerHTML = value+" Go"
                   }
           }
        }
        Go("quotaMax");

       </script>
</html>
