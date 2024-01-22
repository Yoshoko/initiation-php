<?php include_once("header.php"); ?>

<h1>Les tests</h1>
<?php 
$age = 20;

$img_adult = "https://img.att.ovh/dragons/black.jpg";
$img_child = "https://img.att.ovh/dragons/pink.jpg";

if ( $age >= 18){
    print( '<img src="' .$img_adult . '"/>') ; 
    } else{
    print( '<img src="' .$img_child. '"/>') ; 
    }
?>

<?php include_once("footer.php"); ?>