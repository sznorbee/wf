<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    
    $username = $_POST['username'] ?? null; //if username not set value is null
    $password = $_POST['password'] ?? null;
    $password_2 = $_POST['password_2'] ?? null;
    
    echo 'Validate data'.'<br>';
    $usernameSuccess = (is_string($username) && strlen($username)>2);
    $passwordSuccess = ($password === $password_2 && strlen($password)>8);
    
    if ($usernameSuccess && $passwordSuccess){
        
        //create a connection to the database
        try{
            $connection = new PDO('mysql:host=localhost;dbname=register', 'root');
            
        }catch (PDOException $exception){
            http_response_code(500); //internal server error
            echo 'A problem occured, contact support';
            exit(10); //0is ok, 10 is not ok
        }
        //to store data on server
        $sql ="INSERT INTO user(username, password) VALUES (\"$username\", \"$password\")";
        //NOT GOOD WAY
        $connection->exec($sql);
        echo 'Store data';
        return ;
    }
    
    echo 'Validation fail';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register form</title>
</head>
<body>
	<form action="/register.php" method="post">
	
		<?php if (!($usernameSuccess ?? true)){?>
		<div>
			<p>You have an error in your username!</p>
		</div>
		<?php }?>
		<label for="username">Your username:</label><br>
		<input type="text" name="username" value="<?php echo htmlentities($_POST['username'] ?? '');?>">
		<br>
		
		<?php if (!($passwordSuccess ?? true)){?>
		<div>
			<p>You have an error in your password!</p>
		</div>
		<?php }?>
		<label for="password">Your password:</label><br>
		<input type="password" name="password">
		<br>
		
		<label for="password_2">Retype your password:</label>
		<input type="password" name="password_2">
		<br>
		
		<button tipe="submit">Send</button>
		
	</form>
</body>
</html>