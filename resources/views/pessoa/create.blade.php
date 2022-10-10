@extends('adminlte::page')

@section('title', 'Criando pessoa - Pessoas')

@section('content')
    <form action="{{ route('pessoa.pessoa.store') }}" method="post">
        @csrf

        @include('pessoa._form')
    </form>
@endsection
