<?php include 'head.php'; ?>

<h1>
Registracia na kurz.
</h1>
<h3>Vitajte na stranke kde sa mozete zaregistrovat na kurz.</h3>
<p>
 Nizsie prosim vyplnte formular, z ktoreho si pozorne vyberte vami pozadovany kurz.
 Je potrebne vyplnit vsetky udaje pre jeho odoslanie. Prosim, nezabudnite vybrat spravny Operacny System aky pouzivate na vasom PC.
</p>
 
<form action="register_review.php" method="post" id='course_register'>

 <!-- First Name -->
 <label for="krstne_meno">Krstne meno:</label><br>
 <input type="text" id="krstne_meno" name="krstne_meno" placeholder='Krstne meno' required><br>

 <!-- Second Name -->
 <label for="priezvisko">Priezvisko:</label><br>
 <input type="text" id="priezvisko" name="priezvisko" placeholder='Priezvisko' required><br>

 <!-- Phone Number -->
 <label for="telefonne_cislo">Telefone cislo:</label><br>
 <input type="text" id="telefonne_cislo" name="telefonne_cislo" placeholder='Telefonne cislo' required><br>

 <!-- Email Adress -->
 <label for="email">Emailova adresa</label><br>
 <input type="email" id="email" name="email" placeholder='Emailova adresa' required><br>

 <!-- Operacny system -->
 <label for="os">Aky operacny system pouzivate?</label><br>
  <select id="os" name="os" multiple size="3" required>
   <option value="windows">WindowsOS</option>
   <option value="apple">MacOS</option>
   <option value="linux">LinuxOS</option>
  </select><br>

 <!-- Kurz -->
 <label for="courses">Zvolte si kurz:</label><br>
  <select id="courses" name="courses" multiple size="5" required>
   <option value="Adobe Photoshop Zaklady">Adobe Photoshop Zaklady</option>
   <option value="Adobe Illustrator Zaklady">Adobe Illustrator Zaklady</option>
   <option value="Zaklady Kreslenia">Zaklady Kreslenia</option>
   <option value="Blender">Blender</option>
   <option value="Pixologic Zbrush">Pixologic Zbrush</option>
  </select><br><br>
  <input type="submit" value="Nezavazne sa registrovat">
</form>

<?php include 'foot.php'; ?>