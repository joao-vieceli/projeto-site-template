@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')

    {!! Form::open(['method' => 'post', 'class' => 'form-padrao']) !!}
    
    @include('templates.formulario.input', ['label' => 'CPF:', 'input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
    @include('templates.formulario.input', ['input' => 'Nome:', 'attributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input', ['input' => 'Telefone:', 'attributes' => ['placeholder' => 'Telefone']])
    @include('templates.formulario.input', ['input' => 'E-mail:', 'attributes' => ['placeholder' => 'E-mail']])
    @include('templates.formulario.password', ['input' => 'Senha:', 'attributes' => ['placeholder' => 'Senha']])
    @include('templates.formulario.submit', ['input' => 'Cadastrar'])   
    
    {!! Form::close() !!}

@endsection