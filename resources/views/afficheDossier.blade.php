<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dossier</title>

        <link href="../../../../css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="../../../../js/bootstrap.js" type="script"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        @include('header')
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Taille</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Fichier1</td>
                    <td>500mo</td>
                    <td>10/10/2010</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Fichier2</td>
                    <td>500mo</td>
                    <td>10/10/2010</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Fichier3</td>
                    <td>500mo</td>
                    <td>10/10/2010</td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
