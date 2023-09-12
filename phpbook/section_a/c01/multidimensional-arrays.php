<?php 
$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints',  'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge',  'price' => 4, 'stock' => 97,],
    ['name' => 'Chocolate',  'price' => 2, 'stock' => 83,],
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <?php foreach($offers as $offer) : ?>
      <p><?= $offer['name'] ?> - <?= $offer['price'] ?></p>
    <?php endforeach; ?>
  </body>
</html>