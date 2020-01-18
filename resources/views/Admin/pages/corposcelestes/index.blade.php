@extends('admin.layouts.app')
@section('content')
    <h1>exibindo os produtos</h1>

    @isset($testes)
        @foreach($testes as $teste)
            <p>{{ $teste }}</p>
        @endforeach
    @endisset

    @if($teste === 123)
        É igual
    @else
        é diferente

    @endif

@endsection

