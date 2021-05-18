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
    $ime1=$_GET['ime1'];
    $ime2=$_GET['ime2'];
    $duzina1=strlen($ime1);
    $duzina2=strlen($ime2);
    //echo $ime1.$ime2;

    function duze_ime(){
        global $ime1,$ime2,$duzina1,$duzina2;

        if($duzina1>$duzina2){
            echo "<p>$ime1</p>";
        }
        elseif($duzina2>$duzina1){
            echo "<p>$ime2</p>";
        }
        else{
            echo "<p>Oba imena imaju istu duzinu</p>";
        }
    }
    duze_ime();

    function vraca_duze_ime(){
        global $ime1,$ime2,$duzina1,$duzina2;

        if($duzina1>$duzina2){
        return $ime1;
        }       
        elseif($duzina2>$duzina1){
        return $ime2;
        }
    }
    function vraca_krace_ime(){
        global $ime1,$ime2,$duzina1,$duzina2;
        if($duzina1>$duzina2){
            return $ime2;
            }       
            elseif($duzina2>$duzina1){
            return $ime1;
            }
        }
    $najduze_ime=vraca_duze_ime();
    $najkrace_ime=vraca_krace_ime();

    echo "<p style=color:red>$najduze_ime</p>";
    echo "<p style=color:green>$najkrace_ime</p>";
    ?>
<!-- Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.

Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.

Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji. -->

</body>
</html>