<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $username = $_POST['username'] ?? null;
    $tnumber = $_POST['tnumber'] ?? null;
    $password = $_POST['password'] ?? null;
    $passwor_2 = $_POST['password_2'] ?? null;
    
    //validate data
    $usernameSuccess = (is_string($username) && strlen($username) > 4);
    $tnumberSuccess = (is_int($tnumber) && strlen($tnumber));
    $passwordSuccess = ($password === $password_2 && strlen($password) > 4);
    
    if ($usernameSuccess && $tnumberSuccess && $passwordSuccess){
        echo 'Store data';
        return;
    }
  
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register form</title>
</head>
<body>
    <form action="/newfile.php" method="post">
    	
    	<?php if (!($usernameSuccess ?? true)){ ?>
        	<div>
        		<p>Problem user name</p>
        	</div>
    	<?php }?>
    	<label for="username">Username</label><br>
    	<input type="text" name="username" value="<?php echo htmlentities($_POST['username'] ?? '');?>"><br>
    	
    	<?php if (!($tnumberSuccess ?? true)){ ?>
        	<div>
        		<p>Problem telefon number</p>
        	</div>
    	<?php }?>
    	<label for="tnumber">Telephon number</label><br>
    	<input type="tel" name="tnumber" value="<?php echo htmlentities($_POST['tnumber'] ?? '');?>"><br>
    	
    	<?php if (!($passwordSuccess ?? true)){ ?>
        	<div>
        		<p>Problem password</p>
        	</div>
    	<?php }?>
    	<label for="password">Password</label><br>
    	<input type="password" name="password"><br>
    	
    	<label for="password_2">Retype your Password</label><br>
    	<input type="password" name="password_2"><br>
    	
    	<button type="submit">Send</button>
    </form>
</body>
</html>
