@extends('templates.template')

@section('content')
  <h1 class="text-center">Cadastrar</h1>    
  <hr>
  
  <div class="col-8 m-auto">
    <form name="cadCliente" id="cadCliente" method="post" action="{{url('clientes')}}">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" required>
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input class="form-control" type="number" name="idade" id="idade" required>
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input class="form-control" type="text" name="cidade" id="cidade" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
    </form>
  </div>

@endsection