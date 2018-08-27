<!DOCTYPE html>
<html>

	<head>
		<title>Carteira BitCoin - Login</title>
		<link rel="stylesheet" type="text/css" href="style-login.css">	
	</head>

	<body>

    <div class="logo">
      <a href="index.php">
      <img src="images/select-pura-vida.png">
      </a>
    </div>

	<form >

    <!-- <label class="input-group">Username: </label>
    <input class="input-group" type="text" placeholder="Enter Username" required>
    <br/>
    <label class="input-group">Password: </label>
    <input class="input-group" type="password" placeholder="Enter Password" required>

    <button type="submit" class="btn">Login</button>
    <button class="btn">Cancel</button>
    <br>
    
    <span class="psw">Forgot <a href="#">password?</a></span> -->

    <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b>Captcha code</b></label>
    <input type="password" placeholder="Insira o Captcha" name="psw" required>
  
  <div class="container">
    <button type="submit" class="btn">Login</button>
    <button type="submit" class="btn-register">Register</button>
  </div>
  
    </div>

  <div class="container">
    <!--<button type="button" class="cancelbtn">Cancel</button>-->
    <label>
      <input type="checkbox" style="margin-left: 3px;" checked="checked" name="remember"> Lembrar acesso
    </label>
    <span class="psw" style="margin-left: 294px;">Esqueceu a <a href="#">senha?</a></span>
    <br>
  </div>

  	</form>
		
	</body>
</html>