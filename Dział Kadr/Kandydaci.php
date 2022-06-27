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
    <title>Pracownicy</title>
    <link rel="stylesheet" href="assets/css/template.css" />
    <link rel="stylesheet" href="assets/css/workers.css" />
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
</style>

<body>
    <div class="navbar">
        <div class="menu-btn">
            <i class="fas fa-bars" id="open"></i>
        </div>
        <div class="person">
            <h4>admin</h4>
            <img src="images/blank_avatar.jpg" id="avatar" />
        </div>
        <div class="loginout">
            <h4>Wyloguj</h4>
        </div>
    </div>
    <div class="container">
        <h2 id="list-head">Lista kandydatów</h2>
        <div style="overflow-x: auto">
            <table>
                <tr>
                    <th>Numer</th>
                    <th>Imię i nazwisko</th>
                    <th>Nr Telefonu</th>
                    <th>Data zatrudnienia</th>
                    <th>Stanowisko</th>
                    <th>Dział</th>
                    <th>Akcja</th>
                </tr>
                <tr>
                    <th colspan="13">
                        <div class="border"></div>
                    </th>
                </tr>
                <?php
                    $number = 1;
                    while($rows=$result->fetch_assoc())
                    {
                        $ID = $rows['Id'];

                        if($rows['Czy_kandydat']=="Tak"){
                ?>
                <tr>
                    <td><?php echo $number++; ?></td>
                    <td><?php echo "<span class='name'>" . $rows['Imie'] . " " . $rows['Nazwisko'] . "</span>" . "<br> example@gmail.com";?></td>
                    <td><?php echo $rows['Nr_telefonu'];?></td>
                    <td><?php echo $rows['Data_zatrudnienia'];?></td>
                    <td><?php echo $rows['Stanowisko'];?></td>
                    <td><?php echo $rows['Dzial'];?></td>
                    <td>
                        <a href="Formularz_Edytuj.php?Id=<?php echo $ID; ?>"><input type="button" value="Edytuj" id="edit" class="button" /></a>
                        <a href="Zwolnij.php?Id=<?php echo $ID; ?>"><input type="button" value="Usuń" id="delete" class="button" /></a>
                    </td>
                </tr>
                <tr>
                    <th colspan="13">
                        <div class="border"></div>
                    </th>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="side-bar" id="side">
        <div class="close-btn">
            <i class="fas fa-times" id="close"></i>
        </div>
        <div class="logo">
            <h2 id="h">h</h2>
            <h2 id="r">r</h2>
        </div>
        <div class="menu">
            <div class="item">
                <a href="APanel.php"> Panel główny </a>
            </div>
            <div class="item">
                <a href="#">Kalendarz</a>
            </div>
            <div class="item">
                <a class="sub-btn">
                    Pracownicy
                    <i class="fa fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="Pracownicy.php" class="sub-item">
                        Lista pracowników
                    </a>
                    <a href="Kandydaci.php" class="sub-item" style="color: #3056ff; background: #fff; border: 2px solid #3056ff"> Lista kandydatów </a>
                    <a href="#" class="sub-item"> Lista obecności </a>
                    <a href="#" class="sub-item"> Wolne etaty </a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn">
                    Zestawienia
                    <i class="fa fa-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="#" class="sub-item sub-btn"> Lista płac pracowników </a>
                    <div class="sub-menu2">
                        <a href="Zst_dzialy.php" class="sub-item"> Według działów </a>
                        <a href="Zst_firmy.php" class="sub-item"> Całej firmy </a>
                    </div>
                    <a href="#" class="sub-item"> Czas zatrudnienia w działach </a>
                    <a href="#" class="sub-item"> Zatrudnienie w działach </a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/logout.js"></script>
    <script src="assets/js/boczne_menu.js"></script>
</body>

</html>
