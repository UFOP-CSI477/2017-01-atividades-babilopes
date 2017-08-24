@extends('principal')

@section('conteudo')

<h1>Entradas</h1>

<a class="btn btn-primary" href="/entradas/create">Inserir Nova Entrada</a>
<br><br>

<table class="table table-bordered table-hover table-condesend table-striped" >

  <thead>
  		<tr>
  			<th>ID</th>
  			<th>Produto</th>
        <th>Fornecedor</th>
        <th>Quantidade</th>
        <th>Data</th>
        <th>Editar</th>
        <th>Excluir</th>
  		</tr>
  		</thead>

<tbody>

@foreach($entradas as $e)

<tr>
  <td>{{ $e->id }}</td>
  <td>{{ $e->produto->nome }} </td>
  <td>{{ $e->fornecedor->nome }}</td>
  <td>{{ $e->quantidade }}</td>
  <td>{{ $e->created_at }}</td>
  <td><a href="/entradas/{{ $e->id }}/edit"><i class="fa fa-pencil"></i>Editar</a></td>
  <td><a href="/entradas/{{ $e->id }}"><i class="fa fa-trash-o"></i>Excluir</a></td>
</tr>

@endforeach

</tbody>
</table>

@endsection
