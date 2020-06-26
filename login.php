<?php
include 'parts/header.php';
include 'parts/login/form.php';
include 'functions.php';


if(count($_POST) > 0){
    $retorno = login($_POST['email'],$_POST['senha']);
    if($retorno){
       // print_r($retorno);
        setcookie("usuarioLogado", $retorno['nome']);
        setcookie("nomeEmpresa", $retorno['nome_empresa']);
        setcookie("idPrestador", $retorno['id_prestador']);
        echo '<script>window.location.href = "cadastro-servico.php";</script>';
    }else{
        echo "<script type='text/javascript'>alert('Email ou senha incorretos!');</script>";
    }
}else{
    setcookie("usuarioLogado", "", time()-3600);
    setcookie("nomeEmpresa", "", time()-3600);
    setcookie("idPrestador","", time()-3600);
}



?>

