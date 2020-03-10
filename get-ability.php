<?php
include 'db.php';
$champion = $_POST["champion"];

$click = $_POST["click"];
$passive;

if($click == "champion-select"){

	$champion = strtolower(str_replace("&","amp",str_replace(".","",str_replace(" ","-",str_replace("'","",$champion)))));
			       echo '<img class="img-champion" src="https://www.mobafire.com/images/champion/square/'. $champion .'.png">';

}else{
	if($click == "passive"){
		$query = "SELECT passive, passive_png FROM champions WHERE name = '$champion'";
	}

	if($click == "ultimate"){
		$query = "SELECT ability_name, ability_png FROM r INNER JOIN champions ON r.champion_name = champions.name WHERE champions.name = '$champion'";
	}

	//echo $query;

	$result = $mysqli->query($query);

	if($result){
	   while ($row = $result->fetch_assoc()){
	   		if($click == "passive"){
	   			$ability = $row["passive"];
	   			$abilitypng = $row["passive_png"];
	   			
	   		}
	   		if($click == "ultimate"){
				$ability = $row["ability_name"];
				$abilitypng = $row["ability_png"];
	   		}
	   		
	   		$passive = strtolower(str_replace(":","",str_replace(".","",str_replace(" ","-",str_replace("'","",$ability)))));
	   		$champion = strtolower(str_replace("&","amp",$champion));
	   		 echo '<img class="img-'.$click.' get-abilities" id="'.$champion.'" src="https://www.mobafire.com/images/ability/'. $abilitypng  .'">';
	   		 
	   }

	   $result->free();
	}
}
?>