@extends('Admin.layouts.app')

@section('title', 'Cadastrar novo corpo celeste')
    

@section('content')
    <h1>Cadastrar novo corpo celeste</h1>

<form action="{{ route('project.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <p></p>
        <input type="text" name="description" placeholder="Descrição:">
        <p></p>
        <button type="submit">Cadastrar</button>
    </form>
@endsection