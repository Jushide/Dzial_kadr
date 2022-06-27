<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $base=mysqli_connect("localhost","root","","dzial_kadr");

    $ID = $_GET['Id'];

    $sql="UPDATE pracownicy SET Czy_zatrudniony = 'Nie', Czy_kandydat = 'Nie'  WHERE Id=$ID";

    $q=mysqli_query($base, $sql);

    mysqli_close($base);
?>
<script language="JavaScript">
    window.onload = setTimeout(function() {
        window.location.href = 'Pracownicy.php';
    }, 1000);
</script>
</body>
</html>
