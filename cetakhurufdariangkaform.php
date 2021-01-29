<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cetakhurufdariangkaform.php" method="GET">
        <label for="angka">Masukan angka:</label>
        <input type="number" name="angka" id="angka">
        <input type="submit" name="proses" value="cek"><BR><BR>
    </form>
    <?php
    if (isset($_GET['proses'])) {
        include "cetakhurufdariangka.php";
        $angka = $_GET['angka'];
        $formatangka = number_format($angka, 0, ",", ",");
        $tertulisangka = ucwords(tertulis($angka));
        echo "Angka Anda: $formatangka <br><br>";
        echo "Tertulis: <br><br>$tertulisangka";
    }
    ?>
</body>

</html>