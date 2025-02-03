<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalkulator Web</title>
    <link href="bentuk.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
        <h2>Hasil Perhitungan</h2>
        <?php
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $operator = $_GET['operator'];
        
            if($operator =='+'){
                $hasil= $number1 + $number2;
            }else if($operator == '-'){
                $hasil= $number1 - $number2;
            }else if($operator =='x'){
                $hasil= $number1 * $number2;
            }else if($operator == ':'){
                $hasil= $number1 / $number2;
            }
            echo  $number1    . $operator   . $number2 . '=' . $hasil;
        ?>
        <a href="index.php">Klik di sini untuk kembali Menghitung.</a>
        <a type="button" onclick="return window.print();">Cetak</a>
    </form>
</body>
</html>