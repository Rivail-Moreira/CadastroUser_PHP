<?php
    //Informação de conbexão
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'admin');
    define('BASE', 'cadastro');

    // Cria a conexão
    $conn = new mysqli(HOST,USER,PASS,BASE);

    if($conn == false){
        echo "Erro na conexão ao bd";
      
    }

?>