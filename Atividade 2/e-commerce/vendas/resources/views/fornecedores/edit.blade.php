@extends('principal')

@section('conteudo')

<h1>Editar Fornecedor</h1>
<a href="/fornecedores">Voltar</a>
<form method="post" action="/fornecedores/{{ $fornecedor->id }}">

  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  Nome: <input type="text" name="nome" maxlength="100" value="{{ $fornecedor->nome }}"><br>
  Nome Fantasia: <input type="text" name="nomeFantasia" maxlength="100" value="{{ $fornecedor->nomeFantasia }}"><br>
  Telefone: <input type="text" name="telefone" maxlength="20" value="{{ $fornecedor->telefone }}"><br>

  <input type="submit" name="botaoSalvar" value="Salvar">

</form>

@endsection
