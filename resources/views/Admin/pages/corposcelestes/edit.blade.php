@extends('Admin.layouts.app')

@section('title', 'Editar Corpo Celeste')
    

@section('content')
    <h1>Editar Corpo Celeste</h1>

<form action="{{ route('project.update')}}" method="POST">
        @method('´put')
        @csrf
        <input type="text" name="" placeholder="Nome:">
        <p></p>
        <input type="text" name="" placeholder="Descrição:">
        <p></p>
        <button type="submit">Editar</button>
    </form>
@endsection