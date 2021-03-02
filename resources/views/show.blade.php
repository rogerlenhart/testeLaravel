@extends('templates.template')

@section('content')
  <h1 class="text-center">Visualizar</h1>    
  <hr>
  
  <div class="col-8 m-auto">
    Nome: {{$cliente->nome}} <br>
    Idade: {{$cliente->idade}} <br>
    Cidade: {{$cliente->cidade}}
  </div>

@endsection