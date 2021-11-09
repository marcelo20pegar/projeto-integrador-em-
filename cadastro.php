<?php
include("connection.php");
session_start();
$retorno = "";

if(empty($_SESSION))
    header('Location: login.php');
$sql = 'SELECT id, nome, nickname, email, senha, confirmarsenha FROM Cadastro WHERE id = ' . $id;
$dados = $con->query($sql);

foreach ($dados as $key=>$row){
$id = utf8_encode($row["id"]); 
$nome = utf8_encode($row["nome"]);
$nickname = utf8_encode($row["nickname"]); 
$email = utf8_encode($row["email"]);
$senha = utf8_encode($row["senha"]);
$confirmarsenha = utf8_encode($row["consfirmarsenha"]);   
}

if (isset($_POST['acao'])) {
  $sql = $pdo->prepare("INSERT INTO Cadastro (id, nome, nickname, email, senha, confirmarsenha)
  values (null,?,?,?)");

if ($sql->execute(array($id, $nome, $nickname, $email, $senha, $confirmarsenha))) {
  echo 'Cadastrado com suscesso';
} else {
  echo 'Erro ao cadastrar';
}
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script>
    function alerta() {
      texto1 = document.getElementById('senha').value;
      texto2 = document.getElementById('confirma').value;
      if (texto1 != texto2) {
        alert("Senhas não conferem");
        return false;
      }
    }

    function validarSenha() {
      senha = document.getElementsByName('senha').value;
      senha2 = document.getElementsByName('senha2').value;

      if (senha != senha2) {
        senha2.setCustomValidity("Senhas diferentes!");
      } else {
        senha2.setCustomValidity('');
      }
      senha.onchange = validatePassword;
      senha2.onkeyup = validatePassword;
    }
  </script>
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
          <a class="nav-link" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cadastro.php">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indicacoes.php">Indicações</a>
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
  <br>
  <div class="container">
    <h1 class="display-4">Bem-Vindo!</h1>
    <p class="lead">O Legendary Paladins é um jogo familiar e acolhedor para todo tipo de pessoa. Cadastre-se e faça
      parte dessa comunidade!</p>
  </div>
  </div>
  <div class="container">
    <h1>Entre, Cadastre-se e Divirta-se</h1>
  </div>
  <div class="container">
    <form>
      <div class="form-group">
        <label for="examplename">Nome</label>
        <input type="name" class="form-control"  namae= "nome" id="examplename" placeholder="Nome">
      </div>
      <div class="form-group">
        <label for="examplenickname">Nickname</label>
        <input type="nickname" class="form-control" name= "nickname"id="examplenickname" placeholder="Nickname">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control"  name= "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword2">Confirmar Senha</label>
        <input type="password" name="confirma" name= "confirmarsenha" id="confirma" required onblur="validarSenha();">
      </div>
      <button type="submit" name= "acao"class="btn btn-warning">Enviar</button>
    </form>
  </div>
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