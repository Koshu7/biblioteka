<?php

include_once 'db.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM knjiga WHERE id='$id';");
header('Location: index.php');
?>


