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
        $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $nr_telefonu=$_POST['nr_telefonu'];
        $stanowisko=$_POST['stanowisko'];
        $dzial=$_POST['dzial'];

        $data = date("Y-m-d");

        $base = mysqli_connect("localhost","root","","dzial_kadr");

        if($base==false)
        {
        	echo "Blad polaczenia z serwerem";
        }
        else
        {
                $add = "INSERT INTO Pracownicy (Imie, Nazwisko, Nr_telefonu, Data_zatrudnienia, Stanowisko, Dzial, Czy_zatrudniony, Czy_kandydat)VALUES('$imie','$nazwisko','$nr_telefonu','$data','$stanowisko','$dzial', 'Nie', 'Tak')";

                $result = mysqli_query($base, $add);

                if($result == true)
                {
                        echo "Dziękujemy za rejestrację kandydata";
                }
                else
                {
                        echo "Blad wykonywania SQL:  <br>";
                        $err = mysqli_error($base);
                        echo $err . "<br>";
                }


                mysqli_close($base);
        }
    ?>
    <script language="JavaScript">
    window.onload = setTimeout(function() {
        window.location.href = 'Kandydat.php';
    }, 2000);
</script>
</body>
</html>