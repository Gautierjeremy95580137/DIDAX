<?php
session_start();
unset($_SESSION['pseudo']);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DIDAX</title>
    <link href="style/style.css" rel="Stylesheet" type="text/css" >

</head>
<body id ="balise"class="baliseBlack">
<?php include "header.php" ?>
<div>vous avez été déconnecté</div>
<a href="index.php">cliquez ici pour vous reconnecter</a>
</body>
</html>
