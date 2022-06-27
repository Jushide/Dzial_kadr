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
$data_zatrudnienia=$_POST['data_zatrudnienia'];
$stanowisko=$_POST['stanowisko'];
$dzial=$_POST['dzial'];
$pensja=$_POST['pensja'];
$premia=$_POST['premia'];
$prowizje=$_POST['prowizje'];
$ubezpieczenie=$_POST['ubezpieczenie'];
$dodatek_stażowy=$_POST['dodatek_stażowy'];
$ID = $_POST['id'];

$base=mysqli_connect("localhost","root","","dzial_kadr");

if($base==false)
        {
        	echo "Blad polaczenia z serwerem";
        }
        else
        {
                $edit = "UPDATE Pracownicy SET Imie='$imie',Nazwisko='$nazwisko', Nr_telefonu='$nr_telefonu',Data_zatrudnienia='$data_zatrudnienia',Stanowisko='$stanowisko',Dzial='$dzial',Pensja=$pensja,Premia=$premia,Prowizje=$prowizje,Ubezpieczenie='$ubezpieczenie',Dodatek_stazowy='$dodatek_stażowy', Czy_zatrudniony = 'Tak', Czy_kandydat='Nie' WHERE Id=$ID";

                $result = mysqli_query($base, $edit);

                if($result == true)
                {
                        echo "Zaktualizowano osobę;   <br>";
                        echo $imie . ", " . $nazwisko . ", " . $nr_telefonu . ", " . $data_zatrudnienia . ", " . $stanowisko . ", " . $dzial . ", " . $pensja . ", " . $premia . ", " . $prowizje. ", " . $ubezpieczenie . ", " . $dodatek_stażowy . "<br>";
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
        window.location.href = 'Pracownicy.php';
    }, 3000);
</script>
</body>
</html>