<?php

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "projetcloud-wdl-server.mysql.database.azure.com", "lmgnzkgwif", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);

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