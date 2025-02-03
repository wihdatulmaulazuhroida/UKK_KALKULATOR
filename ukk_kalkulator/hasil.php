<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalkulator Online</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form>
        <h1>Hasil Perhitungan</h1>
        <?php
            $angka1 = $_GET['angka1'];
            $angka2 = $_GET['angka2'];
            $operator = $_GET['operator'];
            
            if($operator == '+') {
                $hasil = $angka1 + $angka2;
            }else if($operator == '-') {
                $hasil = $angka1 - $angka2;
            }else if($operator == ':') {
                $hasil = $angka1 / $angka2;
            }else if($operator == 'x') {
                $hasil = $angka1 * $angka2;
            }
            echo  $angka1 .  $operator .  $angka2 .  '=' .  $hasil;
        ?>
        <a href="index.php">Kembali</a>
        <a type="button" onclick="return window.print();">Cetak</a>

    </form>
</body>
</html>