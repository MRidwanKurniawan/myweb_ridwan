<h2> Menghitung Volume Bola </h2>
<hr>
<?php
 $jari = $_POST['jarijari'];
 if ($_POST['jarijari']==""){
  echo"Masukan angka dulu...";
  echo"<form action='volume-bola.html'>
    <input type='submit' value='Back'>
   </form>";
 } else {
  $phi = $_POST['phi'];
 $hitung = (4/3*3.14)*($jari*$jari*$jari);
  echo"Rumus = (1/3*$phi)*($jari*$jari) <br>";
  echo"Jari-jari = $jari <br><br>";
  echo"Volume Kerucutnya = $hitung cm";
  echo"<form action='index.php'>
    <input type='submit' value='Back'>
   </form>";
 }
?>