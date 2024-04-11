<?php

session_start();
include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
if(!isset($_POST['val'])){
    echo "nessuna recensione bro";
}else{
    $id = $_POST['val'];
    foreach($id as $i =>$v){
        $sql = "DELETE FROM recensioni WHERE IDRecensione = $v";
        $result = $conn->query($sql);
    }
    echo "eliminazione riuscita"
}

?>
  

<form action = "index.php" method = "POST">
    <button>TORNA INDIETRO</button>
<form>
</body>
</html>