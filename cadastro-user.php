<?php
include 'parts/header.php';
include 'parts/login/form-cadastro-user.php';
include 'parts/footer.php';
include 'functions.php';

if(count($_POST) > 0)
{
   cadastrarPrestador($_POST);

   echo '<script>window.location.href = "login.php";</script>';

}

?>


