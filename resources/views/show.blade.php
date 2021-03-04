@extends('templates.template')

@section('title')
  <h1 class="text-center mt-2">Visualizar Cliente</h1> 
@endsection

@section('content')
  <div class="col-8 m-auto">
    Nome: {{$cliente->nome}} <br>
    Idade: {{$cliente->idade}} <br>
    Cidade: {{$cliente->cidade}}
  </div>

@endsection