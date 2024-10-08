<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TPs Laravel</title>
</head>
<body>
    <h1>Liste des etudiants</h1>
    <!-- <?php 
    // echo $nom;
    // echo $prenom;
    ?> -->
    <!-- <br> -->
    <!-- {{$nom}}
    {{$prenom}} -->
    @extends('layout')
    @section('content')
    <div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>

        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="#"> Create Nex Student</a>

        </div>

    </div>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Ataoui</td>
            <td>Hamza</td>
        </tr>

        <tr>
            <td>2</td>
            <td>berrima</td>
            <td>zied</td>
        </tr>


    </table>
@endsection
<table class="table table-bordered table-hover">
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Ataoui</td>
            <td>Hamza</td>
        </tr>
        <td>
         <a class="btn btn-info"href="#">Show</a>
         <a class="btn btn-primary"href="#">Edit</a> 
         <button type="submit" class="btn btn-danger">Delete</button>  
        </td>

        </tr>

    </table>

    </div>
    
</body>
</html>