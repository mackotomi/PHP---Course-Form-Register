<?php
$test0 = null; // Gives False
$test1 = ""; // Gives False
$test2 = '01'; // Gives True
$test3 = 01; // Gives True

// echoing the variables to check what prints out

echo $test0 . '<br>'; // Gives False
echo $test1 . '<br>'; // Gives False
echo $test2 . '<br>'; // Gives True
echo $test3 . '<br>'; // Gives True

echo '<br>';

// Gives False because $test0 is empty

if ($test0){
 echo 'true';
} else {
 echo 'false';
}

echo '<br>';

// Gives False because $test1 is empty

if ($test1){
 echo 'true';
} else {
 echo 'false';
}

echo '<br>';

// Gives True because $test2 is not empty

if ($test2){
 echo 'true';
} else {
 echo 'false';
}

echo '<br>';

// Gives True because $test3 is not empty
if ($test3){
 echo 'true';
} else {
 echo 'false';
}

?>

<?php include 'head.php'; ?>
<?php include 'foot.php'; ?>
