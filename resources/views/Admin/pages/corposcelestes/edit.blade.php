@extends('Admin.layouts.app')

@section('title', 'Editar Corpo Celeste')
    

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <h1>Editar Planeta</h1>

    <form action="{{ route('project.update')}}" method="POST">
        @method('put')
        @csrf
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
        <button type="submit" class="btn btn-primary">Editar</button> 
        <a href="{{route('home') }}" class = "btn btn-primary">Voltar</a>
    </form>
@endsection