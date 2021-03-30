<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!-- Form untuk mendapat inputan yang akan ditampilkan di file lain -->
<form method="POST" action="hasilkirim.php">
    <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
            <td witdh="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <!-- Button untuk submit dan reset inputan  -->
            <td colspan="2" align="center">
                <input type="submit" name="btnLogin" value="Kirim">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>
</body>
</html>