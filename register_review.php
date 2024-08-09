<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Collect and sanitize form data
 $meno = htmlspecialchars(trim($_POST['krstne_meno']));
 $priezvisko = htmlspecialchars(trim($_POST['priezvisko']));
 $telefonne_cislo = htmlspecialchars(trim($_POST['telefonne_cislo']));
 $email = htmlspecialchars(trim($_POST['email']));
 $operacny_system = htmlspecialchars(trim($_POST['os']));
 $kurz = htmlspecialchars(trim($_POST['courses']));
}

echo 'Suhrn registracie';
echo '<h1>';
echo "Vase meno: " . $meno . "<br>";
echo "Vase priezvisko: " . $priezvisko . "<br>";
echo "Vase telefonne cislo: " . $telefonne_cislo . "<br>";
echo "Vasa emailova adresa: " . $email . "<br>";
echo "Vas operacny system: " . $operacny_system . "<br>";
echo "Vybrany kurz: " . $kurz . "<br>";
echo '</h1>';

?>



<?php include 'head.php'; ?>

<h1>
 Skontrolujte si prosim vase udaje a v pripade, ze je vsetko v poriadku a naozaj sa chete registrovat, pouzite tlacitko Registrovat.
 V opacnom pripade sa mozete vratit spat a formular opravit cez tlaciko opravit.
</h1>

<form action="register_confirmed.php" method='post'>
<button type='submit'>Registrovat</button> 
<button type='submit' formaction="index.php">Opravit udaje</button>
</form>

<?php include 'foot.php'; ?>