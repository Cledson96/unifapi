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

function getCursoById($id) {
   
    include "db_connection.php";

    $query = "SELECT * FROM tbl_cursos WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "i", $id);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $curso = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $curso;
}

function editarCurso($id, $nome, $resumo, $tipo, $periodo, $modalidade, $valor, $mostrar_site, $foto_curso) {
    global $conn;

    
    if (!empty($foto_curso['name'])) {
       
        $nome_arquivo = preg_replace("/[^a-zA-Z0-9.]/", "_", $foto_curso['name']);

        $diretorio = '../../assets/images/cursos';
        $destino = $diretorio . "/" . $nome_arquivo;
        $local = 'assets/images/cursos'."/".$nome_arquivo;
        move_uploaded_file($foto_curso['tmp_name'], $destino);

        $stmt = $conn->prepare("UPDATE tbl_cursos SET nome=?, resumo=?, tipo=?, periodo=?, modalidade=?, valor=?, mostrar_site=?, foto=? WHERE id=?");
        $stmt->bind_param("sssisdisi", $nome, $resumo, $tipo, $periodo, $modalidade, $valor, $mostrar_site, $local, $id);
    } else {
       
        $stmt = $conn->prepare("UPDATE tbl_cursos SET nome=?, resumo=?, tipo=?, periodo=?, modalidade=?, valor=?, mostrar_site=? WHERE id=?");
        $stmt->bind_param("sssisdii", $nome, $resumo, $tipo, $periodo, $modalidade, $valor, $mostrar_site, $id);
    }


    $result = $stmt->execute();

    $stmt->close();

    return $result;
}
if (isset($_POST['acao']) && $_POST['acao'] == 'editar_cursos') {
    $id_curso = $_POST['id_curso'];
    $nome_curso = $_POST['nome_curso'];
    $resumo_curso = $_POST['resumo_curso'];
    $tipo = $_POST['tipo'];
    $periodo_curso = $_POST['periodo_curso'];
    $modalidade_curso = $_POST['modalidade_curso'];
    $valor_curso = $_POST['valor_curso'];
    $mostrar_site = $_POST['mostrar_site'];
    $foto_curso = isset($_FILES['foto_curso']) ? $_FILES['foto_curso'] : FALSE;

    $result = editarCurso($id_curso, $nome_curso, $resumo_curso, $tipo, $periodo_curso, $modalidade_curso, $valor_curso, $mostrar_site, $foto_curso);

    if ($result) {
        echo "<script>alert('Curso alterado com sucesso!');</script>";
        header('Location: ../editar_curso.php?id=' . $id_curso);
        exit();
    } else {
        echo "Erro ao editar o curso: " . mysqli_error($conn);
    }
}

if ($acao == 'cadastrar_cursos') {

        $nome_curso  = isset($_POST["nome_curso"])  && !empty($_POST["nome_curso"]) ? ucwords(strtolower($_POST["nome_curso"])) : ''; 
        
        $sql_verificar = "SELECT COUNT(*) as count FROM tbl_cursos WHERE nome = ?";
        $stmt_verificar = mysqli_prepare($conn, $sql_verificar);
        mysqli_stmt_bind_param($stmt_verificar, "s", $nome_curso);
        mysqli_stmt_execute($stmt_verificar);
        mysqli_stmt_bind_result($stmt_verificar, $count);
        mysqli_stmt_fetch($stmt_verificar);
        mysqli_stmt_close($stmt_verificar);

        if ($count > 0) {
            echo "<script>alert('Curso já cadastrado!');</script>";
            echo "<script>window.location.href = '../cadastrar-cursos.php';</script>";
        }{
            $resumo_curso  = isset($_POST["resumo_curso"])  && !empty($_POST["resumo_curso"]) ? $_POST["resumo_curso"] : ''; 
            $descricao_curso  = isset($_POST["descricao_curso"])  && !empty($_POST["descricao_curso"]) ? $_POST["descricao_curso"] : '';
            $tipo  = isset($_POST["tipo"])   && !empty($_POST["tipo"]) ? $_POST["tipo"] : ''; 
            $categoria  = isset($_POST["categoria"])   && !empty($_POST["categoria"]) ? $_POST["categoria"] : ''; 
            $periodo_curso   = isset($_POST["periodo_curso"])       && !empty($_POST["periodo_curso"]) ? $_POST["periodo_curso"] : ''; 
            $modalidade_curso = isset($_POST["modalidade_curso"])  && !empty($_POST["modalidade_curso"]) ? $_POST["modalidade_curso"] : ''; 
            $mostrar_site      = isset($_POST["mostrar_site"])    && !empty($_POST["mostrar_site"]) ? $_POST["mostrar_site"] : ''; 
            $valor_curso      = isset($_POST["valor_curso"])    && !empty($_POST["valor_curso"]) ? $_POST["valor_curso"] : ''; 
    
            $diretorio = '../../assets/images/cursos';
          
            $foto_curso = isset($_FILES['foto_curso']) ? $_FILES['foto_curso'] : FALSE;
    
            $nome_arquivo = preg_replace("/[^a-zA-Z0-9.]/", "_", $foto_curso['name']);
    
            $destino = $diretorio."/".$nome_arquivo;
    
            $local = 'assets/images/cursos'."/".$nome_arquivo;
            
            move_uploaded_file($foto_curso['tmp_name'], $destino);
    
            $sql = "INSERT INTO tbl_cursos (nome, resumo, tipo, periodo, modalidade, mostrar_site, valor, foto,categoria_id,descricao) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssisidsis", $nome_curso, $resumo_curso, $tipo, $periodo_curso, $modalidade_curso, $mostrar_site, $valor_curso, $local,$categoria,$descricao_curso);
            $result = mysqli_stmt_execute($stmt);
    
            if ($result) {
                echo "<script>alert('Curso cadastrado com sucesso!');</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar o curso: " . mysqli_error($conn) . "');</script>";
            }
        
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            echo "<script>window.location.href = '../cadastrar-cursos.php';</script>";
        }

       
    }

    if ($acao == 'cadastrar_categoria') {

        $nome = isset($_POST["nome"]) && !empty($_POST["nome"]) ? ucwords(strtolower($_POST["nome"])) : '';

        $sql_verificar = "SELECT COUNT(*) as count FROM tbl_categorias WHERE nome = ?";
        $stmt_verificar = mysqli_prepare($conn, $sql_verificar);
        mysqli_stmt_bind_param($stmt_verificar, "s", $nome);
        mysqli_stmt_execute($stmt_verificar);
        mysqli_stmt_bind_result($stmt_verificar, $count);
        mysqli_stmt_fetch($stmt_verificar);
        mysqli_stmt_close($stmt_verificar);

        if ($count > 0) {
            echo "<script>alert('Categoria já cadastrada!');</script>";
            echo "<script>window.location.href = '../categorias.php';</script>";
        }else{
            $sql = "INSERT INTO tbl_categorias (nome) VALUES (?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $nome);
            $result = mysqli_stmt_execute($stmt);
    
            if ($result) {
                echo "<script>alert('Categoria cadastrado com sucesso!');</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar o categoria: " . mysqli_error($conn) . "');</script>";
            }
        
          
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            echo "<script>window.location.href = '../categorias.php';</script>";
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