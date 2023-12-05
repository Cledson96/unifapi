<?php
// error_reporting(0);

//Iniciando a sessão:
if (session_status() !== PHP_SESSION_ACTIVE) {
  @session_start();
}

function protegePagina() {
  if (!isset($_SESSION['usuarioLogin'])) {
    // Não há usuário logado, manda pra página de login
    expulsaVisitante();
  }
}

/**
* Função para expulsar um visitante
*/
function expulsaVisitante() {
  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioLogin']);
  // Manda pra tela de login
 //header('Location: usuarios.php');
 session_start(); //iniciamos a sess?o que foi aberta
session_destroy(); //pei!!! destruimos a sess?o ;)
session_unset(); //limpamos as variaveis globais das sess?es

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

echo "<script>location.href='". _SOURCE_ ."home';</script>";

}
?> 