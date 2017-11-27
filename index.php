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
    <ul>
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
	<h1>CLICK NET Informática</h1>

	<p>Você sabia que vírus, arquivos de sistema corrompidos, instalação de aplicativos ou drives incorretos, representam aproximadamente 80% dos problemas de seu PC e geram lentidão, travamentos, entre outros problemas.
    Agora você sabia que podemos resolver estes e outros problemas de seu PC e melhor, sem você sair de casa. Basta que você esteja conectado à Internet.</p>
</header>
<hr style="width: 100%; color: black; height: 1px; background-color: #C9C9C9;" />
<section>
	<div class="item">
	<h3>Suporte online</h3>
	<img src="img/suporte.png"/>
	<p>
	Com o suporte online tornamos o atendimento ágil e prático, evitando seu deslocamento e todo processo sendo visualizado por você. <br>
	</p>
	<a href="#"> Leia mais </a>
    </div>
    <div class="item2">
	<h3>Configuração de Redes</h3>
	<img src="img/redes1.png"/>
	<p>
	Configuramos sua Rede sem fio, cabeada ou seu roteador garantindo a estabilidade da sua conexão.<br>
	</p>
	<a href="#"> Leia mais </a>
    </div>
</section>
</div>
<div class="secao">
<div class="ser1">
<h3>Desenvolvimento de Sites</h3>
<img src="img/site.png"/>
<p>
	Desenvolvemos modelos de sites para divulgação do seu negócio ou instituição. Sites responsivos de acordo com seu gosto.<br>
</p>
<a href="#"> Leia mais </a>
</div>
<div class="ser2">
<h3>Remoção de Vírus</h3>
<img src="img/virus.png"/>
<p>
	Oferecemos o serviço para remoção de vírus, cavalos-de-tróia, spywares e outros códigos maliciosos e softwares indesejados.<br>
</p>
<a href="#"> Leia mais </a>
</div>
<div class="ser3">
<h3>Assistência Remota</h3>
<img src="img/teamviewer.png"/>
<p>
	Essa ferramenta torna possível trabalharar como se estivessem na mesma sala, sem perda de tempo com viagem e sem despesas.<br>
</p>
<a href="#"> Leia mais </a>
</div>
<div class="ta">
	&nbsp;
</div>
</div>
<?php
include ('contato.php');
?>

<?php
include ('footer.php');
?>
</body>
</html>