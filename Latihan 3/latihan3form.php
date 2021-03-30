<html>
	<head>
    <title>Form Biodata latihan3</title>
    <style type="text/css">
    body {
    	background-image: url("keyboard.jpg");
    }    	
    </style>
    </head>
    <body>
    <!-- Form untuk mendapat input yang akan ditampilkan di file lain -->
        <form method="POST" action="halamantampillatihan3.php">
            <center><h1>BIODATA</h1></center>
            <center><p>Silahkan Isi Biodata </p></center>
            <table width="400"  cellpadding="7" cellspacing="7" align="center">
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="inputnama" placeholder="masukkan nama"></td>
                </tr>
                <tr>
                    <td>TTL : </td>
                    <td><input type="text" name="inputttl" placeholder="Masukkan TTL anda"></td>
                </tr>
                <tr>
                    <td>alamat : </td>
                    <td><input type="text" name="inputalamat" placeholder="alamat anda"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :</td>
                    <td> <input type="radio" name="inputjk" value="Laki - Laki"> Laki - laki
                    <br>
                    <input type="radio" name="inputjk" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama : </td>
                    <td> <select name="inputagama">
                        <option value="islam">Islam</option>
                        <option value="protestan">Protestan</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">konghoucu</option>
                    </select>
                	</td>
                </tr>
                <tr>
                    <td>Hobi : </td>
                    <td><input type="text" name="inputhobi" placeholder="masukkan hobi anda"></td>
                </tr>
                <tr>
                    <td>cita-cita : </td>
                    <td><input type="text" name="inputcita" placeholder="masukkan cita cita anda"></td>
                </tr>
            </table>
                <!-- Button untuk mensubmit dan mengreset inputan -->
                <center>
                <input type="submit" name="btnlogin" value="Submit">
                </center>
        </form>
    </body>
</html>