<?php

// conectar com a base de dados { 
    $dbhost = 'localhost'; // nome de onde está (ex:localhost e 127....)

    $dbusername = 'root'; // nome do usuario 

    
    $dbsenha = 'ely_neder'; // senha do banco de dados

    $dbnome = 'escola_teste'; // nome do banco de dados

    $conexao = new mysqli ($dbhost, $dbusername, $dbsenha, $dbnome);
// } conectar com a base de dados

?>