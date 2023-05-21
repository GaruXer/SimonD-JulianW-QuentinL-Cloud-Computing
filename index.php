<?php
  $serverName = "projetcloud-wdl-server.mysql.database.azure.com";
  $connectionOptions = array(
      "Database" => "projetcloud-wdl-database",
      "Uid" => "lmgnzkgwif",
      "PWD" => "0BV63Q3I6X140DXG$"
  );

  // establishes the connection
  $conn = sqlsrv_connect($serverName, $connectionOptions);
?>

<form method="post" action="">
  <label for="nom">Nom:</label>
  <input type="text" id="nom" name="nom"><br><br>

  <label for="prenom">Prénom:</label>
  <input type="prenom" id="prenom" name="prenom"><br><br>

  <label for="texte">Texte:</label>
  <textarea id="texte" name="texte"></textarea><br><br>

  <input type="submit" value="Envoyer">
</form>

