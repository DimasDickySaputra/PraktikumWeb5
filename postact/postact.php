<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <!-- Form untuk mendapat nilai input yang akan ditampilkan di file lain -->
    <form method="POST" action="postactkondisi.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <!-- Button untuk mensubmit dan mereset inputan -->
                <td>
                    <input type="submit" name="btnlogin" value="Login">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>