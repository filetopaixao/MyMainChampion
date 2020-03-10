<?php
$servername = "localhost";
$database = "mymainchampion";
$username = "root";
$password = "";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

// Executa uma consulta que pega cinco notícias
/*
$result = $mysqli->query('SELECT champion FROM champions');
if($result){
   while ($row = $result->fetch_assoc()){
   		$champion = strtolower(str_replace(".","",str_replace(" ","-",str_replace("'","",$row["champion"]))));
       echo '<img src="https://www.mobafire.com/images/champion/square/'. $champion .'.png">';
   }

   $result->free();
}
*/
?>