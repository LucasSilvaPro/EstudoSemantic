<?php

	if (isset($_COOKIE['login'])) {
		require_once('homeUp.php');
	}else{
		require_once('login.php');
	}



  ?>