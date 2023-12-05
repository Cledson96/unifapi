<?php
    require_once('phpmailer/class.phpmailer.php');

    $mail = new PHPMailer();

    $nome      = isset($_REQUEST['nome'])      && !empty($_REQUEST['nome'])      ? utf8_decode($_REQUEST['nome'])     : '';
    $telefone     = isset($_REQUEST['telefone'])     && !empty($_REQUEST['telefone'])     ? $_REQUEST['telefone']     : '';
    $assunto   = isset($_REQUEST['assunto'])   && !empty($_REQUEST['assunto'])   ? $_REQUEST['assunto']               : '';
    $emailForm   = isset($_REQUEST['emailForm'])   && !empty($_REQUEST['emailForm'])   ? $_REQUEST['emailForm']       : '';
    $mensagem  = isset($_REQUEST['mensagem'])  && !empty($_REQUEST['mensagem'])  ? utf8_decode($_REQUEST['mensagem']) : '';
    
    $address = 'contato@metrorns.com.br';
    $toaddress = 'contato@metrorns.com.br';
    $tonome = 'Construtora MetroRNS'; 

    $mail->SetFrom( $address , $nome );
    $mail->AddReplyTo( $address , $nome );
    $mail->AddAddress( $toaddress , $tonome );
    $mail->Subject = utf8_decode('Construtora MetroRNS');
    $mail->CharSet = 'UTF-8';

    $nome      = isset($nome)      && !empty($nome)      ? "Nome: $nome<br>"          : '';
    $telefone = isset($telefone) && !empty($telefone) ? "Telefone: $telefone<br>" : '';
    $emailForm = isset($emailForm) && !empty($emailForm) ? "E-mail: $emailForm<br>" : '';
    $assunto   = isset($assunto)   && !empty($assunto)   ? "Assunto: $assunto<br>"    : '';
    $mensagem  = isset($mensagem)  && !empty($mensagem)  ? "Mensagem: $mensagem<br><br>"  : '';
 
    $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br>Esta mensagem veio através do seguinte endereço: ' . $_SERVER['HTTP_REFERER'] : '';
    $body = "$nome $telefone $emailForm $assunto $mensagem $referrer";
    $mail->MsgHTML( $body );
   
    if( $mail->Send() ){
        echo  "<script>alert('Email enviado com Sucesso!'); window.location='index.php'; </script>";
    }
    else{
        echo json_encode(2);
    }