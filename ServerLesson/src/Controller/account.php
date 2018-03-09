<!DOCTYPE html>
<html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Account page</title>
    </head>
    <body>
 <?php 
 include_once __DIR__.'/init.php';
 //get id from address line
 $displayAccountUsername = $_GET['username'] ?? null;
 
 //check if it is exist and correct
 if (!$displayAccountUsername || !is_numeric($displayAccountUsername)){
 ?>
     <div>
     	<p>To be displayed, this page need a valid numeric id as querry</p>
     </div>
     
 <?php
 //create connection with database
 }else {
     
     //try and catch if problem in connection
     try {
         $connection = Service\DBConnector::setConfig($configs['db']);
     }catch (PDOException $exeption){
         http_response_code(500);
         echo 'A problem occured, contact support';
         exit(1);
     }
     
     //create a sql query to get data
     // not secured $sql = "SELECT username, password FROM user WHERE id =".$displayAccountId;
     
     $sql = 'SELECT * FROM user WHERE username = :username';
     $statement = $connection->prepare($sql);
     $statement->bindParam('username', $displayAccountUsername, PDO::PARAM_STR);
     $statement->execute();
     
     //execute sql querry
     //$affected = $connection->query($sql);
     
     //get result from object $statement to an assoc.array
     $resultAll = $statement->fetchAll();
     
     //check if there is min one line
     if (empty($resultAll)){
         
         echo 'A problem occured, there is no data';
         return; //to exit the script
         }       
     }
     //Itirate $resultAll array
     foreach ($resultAll as $aLine){
     //display data on the page by line
     ?>
         <div>
         	<p>Username: <?php echo $aLine['username'];?></p><br>
         	<p>Password: <?php echo $aLine['password'];?></p>
         </div>
         
      <?php   
       
 }
      
 ?>
    </body>
</html>


