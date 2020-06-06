<!DOCTYPE html>
<?php include_once 'pregled.php' ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autori i Knjige</title>
</head>
<body>
  <h1>Autori i Knjige</h1>
  
  <a href="brisanje.php">Brisanje</a>

  <br><br>
  <hr>
  <table>
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Naslov</th>
      <th>Izdavac</th>
      <th>Godina</th>
      <th></th>
      <th></th>
    </tr>
    <?php if (mysqli_num_rows($query)){
            while ($pogled = mysqli_fetch_assoc($query)){
              echo "<tr>\n";
              echo "<td>".$pogled['id']."</td>";
              echo "<td>".$pogled['ime']." ".$pogled['prezime']."</td>";
              echo "<td>".$pogled['naslov']."</td>";
              echo "<td>".$pogled['izdavac']."</td>";
              echo "<td>".$pogled['godina']."</td>";
              echo "<td>Izmjena</td>";
              echo "<td><a href = \"brisanje.php\">Uklanjanje</a></td>";

              echo "</tr>\n";
            }
          }
    ?>
  </table>
  
  <h3><a href="dodavanje.html">Dodavanje autora</a></h3>
  <h3><a href="dodavanjeknjiga.php">Dodavanje knjiga</a></h3>
</body>
</html>