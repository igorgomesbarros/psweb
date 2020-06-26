<?php
include 'parts/header.php';
include 'parts/servico/form-cadastro-servico.php';
include 'parts/footer.php';
include 'functions.php';

if(count($_POST) > 0)
{
    cadastrarServico($_POST);

    echo '<script>window.location.href = "index.php";</script>';

}


?>