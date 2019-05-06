<?php

class Cod{
	public function activeMenu(){
		echo "<div class='ui inverted fixed segment menu'>
				<div class='ui inverted left right menu'>
					<button class='ui inverted teal button big' id='ativar'><i class='home icon'></i>Menu</button>
				</div>
			</div><br><br><br>
		";	
	}

	public function verific(){
		if (isset($_COOKIE['login'])) {
			header("Location: login.php");
		}else{
			header("Location: cu.php");
		}

	}
}		
	

  ?>