<?php
$BOR = 1; 
  echo "<table ";
  echo "border=";
  echo $BOR; 
  echo ">";
  echo "<tr><th>ARGUMENT</th><th>VALEUR</th></tr>";
  echo "<tr><td>NOM</td><td>";
  echo $_GET['nom'];
  echo "</td></tr>";
  echo "<tr><td>PRENOM</td><td>";
  echo $_GET['prenom'];
  echo "</td></tr>";
  echo "<tr><td>EMAIL</td><td>";
  echo $_GET['email'];
  echo "</td></tr>";
  echo "<tr><td>PRECISION</td><td>";
  echo $_GET['precisions'];
  echo "</td></tr>";
  echo "<tr><td>PRECISION2</td><td>";
  echo $_GET['precisions2'];
  echo "</td></tr>";
  echo "</table>";
?>