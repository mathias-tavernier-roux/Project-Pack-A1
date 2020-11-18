<?php
$BOR = 1; 
  echo "<table ";
  echo "border=";
  echo $BOR; 
  echo ">";
  echo "<tr><th>ARGUMENT</th><th>VALEUR</th></tr>";
  echo "<tr><td>NOM</td><td>";
  echo $_POST['nom'];
  echo "</td></tr>";
  echo "<tr><td>PRENOM</td><td>";
  echo $_POST['prenom'];
  echo "</td></tr>";
  echo "<tr><td>EMAIL</td><td>";
  echo $_POST['email'];
  echo "</td></tr>";
  echo "<tr><td>PRECISION</td><td>";
  echo $_POST['precisions'];
  echo "</td></tr>";
  echo "<tr><td>PRECISION2</td><td>";
  echo $_POST['precisions2'];
  echo "</td></tr>";
  echo "</table>";
?>