<?php
// include "db_connection.php";

function IncluirDados($tabela, $dados=null, $nomes=null, $sql="") {

    include "db_connection.php";

    if (empty($sql) == true) {

        $sql="insert into "."{$tabela}"." (";
        $campos="";
        $total=count($nomes)-1;

        for ($i=0 ; $i < count($nomes) ; $i++ ) {
            $campos=$campos.$nomes[$i];
        
            if ($i < $total) {
                $campos=$campos.", ";
            }

        }
        
        $sql=$sql.$campos.") values (";
        $campos="";

        for ($x =0 ; $x < count($dados) ; $x++ ) {

            $campo="'".$dados[$x]."'";
        
            if ($x < $total) {
                $campos=$campos.$campo.", ";
            } else {
                $campos=$campos.$campo.")";
            }
        }
    }

    $sql=$sql.$campos;
    
    $query = mysqli_query($conn, $sql);
    $id_gerado = mysqli_insert_id($conn);
    mysqli_close($conn);

    return ($id_gerado);

}


function AlterarDados($tabela, $dados, $nomes=null, $campo=null, $chave=null, $sql="") {
    include "db_connection.php";
    if (empty($sql) == true) {
        $campos="";
        $total=count($dados)-1;
        $sql="update "."{$tabela}"." set ";
        for ($i =0 ; $i < count($dados) ; $i++ ) {
            $campos=$campos.$nomes[$i]." = '".$dados[$i]."'";
        
            if ($i < $total) {
                $campos=$campos.", ";
            }
        }
        if ($tabela !== "parametros"){
            $sql=$sql.$campos." where  ".$campo." = "."'{$chave}'";
        } else {
            $sql=$sql.$campos;
        }
    }
    // echo  $sql;die();
    $query = mysqli_query($conn, $sql);   
    mysqli_close($conn);
    return $query;
}

function removeDados($tabela=null, $campo_chave=null, $id=null){
    if( $tabela == null ){
        return "ERRO AO EXCLUIR! Informar a tabela!";
    }
    if( $campo_chave == null ){
        return "ERRO AO EXCLUIR! Informar a campo_chave! ";
    }
    if( $id == null ){
        return "ERRO AO EXCLUIR! Informar ID! ";
    }
    include "db_connection.php";
    $sql = "DELETE FROM {$tabela} WHERE {$campo_chave} = '{$id}'";
    if($mysqli->query($sql)){
        return "OK";
    }else{
        return "ERRO";
    }
}


function usuarioexiste($loginUsuario){
    include "db_connection.php";     
    $resultado = $mysqli->query("select * from tbl_usuarios where usuarioLogin = '".$loginUsuario."'");
    $total = $resultado->num_rows;

    return ($total);
}

function qtdUsuarios(){
    include "db_connection.php";
    $sql = "select * from tbl_usuarios";
    $resultado = $mysqli->query($sql);
    $total = $resultado->num_rows;
    return ($total);
}

function qtdObras(){
    include "db_connection.php";
    $sql = "select * from tbl_obra";
    $resultado = $mysqli->query($sql);
    $total = $resultado->num_rows;
    return ($total);
}
function qtdObrasSite(){
    include "db_connection.php";
    $sql = "select * from tbl_obra where mostrar_site=1";
    $resultado = $mysqli->query($sql);
    $total = $resultado->num_rows;
    return ($total);
}

function ConsultarDados($tabela, $campo, $chave, $sql="") {
    include "db_connection.php";   
    if (empty($sql)) {
        $sql = "select * from "."{$tabela}"." where "."{$campo}"." = "."'{$chave}'";
    }

    $aDados=array();

    $resultado=mysqli_query($conn, $sql);

    if ($resultado) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            $aDados[]=$linha;
        }
    }

    mysqli_close($conn);
    return ($aDados);
}



?>