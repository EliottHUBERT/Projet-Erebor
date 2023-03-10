<?php
$count = session()->get('countDemande', null);
?>
<div style="background-color: rgb(102, 102, 102); height: calc(100vh - 3.5rem); max-width: 15%; border-top-right-radius: 15px;">
        <div>
            <p style="color: white">Utilisateur connecté: <b>{{Auth::user()->name}}</b> </p>
        </div>
        <div class="text-center" style="margin-bottom: 2%">
            <button type="button" class="btn btn-secondary" onclick="location.href='/listeDossiers'">Mes dossiers<img src="../../../../Images/folder.svg" style=""></button>
        </div>
        @if(Auth::user()->hasRole('admin'))
        <div class="text-center" style="margin-bottom: 2%">
            <button type="button" class="btn btn-secondary" onclick="location.href='/listeDossiersAdmin'">Tous les dossiers<img src="../../../../Images/folders.svg" style=""></span></button>
        </div>
        <div class="text-center" style="margin-bottom: 2%">
            <button type="button" class="btn btn-secondary" onclick="location.href='/demande'">Mes demandes<img src="../../../../Images/demand.svg" style="">
                @if ($count != 0)
                    <span class='badge text-bg-danger'>{{$count}}</span></button>
                @endif
        </div>
        <div class="text-center" style="margin-bottom: 2%">
            <button type="button" class="btn btn-secondary" onclick="location.href='/historique'">Historique<img src="../../../../Images/log.svg" style=""></button>
        </div>
        @endif
        <div class="text-center">
            <button type="button" class="btn btn-danger" onclick="location.href='/logout'">Déconnexion<img src="../../../../Images/logout.svg" style=""></button>
        </div>

</div>

