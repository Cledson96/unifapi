<?php
  include "db_connection.php";

  $id = substr($_SERVER['REQUEST_URI'],1);
  $id = explode('/',$id);
  $id = end($id);

  $id_curso = $_GET['id'];

  $del_users = mysqli_query($conn, "DELETE FROM tbl_cursos WHERE id = $id_curso");

  if ($del_users == 1){
    header("Location: ../cursos.php?msg=deu_certo");
  }
  else{
    header("Location: ../cursos.php?msg=erro");
  }
?>