@extends('principal')

@section('conteudo')

<h1>Produtos</h1>

<a class="btn btn-primary" href="/produtos/create">Inserir Novo Produto</a>
<br><br>

<table class="table table-bordered table-hover table-condesend table-striped" >

  <thead>
  		<tr>
  			<th>ID</th>
  			<th>Nome</th>
        <th>Preço</th>
        <th>Editar</th>
        <th>Excluir</th>
  		</tr>
  		</thead>

<tbody>

@foreach($produtos as $p)

<tr>
  <td>{{ $p->id }}</td>
  <td>{{ $p->nome }} </td>
  <td>R$ {{ $p->preco }}</td>
  <td><a href="/produtos/{{ $p->id }}/edit"><i class="fa fa-pencil"></i>Editar</a></td>
  <td><a href="/produtos/{{ $p->id }}"><i class="fa fa-trash-o"></i>Excluir</a></td>
</tr>

@endforeach

</tbody>
</table>

@endsection
