@extends('Admin.layouts.app')

@section('title', 'Deletar Corpo Celeste')

<head>
    <title>Listar</title>
    <style>
        .label-tam{width: 30%}
    </style>
</head>

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <h1>Listar Planeta</h1>

<form action="{{ route('project.update')}}" method="POST">
        @method('put')
        @csrf

        <div class="form-group label-tam">
            <label for="formGroupExampleInput">Id do Planeta</label>
            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="ID">
        </div>

        <p></p>

        <button type="submit" class="btn btn-primary">Listar</button> 
        <a href="{{route('principal') }}" class = "btn btn-primary">Voltar</a>
    </form>
@endsection