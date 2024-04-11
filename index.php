<?php

session_start();
include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECENSIONI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action = "elimina.php" method = "POST">
<?php

$sql =
"SELECT * FROM recensioni";


$result = $conn->query($sql);

$count = 0;
        if ($result->num_rows > 0) {
            echo "<h1 class='tit'>RECENSIONI</h1>";
        echo '<table>';
        echo "<br><br>";
        while($row = mysqli_fetch_assoc($result)){
            if($count == 0){
                foreach ($row as $chiave => $y) {
                    echo "<td>" . "<p>$chiave</p>"  . "</td>";
                    }
            }
            echo "<tr>";
            foreach ($row as $value) {
            echo "<td>" . $value ;
            }
            $v = $row['IDRecensione'];
            echo "<input type='checkbox' id='$v' name='val[]' value='$v'>";
      
            echo "</td>" . "</tr>";
            $count ++;
        }
        echo '</table><br />';
        
        }else {
            echo "0 results";
          }


?>
  

<h1><button>ELIMINA</button></h1>
    
<form>
</body>
</html>