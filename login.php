<?php 
	
	echo "<link rel='stylesheet' type='text/css' href='sui/semantic.css'>";
	echo "<link rel='stylesheet' type='text/css' href='css.css'>";

	echo "<div class='ui inverted vertical labeled sidebar icon menu'>
			<a class='item' href='#'><i class='home icon'></i>Home</a>
		</div>
		<div class='pusher'>
	";

	require_once('codBocks.php');
	$codigos=new Cod();
	$codigos->activeMenu();

	echo "<div class='ui inverted segment grid'>
			<div class='four wide centered column'>
			  <div class='ui form'>
			  	<form action='#' method='post'>
					<fieldset>
						<legend><h1 class='ui teal header'>Login</h1></legend><br>
						<div class='fields'>
							<div class='six wide field'>
								<label class='ui inverted teal label fon'>User:</label>
							</div>
							<div class='ten wide field'>
								<input type='text' placeholder='Name User' name='user' required/>
							</div>
						</div>
						<div class='fields'>
							<div class='six wide field'>
								<label class='ui inverted teal label fon'>Password:</label>
							</div>
							<div class='ten wide field'>
								<input type='password' placeholder='Password' name='password' required/>
							</div>
						</div>
						<div class='ui inverted divider'></div>
						<div class='three fields'>
							<div class='field'></div>
							<div class='field'><input type='submit' value='Enviar' class='ui teal inverted button'/></div>
						</div>
					</fieldset>
				</form>
			  </div>
			</div>
		</div>
		</div>
	";

	echo "
		<script src='jquery.js'></script>
		<script src='sui/semantic.js'></script>
		  <script type='text/javascript'>
		  	$('#ativar').click(function(){
		  		$('.ui.labeled')
		  		.sidebar('toggle');
		  	});
		  </script>

	";


 ?>