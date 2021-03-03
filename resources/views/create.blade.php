@extends('templates.template')

@section('content')
  <h1 class="text-center">@if(isset($cliente)) Editar @else Cadastrar @endif</h1>    
  <hr>
  
  <div class="col-8 m-auto">

    @if(isset($cliente))
        <form name="editCliente" id="editCliente" method="post" action="{{url("clientes/$cliente->id")}}">
            @method('PUT')
    @else
        <form name="cadCliente" id="cadCliente" method="post" action="{{url('clientes')}}">
    @endif

        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" value="{{$cliente->nome ?? ''}}" required>
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">Idade</label>
            <input class="form-control" type="number" name="idade" id="idade" value="{{$cliente->idade ?? ''}}" required>
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <input class="form-control" type="text" name="cidade" id="cidade" value="{{$cliente->cidade ?? ''}}" required>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary text-center" type="submit" value="@if(isset($cliente)) Editar @else Cadastrar @endif">
        </div>
    </form>
  </div>

@endsection