<?php
$base = mysqli_connect("localhost","root","","dzial_kadr");

if ($base->connect_error) {
    die('Connect Error (' .
    $base->connect_errno . ') '.
    $base->connect_error);
}

$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($base, $sql);
mysqli_close($base);

?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Kandydat</title>
    <link rel="stylesheet" href="assets/css/template.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>
<style type="text/css">
    .close-btn {
        position: absolute;
        top: 0;
        right: 10px;
        font-size: 26px;
        cursor: pointer;
    }

    .person {
        display: flex;
        text-align: center;
        position: absolute;
        right: 125px;
        width: 135px;
        height: 50px;
    }

    .loginout {
        display: flex;
        text-align: center;
        position: absolute;
        right: 10px;
        width: 100px;
        height: 50px;
        cursor: pointer;
    }

    .loginout h4 {
        color: #fff;
        font-size: 20px;
        position: absolute;
        left: 0;
        margin: 10px 0px;
    }
    input[type="submit"], input[type="date"]{
        width: 100%;
    }
</style>

<body>
    <div class="navbar">
        <div class="menu-btn">
            <i class="fas fa-bars" id="open"></i>
        </div>
        <div class="loginout">
            <h4>Zaloguj</h4>
        </div>
    </div>
    <form method="POST" action="Dodaj_kandydata.php">
        <center>
            <table>
                <tr>
                    <td><h2>Dane kandydata:</h2></td>
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
                    <td>Na stanowisko:</td>
                    <td><input type="text" name="stanowisko"></td>
                </tr>
                <tr>
                    <td>Do działu:</td>
                    <td><input type="text" name="dzial"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <input type="submit" name="wyslij" value="Zapisz">
                    </td>
                </tr>
            </form>
        </table>
    </center>
    <script src="assets/js/logout.js"></script>
</body>
</html>
