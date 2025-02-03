<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Website Version</title>
    <link href="bentuk.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="hasilnya.php">
        <h2>Kalkulator website</h2>
        <input type="number" name="number1">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>x</option>
            <option>:</option>
       </select>
       <input type="number" name="number2">
       <button type="submit">Hitung</button>
    </form>
</body>
</html>