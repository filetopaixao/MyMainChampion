<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93910088-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-93910088-3');
	</script>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/style/style.css">

</head>
<body>
	<?php include 'db.php' ?>

	
			<div class="col-md-12" style="text-align: center; position: relative; top: 40px;">
				
					<img src="img/logo-beta.png">
				
			</div>


	<div id="container">
		<div class="row" id="mural">
			<div class="col-md-3">
				<div style="bottom: 0;position: relative;">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
						<input type="hidden" name="cmd" value="_s-xclick" />
						<input type="hidden" name="hosted_button_id" value="TWJSGU53S6XU6" />
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
						<img alt="" border="0" src="https://www.paypal.com/en_BR/i/scr/pixel.gif" width="1" height="1" />
					</form>
				</div>
			</div>
			<div class="col-md-6" id="champion">
				<a href="#" id="champion-select"><img class="img-champion" src="img/select-champion.png"></a>
				<table class="abilities">
					<tr>
						<td>
							<p>Passive</p>
						</td>
						<td>
							<p>Q</p>
						</td>
						<td>
							<p>W</p>
						</td>
						<td>
							<p>E</p>
						</td>
						<td>
							<p>R</p>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#" id="passive"><img class="img-passive get-abilities" src="img/select-passive.png"></a>
						</td>
						<td>
							<a href="#" id="abilityQ"><img class="get-abilities" src="img/select-ability.png"></a>
						</td>
						<td>
							<a href="#" id="abilityW"><img class="get-abilities" src="img/select-ability.png"></a>
						</td>
						<td>
							<a href="#" id="abilityE"><img class="get-abilities" src="img/select-ability.png"></a>
						</td>
						<td>
							<a href="#" id="ultimate"><img class="get-abilities" src="img/select-ultimate.png"></a>
						</td>
					</tr>
					<tr>
						<td>
							<div id="passive-champion"></div>
						</td>
						<td>
							<div id="abilityQ-champion"></div><div id="abilityQ2"></div>
						</td>
						<td>
							<div id="abilityW-champion"></div><div id="abilityW2"></div>
						</td>
						<td>
							<div id="abilityE-champion"></div><div id="abilityE2"></div>
						</td>
						<td>
							<div id="ultimate-champion"></div>
						</td>
					</tr>
				</table>

				
			</div>
			<div class="col-md-3">
				<a href="mailto:filetopaixaowd@gmail.com"><img style="width: 125px;" src="/img/feedback.png"></a>
			</div>
		</div>
	</div>

	<!-- Modal Champions -->
<div class="modal fade" id="modal-champions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Select a Champion</h4>
      </div>
      <div class="modal-body">
        <?php
        	$result = $mysqli->query('SELECT name, id FROM champions');
			if($result){
			   while ($row = $result->fetch_assoc()){
			   		$champion = strtolower(str_replace("&","amp",str_replace(".","",str_replace(" ","-",str_replace("'","",$row["name"])))));
			       echo '<img class="img-champion-list" id="'.$row["name"].'" src="https://www.mobafire.com/images/champion/square/'. $champion .'.png">';
			   }

			   $result->free();
			}
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Champions -->

<!-- Modal Ability -->
<div class="modal fade" id="modal-ability" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Select an Ability</h4>
      </div>
      <div class="modal-body" id="modal-ability-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Ability -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="scripts/script.js"></script>
</body>
</html>