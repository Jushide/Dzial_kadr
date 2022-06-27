<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/template.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj do bazy danych</title>
</head>
<style type="text/css">
    input[type="submit"], input[type="date"]{
        width: 100%;
    }
</style>
<body>
    <form method="POST" action="Dodaj.php">
        <center>
            <table>
                <tr>
                    <td><h2>Dane pracownika:</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Imię:</td>
                    <td><input type="text" name="imie"></td>
                </tr>
                <tr>
                    <td>Nazwisko:</td>
                    <td><input type="text" name="nazwisko"></td>
                </tr>
                <tr>
                    <td>Numer telefonu:</td>
                    <td><input ype="text" name="nr_telefonu"></td>
                </tr>
                <tr>
                    <td>Data zatrudnienia:</td>
                    <td><input type="date" name="data_zatrudnienia"></td>
                </tr>
                <tr>
                    <td>Stanowisko:</td>
                    <td><input type="text" name="stanowisko"></td>
                </tr>
                <tr>
                    <td>Dzial:</td>
                    <td><input type="text" name="dzial"></td>
                </tr>
                <tr>
                    <td>Pensja:</td>
                    <td><input type="text" name="pensja"></td>
                </tr>
                <tr>
                    <td>Premia:</td>
                    <td><input type="text" name="premia"></td>
                </tr>
                <tr>
                    <td>Prowizje:</td>
                    <td><input type="text" name="prowizje"></td>
                </tr>
                <tr>
                    <td>Ubezpieczenie:</td>
                    <td><input type="text" name="ubezpieczenie"></td>
                </tr>
                <tr>
                    <td>Dodatek stażowy:</td>
                    <td><input type="text" name="dodatek_stażowy"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="submit" name="wyslij" value="Wyślij!">
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>