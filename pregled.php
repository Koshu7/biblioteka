<?php

include_once 'db.php';

if ($query = mysqli_query($conn, "SELECT * FROM tabela")){
} else {
  echo $conn->error;
}

$conn -> close();