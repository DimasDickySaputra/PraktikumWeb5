<?php 
// Perintah untuk menyeleksi variable cookies
if (isset($variable_cookies)) {
    echo 'Variable cookiesnya "$variable_cookies" nilainya adalah'// Menampilkan Variabel Cookies
    .$variable_cookies;
} else {
    echo "Variable cookies belum diterapkan";
}
?>