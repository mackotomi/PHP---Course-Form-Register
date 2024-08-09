<?php
// Success message variable
$registration_successful_msg = 'Gratulujeme, registracia prebehla uspesne. Kopia bola zaslana na vas email. Najblizsie dni vas budeme kontaktovat s dalsimi pokynmi, prajeme pekny den a tesime s vami.';
?>

<?php include 'head.php'; ?>

 <!-- PHP outputs HTML content -->
 <h1><?= $registration_successful_msg; ?></h1>

<!--Wait for 3 seconds before redirecting -->
<script>
    // JavaScript code to handle redirection
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 3000); // Redirect after 3 seconds
</script>

<?php include 'foot.php'; ?>