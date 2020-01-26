@extends('Admin.layouts.app')

@section('title', 'Cadastrar novo corpo celeste')

<head>
    <title>Cadastrar</title>
</head>


@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <h1>Cadastrar Planeta</h1>

    <form action="{{ route('project.store')}}" method="POST">
        @csrf
        <div>
            <div class="form-group">
                <label for="formGroupExampleInput">Id do Planeta</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Nome do Planeta </label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Tamanho do Planeta </label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tamanho">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Massa do Planeta </label>
                 <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Massa">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Gravidade do Planeta </label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Gravidade">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Composição do Planeta </label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Composição">
            </div>
            
            <p></p>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="{{route('principal') }}" class = "btn btn-primary">Voltar</a>
        
    </form>
@endsection