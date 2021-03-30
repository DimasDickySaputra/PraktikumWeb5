<html>
<head>
    <title>Konversi Tipe</title>
</head>
<body>
    <?php
        $a = 300.4; // Deklarasi Variabel 
        echo $a; // Menampilkan Variabel
        echo "<br>";
        echo "tipe Double : ", doubleval($a), "<br>"; // Menampilkan variabel dalam tipe data Double
        echo "tipe Integer : ", intval($a), "<br>"; // Menampilkan variabel dalam tipe data Integer
        echo "tipe String : ", strval($a), "<br>"; // Menampilkan variabel dalam tipe data String
    ?>
</body>