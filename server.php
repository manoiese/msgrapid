<?php
    $conexao = mysqli_connect ("localhost", "root", "toor", "msg");

    $a = 0;
    $data = [];
$result = mysqli_query($conexao, "SELECT * FROM msg WHERE msg.oculto")
or die (mysqli_error($conexao));
while($row = mysqli_fetch_array($result)) {

    
    array_push($data, ["id" => $row['id'], "nome" => $row['nome'] . " para " . $row['para'], "message" => nl2br($row['mus'] . $row['msg'])]);
    $a = $a + 1;
    
    
}
    $nu = ["num" => $a,
    "msg" => $data
    ];
    echo json_encode($nu);
mysqli_close($conexao);
?>
