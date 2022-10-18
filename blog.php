<!doctype html>
<html lang="fr">

<?php
include 'template-parts/head.html';
?>

<body>
<?php require_once ("template-parts/menu.php"); 
?> 

<header>
<?php
echo menu("header");
?>
</header>

<?php
require 'template-parts/main.php';
?>

<footer>
<?php
echo menu("footer");
?>
</footer>

</body>

</html>
