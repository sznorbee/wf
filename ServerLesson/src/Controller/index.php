<?php 
$currentTimeSlot = (new DateTime())->format('H');

if ($currentTimeSlot < 12) {
    $toDisplay = 'Good Morning!';
}elseif ($currentTimeSlot < 18){
    $toDisplay = 'Good Afternoon!';
}elseif ($currentTimeSlot < 22){
    $toDisplay = 'Good Evening!';
}else {
    $toDisplay = 'Please sleep!';
}
$range = range(0, 10);


/*
if (isset($_GET['firstname'])){
    $firstname = $_GET['firstname'];
}else {
    $firstname = 'Norbert';
}

if (isset($_GET['lastname'])){
    $lastname = $_GET['lastname'];
}else{
    $lastname = 'Szekeres';
}
*/
//Shorter code with PHP 7 null coalescing operator double question mark ??
$firstname = $_GET['firstname'] ?? 'Norbert';
//security
$firstname = htmlentities($firstname);

$lastname = $_GET['lastname'] ?? 'Szekeres';
$lastname = htmlentities($lastname);



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Insert title here</title>
    </head>
    <body>
    	Hello <?php echo $firstname .' '. $lastname ?> <?php echo $toDisplay;?>
    	<ul>
    		<?php foreach ($range as $element){?>
    		<li><?php echo $element;?></li>
    		<?php }?>
    	</ul>
    </body>
</html>
