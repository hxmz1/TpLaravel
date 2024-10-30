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
     <?php 
    
    ?> 
   
    @extends('layout')
    @section('content')
    <div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>

        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('etudiant.create') }}"> Create Next Student</a>

        </div>

    </div>
    <table class="table table-bordered table-hover">
        @foreach ($liste as $value)
        <tr>
          <td>{{$loop->index}}</td>
          <td>{{$value->nom}}</td>
          <td>{{$value->prenom}}</td>
          <td>{{$value->classe->libelle}}
          <td>
            <a class="btn btn-info" href="{{ route('etudiant.show',$value->id)}}">Show</a>
            <a class="btn btn-primary" href="{{route('etudiant.edit',$value->id)}}">Edit</a>
            <button type="submit" class="btn btn-danger">Delete</button>
          </td>
          <td>
            <form action="{{ route('etudiant.delete',$value->id) }}" method="post">

                <a class="btn btn-info" href="{{ route('etudiant.show',$value->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('etudiant.edit',$value->id) }}">Edit</a>

                @csrf
                @method('DELETE')
                <input type="hidden" name="_method" value="delete">
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes vous sur de vouloir effectuer cette opération');">Delete</button>

        </tr>
        @endforeach

    </table>

    </div>
    
</body>
</html>