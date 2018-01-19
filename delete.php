<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM cadastro WHERE PK_ID_TAG=$id");
header("Location:index.php");
?>

