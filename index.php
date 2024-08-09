<?php include 'head.php'; ?>

<div class='course_form_registration_container'>
  <div class='form_heading'>
    <h1>Registracny formular.</h1>
    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#5f6368"><path d="M80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18q30 0 58.5 3t55.5 9l-70 70q-11-2-21.5-2H400q-71 0-127.5 17T180-306q-9 5-14.5 14t-5.5 20v32h250l80 80H80Zm542 16L484-282l56-56 82 82 202-202 56 56-258 258ZM400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm10 240Zm-10-320q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Z"/></svg>
  </div>

  <p>
  Nizsie prosim vyplnte formular s vasimi osobnymi udajmi. Pozorne si vyberte kurz o ktory sa zaujimate.
  Nezabudnite vybrat spravny Operacny System aky pouzivate na vasom PC. Je potrebne vyplnit vsetky udaje. 
  </p>
 
  <form action="register_review.php" method="post" class='course_register'>

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
  <label for="os">Aky operacny system pouzivate?</label>
    <ul>
      <li>
        <input type="radio" id="windows" name="os" value="windows">
        <label for="windows">WindowsOS</label>
      </li>
      <li>
        <input type="radio" id="apple" name="os" value="apple">
        <label for="apple">MacOS</label>
      </li>
      <li>
        <input type="radio" id="linux" name="os" value="linux">
        <label for="linux">LinuxOS</label>
      </li>
    </ul>
  <br>
  <!-- Kurz -->
  <label for="courses">Zvolte si kurz:</label>
  <ul>
    <li>
      <input type="radio" id="photoshop" name="courses" value="Adobe Photoshop Zaklady">
      <label for="photoshop">Adobe Photoshop Zaklady</label>
    </li>
    <li>
      <input type="radio" id="illustrator" name="courses" value="Adobe Illustrator Zaklady">
      <label for="illustrator">Adobe Illustrator Zaklady</label>
    </li>
    <li>
      <input type="radio" id="kreslenie" name="courses" value="Zaklady Kreslenia">
      <label for="kreslenie">Zaklady Kreslenia</label>
    </li>
    <li>
      <input type="radio" id="blender" name="courses" value="Blender">
      <label for="blender">Blender</label>
    </li>
    <li>
      <input type="radio" id="zbrush" name="courses" value="Pixologic Zbrush">
      <label for="zbrush">Pixologic Zbrush</label>
    </li>
  </ul><br><br>
    <input class="btn" type="submit" value="Overenie udajov">
  </form>
</div>

<?php include 'foot.php'; ?>