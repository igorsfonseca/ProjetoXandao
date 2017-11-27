<script>
	
		function mensagem(){
			setTimeout("window.location.href='index.php'",2000);
		}
		function erro(){
			setTimeout("window.location.href='index.php'",2000);
		}

</script>
<?php
	
	include ('conexao.php');

	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	$data = date("Y/m/d");

	$sql = mysqli_query($con, "INSERT INTO mensagem (email, mensagem, data) VALUES ('$email', '$mensagem', '$data')");

	if ($sql) {
		echo "<h1>Mensagem enviada com sucesso!</h1>";
		echo "<script>mensagem()</script>";
	}else{
		echo "<h1>Erro ao Enviar!</h1>";
		echo "<script>erro()</script>";
	}

?>