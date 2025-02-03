<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <link href="styling.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
        <h1>Hasil Perhitungan Kalkulator Online</h1>
        <?php
        $number1 = $_GET["number1"];
        $operator = $_GET["operator"];
        $number2 = $_GET["number2"];

        if ($operator == '+'){
            $hasil = $number1 + $number2;
        }else if($operator == '-'){
            $hasil = $number1 - $number2;
        }else if($operator == ':'){
            $hasil = $number1 / $number2;
        }else if($operator == 'x'){
            $hasil = $number1 * $number2;
        }else if ($operator == '^'){
            $hasil = $number1 ** $number2;
        }else if ($operator == '%'){
            $hasil = $number1 % $number2;
        }
        echo $number1 . $operator . $number2 . '=' . $hasil;
        ?>
        <a href="awalan.php">Balik Hitung lagi</a>
        <a type="button" onclick="return window.print();">Cetak</a>
    </form>
</body>
</html>