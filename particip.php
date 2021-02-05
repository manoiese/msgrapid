<?php
$conexao = mysqli_connect ("localhost", "root", "toor", "msg");

    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
        $nome = utf8_encode($nome);
        $nome = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $nome);
        $nome = str_replace("\"", "",$nome);
        $nome = str_replace("'", "",$nome);
        $nome = htmlentities($nome);
    }else{
        $nome = "";
    }
    

    if (isset($_POST["mus"])) {
        $mus = $_POST["mus"];
        $mus = utf8_encode($mus);
        $mus = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $mus);
        $mus = str_replace("\"", "",$mus);
        $mus = str_replace("'", "",$mus);
        $mus = htmlentities($mus);
    }else{
        $mus = "";
    }
    

    if (isset($_POST["para"])) {
        $para = $_POST["para"];
        $para = utf8_encode($para);
        $para = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $para);
        $para = str_replace("\"", "",$para);
        $para = str_replace("'", "",$para);
        $para = htmlentities($para);
    }else{
        $para = "";
    }
    
    
    if (isset($_POST["msg"])) {
        $msg = $_POST["msg"];
        $msg = utf8_encode($msg);
        $msg = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $msg);
        $msg = str_replace("\"", "",$msg);
        $msg = str_replace("'", "",$msg);
        $msg = htmlentities($msg);
    }else{
        $msg = "";
    }

    if (isset($_POST["msg"])) {

$ip = date('d-m-Y H:i:s') . "\n" . $_SERVER['HTTP_USER_AGENT'] . "\n" . $_SERVER['REMOTE_ADDR'] . "\n" . $_SERVER['HTTP_X_FORWARDED_FOR'];
    $ip = utf8_encode($ip);
    $ip = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $ip);
    $ip = str_replace("\"", "",$ip);
    $ip = str_replace("'", "",$ip);
    $ip = htmlentities($ip);
}
    
    
    
 
    if (isset($_POST["msg"])) {
        $escrevemsg = mysqli_query ($conexao, "INSERT INTO rrvmsg.msg (id ,nome ,mus ,para ,msg ,ip ,oculto) VALUES (NULL ,  '".$nome."',  '".$mus."', '".$para."',  '".$msg."',  '".$ip."',  1)");
        $ok = mysqli_fetch_assoc($escrevemsg);
    }


?>
<html>
<head>
<title>enviado</title>
<meta http-equiv="refresh" content="0; url=../">
</head>
<body>
<h1 align=center>Mensagem Enviada</h1>
</body>
</html>
<?php
    mysqli_close($conexao);
?>
