<?php include_once("header.php"); ?>

<h1>GET</h1>
<p>Choisissez votre dragon</p>

<ul>
<li><a href="04.php?color=black">black</a></li>
<li><a href="04.php?color=pink">pink</a></li>
<li><a href="04.php?color=yellow">yellow</a></li>
</ul>

<form action="04.php" method="get">

<select name="color">
    <option value="green">vert</option>
    <option value="purple">violet</option>
    <option value="red">rouge</option>
    <option value="white">blanc</option>


</select>
<button type="submit">Chercher</button>
</form>

<?php
$url = "https://img.att.ovh/dragons/";

print_r($_GET);
print_r($_POST);

if (isset($_GET["color"])){
    print($_GET['color']);
    print('<img src="' . $url . $_GET['color'] . '.jpg" alt""/>');
} else {
    print('Choisissez un dragon!'); 
}

?>

<?php include_once("footer.php"); ?>