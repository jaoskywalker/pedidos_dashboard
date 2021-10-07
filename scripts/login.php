
<?php

include "connection.php";

if (isset($_POST['btn-entrar'])) :
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['pass']);
	if (empty($login) or empty($senha)) :
		header('location:../login.php?erro=erro');
	else :
		$sql = "SELECT login FROM user WHERE login = '$login' ";
		$resultado = mysqli_query($connect, $sql);

		if (mysqli_num_rows($resultado) > 0) :
			$sql = "SELECT * FROM user WHERE login = '$login' AND  pass = '$senha'";
			$resultado = mysqli_query($connect, $sql);
			if (mysqli_num_rows($resultado) == 1) :
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				session_start();
				$_SESSION['logado'] = true;
				$_SESSION['id'] = $dados['id'];
				$q = $dados;
				header('location:../index.php');
			else :
				header('location:../login.php?erro=erro');
			endif;
		else :
			header('location:../login.php?erro=erro');
		endif;
	endif;
endif;

?>