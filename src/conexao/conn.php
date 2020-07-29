
<?php

    
    ini_set('display_erros', true);
    error_reporting(E_ALL);

   
    $hostname = "localhost";
    $database = "minhasNotas";
    $username = "root";
    $password = "";

    if($conecta = mysqli_connect($hostname, $username, $password, $database)){
       
    }else{
        echo "Erro: ".mysqli_connect_error();
    }