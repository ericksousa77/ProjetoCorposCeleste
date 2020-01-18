@extends('Admin.layouts.app')

@section('title', 'Deletar Corpo Celeste')
    

@section('content')
    <h1>Deletar Corpo Celeste</h1>

<form action="{{ route('project.destroy')}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="text" name="" placeholder="Nome:">
        <p></p>
        <input type="text" name="" placeholder="Descrição:">
        <p></p>
        <button type="submit">Deletar</button>
    </form>
@endsection