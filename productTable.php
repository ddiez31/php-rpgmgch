
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
Autoloader::autoload(Product);
Autoloader::autoload(Vegetable);
Autoloader::autoload(Cloth);

require 'products.php';

echo '<table class="ui table">
      <thead><tr>
      <th></th>
      <th>Number</th>
      <th>Name</th>
      <th>Price</th>
      <th>Productor</th>
      <th>Expired at</th>
      </tr></thead>
      <tbody>';
foreach($vegetables as $vegetable) {
  echo '<td class="collapsing"></td>
      <td>'.$vegetable->getId().'</td>
      <td>'.$vegetable->getName().'</td>
      <td>'.$vegetable->getPrice().'</td>
      <td>'.$vegetable->getProductorName().'</td>
      <td>'.$vegetable->getExpiresAt().'</td>
      </tr>';
}
 echo'</tbody></table>';


?>



</body>
</html>