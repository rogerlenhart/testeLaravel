@extends('templates.template')

@section('title')
  <h1 class="text-center mt-2">Visualizar Cliente</h1> 
@endsection

@section('content')
  <div class="col-8 m-auto">
    <div class="card m-auto bg-dark mt-4" style="width: 24rem;">
      <div class="card-header">
        <h5 class="card-title text-white"><i class="fa fa-vcard-o" style="font-size:1.25rem"></i>  CLIENTE Nº {{$cliente->id}}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Nome: </b>{{$cliente->nome}}</li>
        <li class="list-group-item"><b>Idade: </b>{{$cliente->idade}} anos</li>
        <li class="list-group-item"><b>Cidade: </b>{{$cliente->cidade}}</li>
      </ul>
    </div>
     <br>
     <br>
    
  </div>

@endsection