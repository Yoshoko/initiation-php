<?php include_once("header.php"); ?>

<h1>Les boucles</h1>;
<div id="container">
<?php 

$url = "https://img.att.ovh/dragons/" ; 

$dragons = array("black.jpg", "blue.jpg","green.jpg", "orange.jpg", "pink.jpg", "purple.jpg", "red.jpg","yellow.jpg");

for ( $i =  0; $i < count($dragons) ; $i++){
   // print($url . $dragons[$i]);
    print( '<img src="' . $url . $dragons[$i] . '"/>') ; 
}

?>
</div>
<?php include_once("footer.php"); ?>
