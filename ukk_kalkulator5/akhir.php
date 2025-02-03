<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link href="tengah.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
        <h1>Hasil Hitung</h1>
        <?php
        $number1 = $_GET["number1"];
        $operasi = $_GET["operasi"];
        $number2 = $_GET["number2"];

        if ($operasi == "+"){
            $hasil = $number1 + $number2;
        } else if ($operasi == "-"){
            $hasil = $number1 - $number2;
        } else if ($operasi == ":"){
            $hasil = $number1 / $number2;
        } else if ($operasi == "x"){
            $hasil = $number1 * $number2;
        } else if ($operasi == "^"){
            $hasil = $number1 ** $number2;
        } else if ($operasi == "%"){
            $hasil = $number1 % $number2;
        }

        echo $number1 . $operasi . $number2 . '=' . $hasil;
        ?>
        <a href="awal.php">Hitung lagi</a>
        <a type="button" onclick="return window.print();">Print</a>
    </form>
</body>
</html>