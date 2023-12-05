<?php
    if( $_SERVER['HTTP_HOST'] == "localhost" ){
        define("_SOURCE_", '/favretto/');
        $param = substr($_SERVER['REQUEST_URI'],1);
        $param = explode('/',$param);
        $param = $param[1];
        $d = '';
    }else{
        $param = substr($_SERVER['REQUEST_URI'],1);
        $param = explode('/',$param);
        $nivel = '';
        for($i=0;$i<=(sizeof($param)-1);$i++ ){
            $nivel .= '../';
        }
        define("_SOURCE_", $nivel);
        $param = $param[0];
    }
    
    switch($param){
        case "checkaccess": include "checkaccess.php";  break;
        case "dashboard": $menu = "dashboard";  include "../dashboard.php"; break;
        case "logout": include "../logout.php"; break;
        //case "profile": $menu = "profile";  include "../perfil.php"; break;
        /*Vistorias*/
        case "obras": $menu = "obras";  include "../obras.php"; break;
        case "obras-create": $menu = "obras";  include "../cadastrar-obras.php"; break;
        
        /*Usuários*/
        /*case "users": $menu = "users"; include "../usuarios.php"; break;
        case "users-create": $menu = "users"; include "../usuarios-criar.php"; break;
        case "users-edit": $menu = "users"; include "../usuarios-editar.php"; break;
        case "users-delete": $menu = "users"; include "deletar_usuarios.php"; break;
        */
        case "#": $menu = "dashboard"; include "../dashboard.php"; break;
        case "home": $menu = "dashboard"; include "../index.php"; break;
        case "img": $menu = "img"; include "../img/"; break;
        
        default: Header('Location: home'); break;
    }

?>