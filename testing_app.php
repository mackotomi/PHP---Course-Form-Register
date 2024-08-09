<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Collect and sanitize form data
 $meno = htmlspecialchars(trim($_POST['krstne_meno']));
 $priezvisko = htmlspecialchars(trim($_POST['priezvisko']));
 $telefonne_cislo = htmlspecialchars(trim($_POST['telefonne_cislo']));
 $email = htmlspecialchars(trim($_POST['email']));
 $operacny_system = htmlspecialchars(trim($_POST['os']));
 $kurz = htmlspecialchars(trim($_POST['courses']));

 // Store the information in array using associated key, this will allow to loop for each and echo to ul list later.
 $user_information = [
  'Vase meno:' => $meno,
  'Vase priezvisko:' => $priezvisko,
  'Vase telefonne cislo:' => $telefonne_cislo,
  'Vasa emailova adresa:' => $email,
  'Vas operacny system:' => $operacny_system,
  'Vybrany kurz:' => $kurz,
 ];
}

print_r($user_information);

?>