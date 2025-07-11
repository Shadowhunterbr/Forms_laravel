
@extends('layouts.admin')

@section('content')


        
        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Cadastrar Usuário</h1>
                <a href="#" class="btn-primary">Listar</a>
            </div>


        <x-alert />

        <form action="{{ route('user.store') }}" method="POST" class="form-container">
            @csrf
            <div class="mb-4"> <!-- margin button div -->
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-input" placeholder="Nome Completo" value="{{ old('name') }}" required> <br><br>
            </div>                

            <div class="mb-4"><!-- margin button div -->
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-input" placeholder="E-mail" value="{{ old('email') }}" required> <br><br>
            </div>

            <div class="mb-4">    <!-- margin button div -->
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Senha" value="{{ old('password') }}" required> <br><br>
            </div>

            <button type="submit" class="btn-success">Cadastrar</button>

        </div>


        <h1>Cadastrar Usuario</h1>


       
    

@endsection