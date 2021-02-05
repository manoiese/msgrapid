<?php
$conexao = mysqli_connect ("localhost", "root", "toor", "msg");

if (isset($_POST["id"])) {
$a = $_POST["id"];
    
if (is_int($a)) {
        $deletamsg = mysqli_query ($conexao,"UPDATE msg SET oculto = '0' WHERE msg.id = $a");
} else {
     echo "erro";
}}

mysqli_close($conexao);
?>
