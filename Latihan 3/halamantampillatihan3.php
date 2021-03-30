<?php 
// Menampilkan teks
echo "<table border=1 align=center>";
echo "<center><h1>Biodata Saya</h1></center>";
echo "<tr><td>Nama : </td><td><center>".$_POST['inputnama']."</center></td></tr>";
echo "<tr><td>TTL : </td><td><center>".$_POST['inputttl']."</center></td></tr>";
echo "<tr><td>alamat : </td><td><center>".$_POST['inputalamat']."</center></td></tr>";
echo "<tr><td>Jenis Kelamin : </td><td><center>".$_POST['inputjk']."</center></td></tr>";
echo "<tr><td>Agama : </td><td><center>".$_POST['inputagama']."</center></td></tr>";
echo "<tr><td>hobi : </td><td><center>".$_POST['inputhobi']."</center></td></tr>";
echo "<tr><td>cita cita : </td><td><center>".$_POST['inputcita']."</center></td></tr>";
echo "</table>";
echo "<center>Anda mengisi biodata ini pada :";
date_default_timezone_set ('Asia/Jakarta');
echo date ('d-M-Y H:i:s');
?>