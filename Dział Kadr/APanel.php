<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Panel Admina</title>
    <link rel="stylesheet" href="assets/css/template.css" />
    <link rel="stylesheet" href="assets/css/panel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<style type="text/css">
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
        <div>
            <h2 id="board-head">Tablica</h2>
            <div class="board for-flex">
                <div class="icon right-border">
                    <i class="fa-regular fa-calendar-days"></i>
                </div>
                <div class="board-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum libero quis ultricies
                        sagittis. Etiam rutrum enim enim, at hendrerit mi accumsan at. Phasellus nec feugiat turpis,
                        ultrices sodales mi. Praesent at rhoncus tellus, vitae tempus lectus. Pellentesque habitant
                        morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    </p>
                </div>
            </div>
        </div>
        <div class="number for-flex">
            <div class="right-border" id="number-head">
                <h2 id="number-head right-border">Kadry</h2>
            </div>
            <div class="workers-number border">
                <p class="bolder-paragraph">Liczba pracowników</p>
                <p>
                    <?php
                        $base = mysqli_connect("localhost", "root", "",     "dzial_kadr");

                        $result = mysqli_query($base, "SELECT COUNT(Id),     Czy_zatrudniony FROM Pracownicy WHERE Czy_zatrudniony = 'Tak'
                        GROUP BY Czy_zatrudniony");

                        $count = mysqli_fetch_array($result);
                        echo $count[0];
                        
                        mysqli_close($base);
                    ?>
                </p>
            </div>
            <div class="free-slots-number border">
                <p class="bolder-paragraph">Wolnych miejsc pracy</p>
                <p>
                    <?php
                        $free_space = 100 - $count[0];
                        echo $free_space;
                    ?>
                </p>
            </div>
            <div class="busy-slots border">
                <p class="bolder-paragraph">Liczba zajętych miejsc</p>
                <p>
                    <?php
                        echo $count[0]."/100";
                    ?>
                </p>
            </div>
        </div>
        <div class="bottom-class-temporary">
            <div class="boxes">
                <div class="temporary-blank-left">
                    <h2 id="links-head">Potrzebne linki</h2>
                    <div class="left-link"><a href="#">Dodaj pracownika</a></div>
                    <div class="left-link"><a href="#">Dodaj aktualności</a></div>
                    <div class="left-link"><a href="#">Dodaj kandydata</a></div>
                    <div class="left-link"><a href="#">Lista obecności</a></div>
                    <div class="left-link"><a href="#">Lista płac pracowników</a></div>
                </div>
                <div class="temporary-blank-right">
                    <h2 id="messages-head">Aktualności</h2>
                    <div></div>
                </div>
            </div>
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
                <a href="APanel.php" style="color: #3056ff; background: #fff; border: 2px solid #3056ff"> Panel główny </a>
            </div>
            <div class="item"><a href="#">Kalendarz</a></div>
            <div class="item">
                <a class="sub-btn">Pracownicy<i class="fa fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="Pracownicy.php" class="sub-item"> Lista pracowników </a>
                    <a href="Kandydaci.php" class="sub-item"> Lista kandydatów </a>
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
    <footer>
        <div>
            <p>&copy; 2022 by Maciej Nowak</p>
        </div>
    </footer>
    <script lang="javascript" src="assets/js/logout.js"></script>
    <script lang="javascript" src="assets/js/boczne_menu.js"></script>
</body>

</html>
