@extends('layouts.admin')

@section('content')
    <h1>Bem Vindo</h1>


    <a href="{{ route('user.create') }}">Cadastrar</a>
@endsection