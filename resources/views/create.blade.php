@extends('templates.template')

@section('title')
  <h1 class="text-center mt-2">@if(isset($cliente)) Editar Cliente @else Cadastrar Cliente @endif</h1> 
@endsection

@section('content')
  <div class="col-8 m-auto">

    @if(isset($errors) && count($errors)>0)
        <div class="text-center my-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
        	    @endforeach
	    </div>
    @endif

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
            <input class="form-control" type="text" name="idade" id="idade" value="{{$cliente->idade ?? ''}}" required>
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