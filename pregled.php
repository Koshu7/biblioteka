<?php

include_once 'db.php';

// if (($query1 = mysqli_query($conn, "SELECT * FROM autor")) && ($query2 = mysqli_query($conn, "SELECT * FROM knjiga"))){
//   echo "Returned rows autor: ". mysqli_num_rows($query1)."\r\n";
//   echo "Returned rows knjiga: ". mysqli_num_rows($query2);
// } else {
//   echo "Error";
// }

if ($query = mysqli_query($conn, "SELECT * FROM tabela")){
  echo gettype($query);
} else {
  echo "Penis";
}

$conn -> close();