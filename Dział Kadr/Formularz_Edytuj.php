<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/template.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj pracownika</title>
</head>
<style type="text/css">
    input[type="submit"], input[type="date"]{
        width: 100%;
    }
</style>
<body>
    <?php
        $base=mysqli_connect("localhost","root","","dzial_kadr");
        $ID = $_GET['Id'];

        $sql=mysqli_fetch_assoc(mysqli_query($base,"SELECT * FROM pracownicy where Id = $ID"));
    ?>
    <form method="POST" action="Edytuj.php">
        <center>
            <table>
                <tr>
                    <td><h2>Dane pracownika:</h2></td>
                    <td><input type="hidden" name="id" value="<?php echo $ID; ?>"></td>
                </tr>
                <tr>
                    <td>Imię:</td>
                    <td><input type="text" name="imie" value="<?php echo $sql["Imie"] ?>"></td>
                </tr>
                <tr>
                    <td>Nazwisko:</td>
                    <td><input type="text" name="nazwisko" value="<?php echo $sql["Nazwisko"] ?>"></td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td><input ype="text" name="nr_telefonu" value="<?php echo $sql["Nr_telefonu"] ?>"></td>
                </tr>
                <tr>
                    <td>Data zatrudnienia:</td>
                    <td><input type="date" name="data_zatrudnienia" value="<?php echo $sql["Data_zatrudnienia"] ?>"></td>
                </tr>
                <tr>
                    <td>Stanowisko:</td>
                    <td><input type="text" name="stanowisko" value="<?php echo $sql["Stanowisko"] ?>"></td>
                </tr>
                <tr>
                    <td>Dzial:</td>
                    <td><input type="text" name="dzial" value="<?php echo $sql["Dzial"] ?>"></td>
                </tr>
                <tr>
                    <td>Pensja:</td>
                    <td><input type="text" name="pensja" value="<?php echo $sql["Pensja"] ?>"></td>
                </tr>
                <tr>
                    <td>Premia:</td>
                    <td><input type="text" name="premia" value="<?php echo $sql["Premia"] ?>"></td>
                </tr>
                <tr>
                    <td>Prowizje:</td>
                    <td><input type="text" name="prowizje" value="<?php echo $sql["Prowizje"] ?>"></td>
                </tr>
                <tr>
                    <td>Ubezpieczenie:</td>
                    <td><input type="text" name="ubezpieczenie" value="<?php echo $sql["Ubezpieczenie"] ?>"></td>
                </tr>
                <tr>
                    <td>Dodatek stażowy:</td>
                    <td><input type="text" name="dodatek_stażowy" value="<?php echo $sql["Dodatek_stazowy"] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="submit" value="Wyślij!">
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>