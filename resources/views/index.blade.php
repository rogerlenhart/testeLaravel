@extends('templates.template')

@section('content')
  <div class="text-center">
    <a href="clientes/create">
      <button class="btn btn-primary mt-2 mb-4"><i class="fa fa-plus-circle"></i> Cadastrar</button>
    </a>
  </div>
  <div class="col-8 m-auto dark">
    <table class="table text-center table-hover align-middle mb-0 ">
      <thead class="table-dark ">
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
                <button class="btn btn-outline-dark"><i class="fa fa-eye"></i></button>
              </a>
              <a class="text-decoration-none mx-1" href="{{url("clientes/$clientes->id/edit")}}">
                <button class="btn btn-outline-primary"><i class="fa fa-edit"></i></button>
              </a>
              <div class="mx-1" style="display:inline-block;">
                <form action="clientes/{{$clientes->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger " type="submit" value="Deletar"><i class="fa fa-trash"></i></button>
                  
                </form>
              </div>     
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
      {{$cliente->links("pagination::bootstrap-4")}}
    </div>
  </div>

@endsection