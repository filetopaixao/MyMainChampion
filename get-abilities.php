<?php
include 'db.php';
$champion = $_POST["champion"];
$ability = $_POST["ability"];
$query = "SELECT ability_name, ability_png, keyboard FROM q INNER JOIN champions ON q.champion_name = champions.name WHERE q.champion_name = '$champion' UNION SELECT ability_name, ability_png, keyboard FROM w INNER JOIN champions ON w.champion_name = champions.name WHERE w.champion_name = '$champion' UNION SELECT ability_name, ability_png, keyboard FROM e INNER JOIN champions ON e.champion_name = champions.name WHERE e.champion_name = '$champion'";
//echo $query;

$result = $mysqli->query($query);

if($result){
   while ($row = $result->fetch_assoc()){
   		$i=0;
   		$champion = strtolower($champion);


   		$img = '<img class="get-abilities" id="'.$row["keyboard"].'" src="https://www.mobafire.com/images/ability/'. $row["ability_png"] .'">';
   		 echo $img;
          $imgQ2 = '<img class="img-passive-champion" src="img/q.png">';
          $imgW2 = '<img class="img-passive-champion" src="img/w.png">';
   		 $imgE2 = '<img class="img-passive-champion" src="img/e.png">';

   		 

   		 echo "<script>$('.get-abilities').on('click', function () {
               
					$('#modal-champions').modal('hide');
					$('#modal-ability').modal('hide');

					if(this.id == 'Q'){
		   		 		$('#". $ability."').html($( this ).get());
		   		 		$('#". $ability."2').html('".$imgQ2."');
		   		 	}
		   		 	if(this.id == 'W'){
		   		 		$('#". $ability."').html($( this ).get());
		   		 		$('#". $ability."2').html('".$imgW2."');
		   		 	}
		   		 	if(this.id == 'E'){
		   		 		$('#". $ability."').html($( this ).get());
		   		 		$('#". $ability."2').html('".$imgE2."');
		   		 	}

				});</script>";
   }

   $result->free();
}

?>
