<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../../../css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="../../../../js/bootstrap.js" type="script"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="icon" href="../../../../Images/favicon.svg" sizes="any" type="image/svg+xml">
        <title>EreborCloud<?php echo str_replace("/", " | ", $_SERVER['REQUEST_URI']); ?></title>
    </head>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/listeDossiers">
                <img src="../../../../Images/favicon.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                EreborCloud
              </a>
              <form class="d-flex" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rechercher" aria-label="Rechercher" aria-describedby="basic-addon1">
                  <button class="btn btn-outline-dark" type="submit">Rechercher</button>
                </div>
              </form>
            </div>
        </nav>

    </header>
