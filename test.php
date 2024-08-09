<?php

include 'functions.php';

$arrayKeyNames = [
 '1st user is' => 'Michal',
 '2nd user is' => 'Sonya',
 '3rd user is' => 'Thomas',
 '4th user is' => 'Joshua',
 '5th user is' => 'Enyio',
];

printerator($arrayKeyNames);

?>

<? include 'head.php' ?>

<ul>
 <?php foreach ($arrayKeyNames as $key => $value) {
  echo '<li>' . ' ' . $key . ' ' . $value .'</li>';
 }
 ?>
</ul>


<? include 'foot.php' ?>