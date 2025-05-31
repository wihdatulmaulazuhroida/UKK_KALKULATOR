<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HASIL</title>
    <link href="tengah.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
        <h1>HASIL</h1>
        <?php
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $operator = $_GET['operator'];

        if ($number1 == null && $number2 == null) {
            echo 'mohon masukkan angka.';
        }
        elseif ($operator == "+") {
            $hasil = $number1 + $number2;
            echo $number1 . $operator . $number2 . '=' . $hasil;
        } elseif ($operator == "-") {
            $hasil = $number1 - $number2;
            echo $number1 . $operator . $number2 . '=' . $hasil;
        } elseif ($operator == 'x') {
            $hasil = $number1 * $number2;
            echo $number1 . $operator . $number2 . '='. $hasil;
        } elseif ($operator == ':') {
            if ($number1 == 0 || $number2 == 0) {
                echo 'Tidak bisa dibagi dengan nol. hitung lagi.';
            }else{
                $hasil = $number1 / $number2;
                echo $number1 . $operator . $number2 . '='. $hasil;
            }
        } 

        ?>
        <a href="awal.php">KEMBALI</a>
        <a type="button" onclick="return window.print">PRINT</a>
    </form>
</body>
</html>