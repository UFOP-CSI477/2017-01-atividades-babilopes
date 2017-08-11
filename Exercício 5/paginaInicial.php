<!DOCTYPE html>
<html lang="en">
<head>
  <title>Supermercado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Supermercado</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/produtos">Hortifruti</a></li>
        <li><a href="/entradas">Carnes e Frios</a></li>
        <li><a href="/compras">Padaria</a></li>
        <li><a href="/usuarios">Não Perecíveis</a></li>
        <li><a href="/fornecedores">Limpeza e Banho</a></li>

      </ul>

    </div>
  </div>
</nav>


<img width="100%" height="100%" src="./fundo.jpg"/>


<footer class="container-fluid text-center">
  <p>Bárbara Eliza Vilela Lopes - 12.1.8358</p>
</footer>

</body>
</html>
