<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../../../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../../../../css/login.css" rel="stylesheet" type="text/css">
        <script src="../../../../js/bootstrap.js" type="script"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="icon" href="../../../../Images/favicon.svg" sizes="any" type="image/svg+xml">
        <title>EreborCloud<?php echo str_replace("/", "|", $_SERVER['REQUEST_URI']); ?></title>
    </head>
    <body>
        <div class="sidenav">
            <div class="login-main-text">
                <img src="../../../../Images/faviconwhite.svg" width="100" height="100" alt="">
               <h2>EreborCloud</h2>
               <p>Connectez-vous ou inscrivez-vous pour rentrer dans la montagne</p>
            </div>
         </div>
         <div class="main">
            <div class="col-md-6 col-sm-12">
               <div class="login-form">
                  <form action="/logincomf/" method="POST">
                     @csrf
                     <div class="form-group">
                        <label>Utilisateur:</label>
                        <input type="text" class="form-control" name="login" placeholder="Nom d'utilisateur" required>
                     </div>
                     <div class="form-group" style="margin-bottom: 1%">
                        <label>Mot de passe:</label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                     </div>
                     <button type="submit" class="btn btn-black">Connexion</button>
                     <button type="button" onclick="location.href='/listeDossiers'" class="btn btn-secondary">Inscription</button>
                  </form>
               </div>
            </div>
         </div>
    </body>
