
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP rpgmgch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Semantic-ui CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css">

</head>
<body>

<h2><a href="index.php">Accueil</a></h2>

<?php
require 'class/Autoloader.php';

Autoloader::register();
Autoloader::autoload(User);
Autoloader::autoload(Client);

require 'users.php';

echo '<table class="ui table">
      <thead><tr>
      <th>Number</th>
      <th>Registration Date</th>
      <th>E-mail address</th>
      </tr></thead><tbody>';
foreach($clients as $client) {
  echo '<tr><td>'.$client->getId().'</td>
      <td>'.$client->getCreatedAt().'</td>
      <td>'.$client->getEmail().'</td>
      </tr>';
}
 echo'</tbody></table>';


?>



</body>
</html>