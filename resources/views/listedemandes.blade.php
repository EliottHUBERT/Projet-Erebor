@include('header')
    <body>
        @include('panel')
        <div class="border border-dark" style="position: absolute; top: 3.5rem; margin-left: 15%; width: 85%; border-radius: 15px;">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                                    <td>{{ $demande->demandeur }}</td>
                                    <td>{{ $demande->nom }}</td>
                                    <td>{{ $demande->quotaMax }}mo</td>
                                    <td>{{ $demande->date }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-success" onclick="location.href='/listeFichiers/'"><img src="../../../../Images/validate.svg"></button>
                                            <button class="btn btn-danger" onclick="location.href='/editDossier/'"><img src="../../../../Images/cross.svg"></button>
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
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>mo</td>
                                    <td>mo</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-success" onclick="location.href='/listeFichiers/'"><img src="../../../../Images/validate.svg"></button>
                                            <button class="btn btn-danger" onclick="location.href='/delDossier/'"><img src="../../../../Images/cross.svg"></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Demande de création de comptes
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="border-top-left-radius: 15px">ID</th>
                                    <th scope="col">Nom d'utilisateur</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" style="border-top-right-radius: 15px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>mo</td>
                                    <td></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-success" onclick="location.href='/listeFichiers/'"><img src="../../../../Images/validate.svg"></button>
                                            <button class="btn btn-danger" onclick="location.href='/delDossier/'"><img src="../../../../Images/cross.svg"></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>

        <div class="text-center">
            <button class="btn btn-secondary mx-sm-3 mb-2" style="min-width:10%" onclick="location.href='/addDossier'"><img src="../../../../Images/return.svg" style="width: 25%"></button>
        </div>
    </div>
    </body>
</html>
