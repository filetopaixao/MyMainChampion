var id;
		var classe;
		$('#passive,#abilityQ,#abilityW,#abilityE,#ultimate,#champion-select').on('click', function () {
			$('#modal-champions').modal('show');
			id = this.id;
			
		});





		$('.img-champion-list').on('click', function () {

			if(id == "champion-select"){
				champion = this.id
			    $('#modal-champions').modal('hide');

			    $.ajax({
		                type: 'POST',
		                url: 'get-ability.php',
		                async: true,
		                data: {champion : champion, click: id},

		              success: function(data) {
		              		$("#champion-select").html(data);
		              		                    
		              },
		              error: function(data) {                                
		                    alert('Tente outra vez.');                
		            }

		        });
			}

			if(id == "passive"){
				champion = this.id;
				
			    $('#modal-champions').modal('hide');

			    $.ajax({
		                type: 'POST',
		                url: 'get-ability.php',
		                async: true,
		                data: {champion : champion, click: id},

		              success: function(data) {
		              		$("#passive").html(data);
		              		
		              			championImg = champion.replace("'","");
				          		championImg = championImg.replace(" ","-");
				          		championImg = championImg.replace(".","");
				          		championImg = championImg.replace("&","amp");
				          		championImg = championImg.toLowerCase();
		              		
		              		
		              		$("#passive-champion").html('<img class="img-passive-champion" id="'+champion+'" src="https://www.mobafire.com/images/champion/square/'+ championImg +'.png">');                    
		              },
		              error: function(data) {                                
		                    alert('Tente outra vez.');                
		            }

		        });
			}

			if(id == "abilityQ"){
				
				champion = this.id;
			    $('#modal-ability').modal('show');

			    $.ajax({
		                type: 'POST',
		                url: 'get-abilities.php',
		                async: true,
		                data: {champion : champion, ability: id},

		              success: function(data) {
		              		$("#modal-ability-body").html(data);
		              		championImg = champion.replace("'","");
		              		championImg = championImg.replace(" ","-");
		              		championImg = championImg.replace(".","");
		              		championImg = championImg.toLowerCase();
		              		$("#"+id+"-champion").html('<img class="img-passive-champion" id="'+champion+'" src="https://www.mobafire.com/images/champion/square/'+ championImg +'.png">');
		              },
		              error: function(data) {                                
		                    alert('Tente outra vez.');                
		            }

		        });


				

			}

			if(id == "abilityW"){
				
				champion = this.id;
			    $('#modal-ability').modal('show');

			    $.ajax({
		                type: 'POST',
		                url: 'get-abilities.php',
		                async: true,
		                data: {champion : champion, ability: id},

		              success: function(data) {
		              		$("#modal-ability-body").html(data);
		              		championImg = champion.replace("'","");
		              		championImg = championImg.replace(" ","-");
		              		championImg = championImg.replace(".","");
		              		championImg = championImg.toLowerCase();
		              		$("#"+id+"-champion").html('<img class="img-passive-champion" id="'+champion+'" src="https://www.mobafire.com/images/champion/square/'+ championImg +'.png">');
		              },
		              error: function(data) {                                
		                    alert('Tente outra vez.');                
		            }

		        });


				

			}


			if(id == "abilityE"){
				
				champion = this.id;
			    $('#modal-ability').modal('show');

			    $.ajax({
		                type: 'POST',
		                url: 'get-abilities.php',
		                async: true,
		                data: {champion : champion, ability: id},

		              success: function(data) {
		              		$("#modal-ability-body").html(data);
		              		championImg = champion.replace("'","");
		              		championImg = championImg.replace(" ","-");
		              		championImg = championImg.replace(".","");
		              		championImg = championImg.toLowerCase();
		              		$("#"+id+"-champion").html('<img class="img-passive-champion" id="'+champion+'" src="https://www.mobafire.com/images/champion/square/'+ championImg +'.png">');
		              },
		              error: function(data) {                                
		                    alert('Tente outra vez.');                
		            }

		        });


				

			}


			if(id == "ultimate"){
				champion = this.id
			    $('#modal-champions').modal('toggle');

			    $.ajax({
		                type: 'POST',
		                url: 'get-ability.php',
		                async: true,
		                data: {champion : champion, click: id},

		              success: function(data) {
		              		$("#ultimate").html(data);
		              		championImg = champion.replace("'","");
		              		championImg = championImg.replace(" ","-");
		              		championImg = championImg.replace(".","");
		              		championImg = championImg.toLowerCase();
		              		$("#ultimate-champion").html('<img class="img-passive-champion" id="'+champion+'" src="https://www.mobafire.com/images/champion/square/'+ championImg +'.png">');                    
		              },
		              error: function(data) {                                
		                    alert('Tente outra vez.');                
		            }

		        });
			}


		    
		});