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
<div class='kontrolna_sprava'>
 <h1>
 Skontrolujte si prosím nižšie vami uvedené údaje. Ak je všetko v poriadku a chcete sa naozaj zaregistrovať, kliknite na tlačidlo „Registrovať“. Ak potrebujete upraviť údaje, kliknite na tlačidlo „Opraviť“.

 Ak ste sa omylom zaregistrovali so zlými údajmi, neváhajte nám napísať na e-mail info@betakurzy.sk a radi vám pomôžeme.
 </h1>
</div>
<div class='user_check'>

</div>

<form action="register_confirmed.php" method='post'>
<button type='submit'>Registrovať</button> 
<button type='submit' formaction="index.php">Opraviť</button>
</form>

<?php include 'foot.php'; ?>