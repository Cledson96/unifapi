<?php
    // die("esta no checkaccess");
    require_once "db_connection.php";

    $aDados  = array();
    $usuario = isset($_POST["usuario"]) && !empty($_POST["usuario"]) ? $_POST["usuario"] : '';
	$senha   = isset($_POST["senha"]) && !empty($_POST["senha"]) ? md5($_POST["senha"]): '';
	
    $result = mysqli_query($conn, "SELECT id, usuarioLogin, nome, tipo, email
                                     FROM tbl_usuarios
                                    WHERE ativo ='S'
                                      AND usuarioLogin = '{$usuario}' AND senha = '{$senha}'");
	
    if (mysqli_num_rows($result) > 0) {
		$linha = mysqli_fetch_assoc($result);
        if (@session_status() !== PHP_SESSION_ACTIVE) {
            @session_start();
        }
		$_SESSION['usuarioLogin'] = $linha["usuarioLogin"];
        
        setcookie("usuId", $linha["id"]);
        setcookie("usuNome", $linha["nome"]);
        setcookie("usuLogin", $linha["usuarioLogin"]);
		?><script type="application/javascript">window.location = "../dashboard.php"; </script><?php
            
    }else{
		?><script type="application/javascript">window.location = "home/msg/error"; </script><?php
	}
	
    die();
    if (count($aDados) > 0 ) {

		$desenhbd = $aDados[0]["senha"];

		if ($desenhbd == $desenh) {

			$usuId=$aDados[0]["id"];
			$usuNome=$aDados[0]["nome"];
			$usuLogin=$aDados[0]["usuarioLogin"];
			$usuAtiv=$aDados[0]["ativo"];

			setcookie("usuId", $usuId);
			setcookie("usuNome", $usuNome);
			setcookie("usuLogin", $usuLogin);
			
			if (session_status() !== PHP_SESSION_ACTIVE) {
			  @session_start();
			}

		    $_SESSION['usuarioLogin'] = $usuLogin;
			
			header('Location: ../dashboard.php');

		} else {
			header('Location: ../index.php?err=erroLogin');
		}

	} 
	else {
		header('Location: ../index.php?err=erroLogin');
	}

?>