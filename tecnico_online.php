<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
  <title>Inicio</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/teste.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
</head>
<body>
<b onclick="menu()">&#9776;</b>
<div class="container-fluid" id="minhadiv">
    <ul class="a">
      <li><a href="index.php">Principal</a></li>
      <li><a href="tecnico_online.php">Técnico Online</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Serviços <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" style="font-size: 13px;">Formatação</a></li>
            <li><a href="#" style="font-size: 13px;">Remoção de vírus</a></li>
            <li><a href="#" style="font-size: 13px;">Assistência remota</a></li>
            <li><a href="#" style="font-size: 13px;">Print-servers (impressão em rede)</a></li>
            <li><a href="#" style="font-size: 13px;">Configuração de Redes</a></li>
            <li><a href="#" style="font-size: 13px;">Manutenção e configuração de computadores</a></li>
          </ul>
        </li>
    <li><a href="#">Produtos</a></li>
    </ul>
  </div>
<?php
  include ('nav.php');
?>
<div class="corpo">
<header>
  <h1>Técnico Online</h1>

  <p>O suporte online ou remoto é utilizado por empresas há mais de 20 anos, e é usado por técnicos de informática para tornar ágil e prático o atendimento aos usuários das empresas, grandes ou pequenas.
    Após pesquisa de mercado e entendendo também as necessidades dos usuários domésticos que às vezes esperam dias por um suporte ou tem que se deslocar até uma assistência.</p>
</header>
<section>
<div style="float: left;width: 28%;">
<img src="img/suporte.gif" style="width: 100%; height: 10%; float: left; margin: 2%">  
</div>
<div style="float: left;width: 65%; margin-left: 4%;">
<h2 style="margin-top: -3%; font-size: 22px;">Quais são as vantagens do suporte online?</h2>
<p>* Atendimento rápido, não demanda de deslocamento.</p>
<p>* As maiorias dos problemas podem ser resolvidos online.</p>
<p>* Você visualiza todo o processo de suporte, cada clique do técnico.</p> 
<p>* Comodidade, você não precisa levar seu Computador até o Técnico e vice versa.</p>

<h2 style="font-size: 22px;">Segurança durante o Suporte Online</h2>
<p>1. Não há como iniciar um suporte sem que o usuário autorize o inicio</p>
<p>2. A senha pessoal é alterada automaticamente a cada conexão entre o Técnico e o Cliente.</p>
<p>3. Durante o suporte, o cliente visualiza tudo que o técnico está fazendo em seu Equipamento</p>
<p>4. No momento do Acesso Remoto o Técnico e o Cliente interagem no Computador tendo total acesso ao Monitor, Teclado e Mouse.</p>
<p>5. O processo de suporte passa dentro de uma "criptografia", não deixando um "terceiro" programa interferir no atendimento.</p>

</div>
</section>
</div>
<div style="margin-top: -10%">
&nbsp;
</div>
<?php
include ('contato.php');
?>

<?php
include ('footer.php');
?>
</body>
</html>