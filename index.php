<?php
$usuario = "id16168123_julia";
$senha = "8fSwM}mfDQeR{?4d";
try {
  $con = new PDO('mysql:host=localhost;dbname=id16168123_legendary', "id16168123_julia", "8fSwM}mfDQeR{?4d");
  //print "Conectado"; 
} catch (PDOException $ex) {
  print "Erro ao conectar ao banco de dados" . $ex;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/css_cust.css">
  <link rel="stylesheet" type="text/css" href="css/css_cad.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Legendary Paladins </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Legendary Paladins<img src="imagens/logopic.PNG" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indicacoes.php">Indicações</s></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Armas.php">Armas</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button type="button" class="btn btn-secondary">Pesquisar</button>
      </form>
    </div>
  </nav>
  <div class="p-4 mb-2 bg-secondary text-white">
    <h1 class="display-3">Legendary Paladins!</h1>
  </div>
  <div class="alert alert-warning" role="alert">
    Este é um RPG em desenvolvimento, aguarde o lançamento!
  </div>
  <div class="container">
    <p class="lead">
      <h1>Jogue, divirta-se e aproveite!</h1>
    </p>
    <div id="carouselRPG" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/RPG.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="imagens/RPG_$.jpeg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="imagens/RPG_4.png" class="d-block w-100">
        </div>
      </div>
      <br>
      <br>
      <a class="carousel-control-prev" href="#carouselRPG" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>

      <a class="carousel-control-next" href="#carouselRPG" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
          <img class="card-img-top" src="imagens/golem.jpg" alt="anime-se">
          <div class="card-body">
            <p class="card-text">
              Os golens estarão com você durante todo o jogo, alie-se ou sofra as consequências!
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-secondary mb-3" style="width: 18rem;">
          <img class="card-img-top" src="imagens/espadinha.png" alt="divirta-se">
          <div class="card-body">
            <p class="card-text">Customize sua arma, do seu jeitinho!
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-white bg-dark mb-3" style="width: 18rem;">
          <img class="card-img-top" src="imagens/guilda.jpg" alt="alie-se">
          <div class="card-body">
            <p class="card-text">
              As guildas são como Comunidades dentro de um RPG, tente achar uma em que você se
              identifique, e acima de tudo divirta-se!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="container">
    <blockquote class="blockquote text-center">
      <p class="mb-0"> Que os vossos esforços desafiem as impossibilidades, lembrai-vos de que as grandes coisas do
        homem foram conquistadas do que se parecia impossível.</p>
      <footer class="blockquote-footer">Charles Chaplin. <cite title="Título da fonte"></cite></footer>
    </blockquote>
  </div>
  <br>
  <br>
  <br>
  <div class="container">
    <h1> Gostou do nosso jogo?</h1>
    <h2>Nos dê seu feedback! A comunidade agradece. </h2>
    <br>
    <input type="text" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">

    <br>

    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Deixe seu comentário: </span>
      </div>
      <textarea class="form-control" aria-label="Com textarea"></textarea>
    </div>
    <br>
    <input type="button" name="acao" value="Cadastrar">
  </div>
  </div>
  <br>
  <br>
  <br>
  <footer>
    <div class="mini-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>© 2020
                <a href="https://portal.sc.senac.br/portal/site/descontos-e-bolsas/senac-joinville">SENAC-JLLE</a>.
                Integrado ao técnico. Written and Directed by E.M senac- Joinville
                <a href="https://portal.sc.senac.br/portal/home/">SENAC-SC</a>
                <br>
                <br>
                <img src="imagens/classindicativa.png" style="width: 10rem;">
              </p>
            </div>

            <div class="go_top">
              <span class="icon-arrow-up"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>