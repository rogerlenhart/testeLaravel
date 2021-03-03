@extends('templates.template')

@section('content')
  <h1 class="text-center mt-2">CRUD Clientes</h1>    
  <hr>
  <div class="text-center">
    <a href="clientes/create">
      <button class="btn btn-success mt-2 mb-4">Cadastrar</button>
    </a>
  </div>
  <div class="col-8 m-auto dark">
    <table class="table text-center align-middle">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Cidade</th>
          <th scope="col">Operação</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cliente as $clientes)
          <tr>
            <th scope="row">{{$clientes->id}}</th>
            <td>{{$clientes->nome}}</td>
            <td>{{$clientes->idade}}</td>
            <td>{{$clientes->cidade}}</td>
            <td>
              <a class="text-decoration-none mx-1" href="{{url("clientes/$clientes->id")}}">
                <button class="btn btn-dark">Visualizar</button>
              </a>
              <a class="text-decoration-none mx-1" href="{{url("clientes/$clientes->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
              </a>
              <div class="mx-1" style="display:inline-block;">
                <form action="clientes/{{$clientes->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" value="Deletar" >
                </form>
              </div>
              

              <!--
              <a class="text-decoration-none mx-1" href="{{url("clientes/$clientes->id")}}">
                <button class="btn btn-danger">Deletar</button>
              </a>
              -->
              
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection