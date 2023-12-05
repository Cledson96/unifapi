<?php
include "db_connection.php";
include("functions.php");
// echo "<pre>_POST "; print_r($_POST); echo "</pre>";
//     die();
if (isset($_POST['acao'])){
    $acao = $_POST['acao'];
}
else{ $acao = '0'; } 

date_default_timezone_set('America/Sao_Paulo');

if ($acao == 'cadastrar_obras') {

        $titulo_obra       = isset($_POST["titulo_obra"])     && !empty($_POST["titulo_obra"]) ? $_POST["titulo_obra"] : ''; 
        $tipo_obra           = isset($_POST["tipo_obra"])         && !empty($_POST["tipo_obra"]) ? $_POST["tipo_obra"] : ''; 
        $descricao_obra      = isset($_POST["descricao_obra"])    && !empty($_POST["descricao_obra"]) ? $_POST["descricao_obra"] : ''; 
        $valor_obra         = isset($_POST["valor_obra"])       && !empty($_POST["valor_obra"]) ? $_POST["valor_obra"] : ''; 
        $status_obra    = isset($_POST["status_obra"])  && !empty($_POST["status_obra"]) ? $_POST["status_obra"] : ''; 
        $mostrar_site      = isset($_POST["mostrar_site"])    && !empty($_POST["mostrar_site"]) ? $_POST["mostrar_site"] : ''; 
        
        $aNomes=array();
        $aNomes[]= "titulo_obra";
        $aNomes[]= "tipo_obra";
        $aNomes[]= "descricao_obra";
        $aNomes[]= "valor_obra";
        $aNomes[]= "status_obra";
        $aNomes[]= "mostrar_site";

        $aDados=array();
        $aDados[]= $titulo_obra;
        $aDados[]= $tipo_obra;
        $aDados[]= $descricao_obra;
        $aDados[]= $valor_obra;
        $aDados[]= $status_obra;
        $aDados[]= $mostrar_site;

        $id_obras = IncluirDados("tbl_obra", $aDados, $aNomes);

        $diretorio = '../assets/images/obras/';

        $foto_obra = isset($_FILES['foto_obra']) ? $_FILES['foto_obra'] : FALSE;

        for ($controle = 0; $controle < count($foto_obra['name']); $controle++){        
            $destino = $diretorio."/".$foto_obra['name'][$controle];
            if(move_uploaded_file($foto_obra['tmp_name'][$controle], $destino)){

                $aNomes=array();
                $aNomes[]= "id_obra";
                $aNomes[]= "nome_img";

                $aDados=array();
                $aDados[]= $id_obras;
                $aDados[]= $foto_obra['name'][$controle];

                $id_imgs = IncluirDados("tbl_imgs", $aDados, $aNomes);

                $sql = "UPDATE tbl_obra SET id_imgs=$id_imgs WHERE id_obra=$id_obras";
                mysqli_query($conn, $sql);

            }else{
                echo "Erro ao realizar upload";
            }        
        }

        if( $id_obras == true ){
            header("Location: ../obras.php?sucesso");
        }else{
            header("Location: ../obras.php?erro");
        }
           
    }

if ($acao == 'alterar_obras') {

    $id_obra       = isset($_POST["id_obra"])     && !empty($_POST["id_obra"]) ? $_POST["id_obra"] : ''; 
    $titulo_obra       = isset($_POST["titulo_obra"])     && !empty($_POST["titulo_obra"]) ? $_POST["titulo_obra"] : ''; 
    $tipo_obra           = isset($_POST["tipo_obra"])         && !empty($_POST["tipo_obra"]) ? $_POST["tipo_obra"] : ''; 
    $descricao_obra      = isset($_POST["descricao_obra"])    && !empty($_POST["descricao_obra"]) ? $_POST["descricao_obra"] : ''; 
    $valor_obra         = isset($_POST["valor_obra"])       && !empty($_POST["valor_obra"]) ? $_POST["valor_obra"] : ''; 
    $status_obra    = isset($_POST["status_obra"])  && !empty($_POST["status_obra"]) ? $_POST["status_obra"] : ''; 
    $mostrar_site      = isset($_POST["mostrar_site"])    && !empty($_POST["mostrar_site"]) ? $_POST["mostrar_site"] : ''; 


    if(isset($_FILES["foto_obra"]))
    {
        $ext = strtolower(substr($_FILES['foto_obra']['name'],-4)); //Pegando extensão do arquivo
        $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $dir = '../assets/images/obras/'; //Diretório para uploads 
        move_uploaded_file($_FILES['foto_obra']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        //echo("Imagem enviada com sucesso!");
    }

    // GRAVA DADOS CLIENTE
    $aNomes=array();
    $aNomes[]= "titulo_obra";
    $aNomes[]= "tipo_obra";
    $aNomes[]= "descricao_obra";
    $aNomes[]= "valor_obra";
    $aNomes[]= "status_obra";
    $aNomes[]= "mostrar_site";
    $aNomes[]= "foto_obra";

    //dados da tabela
    $aDados=array();
    $aDados[]= $titulo_obra;
    $aDados[]= $tipo_obra;
    $aDados[]= $descricao_obra;
    $aDados[]= $valor_obra;
    $aDados[]= $status_obra;
    $aDados[]= $mostrar_site;
    $aDados[]= $new_name;

    $retorno = AlterarDados("tbl_obra", $aDados, $aNomes,"id_obra", $_POST['id_obra']);

    if ($retorno == true){
        Header("Location: ../obras.php?msg=success");
    }
    else {
        Header("Location: ../obras.php?msg=error");
    }
    die();
}


?>