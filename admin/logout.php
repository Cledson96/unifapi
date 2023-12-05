<?php
error_reporting(0);

//Iniciando a sessão:
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

unset($_SESSION['usuarioLogin']);
session_destroy(); 
session_unset(); 

function unsetcookie($key, $path = '', $domain = '', $secure = false)
{
    if (array_key_exists($key, $_COOKIE)) {
        if (false === setcookie($key, null, -1, $path, $domain, $secure)) {
            return false;
        }

        unset($_COOKIE[$key]);
    }

    return true;
}

//Elimina o cookie pro path atual
unsetcookie('usuId');
unsetcookie('usuNome');
unsetcookie('usuLogin');

 echo "<script>location.href='index.php';</script>";

?>