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
<table border="1" style="text-align: center">
    <caption>Perulangan & Percabangan</caption>
    <tr>
        <th>Bilangan ganjil</th>
        <th>Bilangan genap</th>
    </tr>

    <?php
    $batas = 10;

    for ($i = 1; $i <= $batas; $i += 2) {
        $ganjil = $i; // Bilangan ganjil
        $genap = $i + 1; // Bilangan genap

        // Pastikan bilangan genap tidak melebihi batas
        if ($genap > $batas) {
            $genap = ''; 
        }

        echo "<tr>";
        echo "<td>$ganjil</td>"; 
        echo "<td>$genap</td>"; 
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tahun Kabisat</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">Tahun Kabisat (2000 - 2050)</h1>

<?php
function isKabisat($year) {
    return ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
}

echo "<table>";
echo "<tr><th>Tahun Kabisat</th></tr>";

for ($year = 2000; $year <= 2050; $year++) {
    if (isKabisat($year)) {
        echo "<tr><td>{$year}</td></tr>";
    }
}

echo "</table>";
?>

</body>
</html>

<?php
$data = array ("Ropip","Athaya","Vino","Rajen","Rudi");
$nilai = array(96,93,96,95,98);
echo "Menampilkan Nilai Array<br>";
echo "Data: $data[0] <br>";
echo "Nilai: $nilai[0]";
echo "<br><br><br>";
echo "Menampilkan Nilai Array<br>";
echo "Data: $data[1] <br>";
echo "Nilai: $nilai[1]";
echo "<br><br>6<br>";
echo "Menampilkan Nilai Array<br>";
echo "Data: $data[2] <br>";
echo "Nilai: $nilai[2]";
echo "<br><br><br>";
echo "Menampilkan Nilai Array<br>";
echo "Data: $data[3] <br>";
echo "Nilai: $nilai[3]";
echo "<br><br><br>";
echo "Menampilkan Nilai Array<br>";
echo "Data: $data[4] <br>";
echo "Nilai: $nilai[4]";
echo "<br><br><br>";

?>

<?php
$data = array("Ropip", "Athaya", "Vino", "Rajen", "Rudi");
$nilai = array(96, 93, 96, 95, 98);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Nilai Siswa</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $data[$i]; ?></td>
                <td><?php echo $nilai[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
date_default_timezone_set("Asia/Jakarta");
$tanggal  = date ("d-M-Y");
echo "Sekarang Tanggal : $tanggal<br>";
$waktu = date ("H:i:s");
echo "Sekarang Waktu : $waktu<br>";
$kombinasi = date ("1,H:i:s,d-M-Y");
echo "Hasil Kombinasi : $kombinasi";
echo "<br>"
?>


<?php
$data = array(
    "ABDULLAH RUDI ATHAYA",
    "AISYA SAWITRI",
    "ALYSSE ORVINO RAYHAN",
    "AULIA VI RAMADHANI",
    "BIRGITA PASKALINA",
);

for ($i = 0; count($data)>$i;$i++){
    if ($i % 2 == 0) {
        echo "$i Nama : ".$data[$i] . "("
        . strlen($data[$i]). ")". 
            "(" . str_word_count($data[$i])
            . ") <br> dibalik jadi : " .
            strrev($data[$i]) .
            "<br> hurud A diganti O "
            .str_replace("A","O",$data[$i]. "<br>");
    }
}
?>