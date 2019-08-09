<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST["codigo"])){
    $codigo=$_POST["codigo"];
    echo  "codigo del producto :".$codigo;
}
// Attempt select query execution
$sql = "SELECT * FROM productos WHERE codigo='$codigo'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<hr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td> Precio del producto: " . $row['precio'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
//Close connection
mysqli_close($link);
?>