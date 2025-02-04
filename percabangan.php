<?php 

$nilai = 80;

if ($nilai > 90) {
    $predikat = "Lolos";
} elseif ($nilai > 80) {
    $predikat = "Tidak Lolos";
} elseif ($nilai > 70) {
    $predikat = "Cukup"; 
} elseif ($nilai > 60) {
    $predikat = "Kurang"; 
} elseif ($nilai > 50) {
    $predikat = "Sangat Kurang"; 
} else {
    $predikat = "Mengecewakan"; 
}

echo $predikat . "<br>"; 


$waktu = true;
$uang = true;
$tenaga = true;

if ($waktu == false && $uang == false && $tenaga == false) {
    $kondisi = "Tidak jadi liburan";
} elseif ($waktu == false && $uang == true && $tenaga == false) {
    $kondisi = "Jajan saja";
} elseif ($waktu == true && $uang == false && $tenaga == false) {
    $kondisi = "Tidur saja";
} elseif ($waktu == false && $uang == false && $tenaga == true) {
    $kondisi = "Kerja saja";
} elseif ($waktu == true && $uang == true && $tenaga == false) {
    $kondisi = "Gasken Liburan";
} elseif ($waktu == false && $uang == true && $tenaga == true) {
    $kondisi = "Ngegym saja";
} elseif ($waktu == true && $uang == false && $tenaga == true) {
    $kondisi = "Gas Olahraga";
} elseif ($waktu == true && $uang == true && $tenaga == true) {
    $kondisi = "Shopping & Liburan";
} else {
    $kondisi = "Inputan salah";
}

echo $kondisi;

echo $predikat . "<br>"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <table border=1>
        <caption>Perulangan</caption>
        <tr>
            <th>Percabangan & Perulangan</th>
        </tr>
        <tr>
            <?php
            for($no = 1;$no <= 10;$no++){
                echo "<tr><td>$no</td></tr>";
            }
            ?>
        </tr>
    </table>
</body>
</html>
