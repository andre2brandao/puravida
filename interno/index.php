<!DOCTYPE html>
<html>

	<head>
		<title>Carteira BitCoin</title>
		<link rel="stylesheet" type="text/css" href="./interno/style.css">	
	</head>

	<body>

		<?php require_once("top-menu.php"); ?>


	<form >
    <label class="input-group">Username: </label>
    <input class="input-group" type="text" placeholder="Enter Username" required>
    <br/>
    <label class="input-group">Password: </label>
    <input class="input-group" type="password" placeholder="Enter Password" required>

    <button type="submit">Login</button>
    <label class="input-group"> Remember me</label>
  	<input class="input-group" >
    

	<button class="btn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  	</form>

		
	</body>
</html>
