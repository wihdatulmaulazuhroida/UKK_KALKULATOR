<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
        <h1>Hasil perhitungan kalkulator Mini</h1>
        <?php
        $angka1 = $_GET["angka1"];
        $operator = $_GET["operator"];
        $angka2 = $_GET["angka2"];

        if($operator == '+'){
            $hasil = $angka1 + $angka2;
        } else if($operator == '-'){
            $hasil = $angka1 - $angka2;
        } else if($operator == ':'){
            $hasil = $angka1 / $angka2;
        } else if($operator == 'x'){
            $hasil = $angka1 * $angka2;
        } else if($operator == '^'){
            $hasil = $angka1 ** $angka2;
        } else if($operator == '%'){
            $hasil = $angka1 % $angka2;
        }
        echo $angka1 . $operator . $angka2 . '=' . $hasil;
        ?>
        <a href="awal.php">Balik Hitung</a>
        <a type="button" onclick="return window.print();">Print</a>
    </form>
</body>
</html>