<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udomi ljubimca</title>
</head>
<style>
      #udomi {
            background-color: #457b9d;
            color: white;
        }   
</style>

<body>
<?php
    include ("include/header.php");
    include ("include/body.php");
    include ("klasa_baza.php");
    include ("include/style.php");
    
    $brojac=1;
    echo "<style>";
    for($i=1;$i<=9;$i++){
        $m=$b->daj_sliku_ljubimca($brojac);
        $f=implode("",$m);
        echo ".div$i{
            background-image: url('$f');}";
            $brojac+=3;
    }
    echo "</style>";
?>
    <section id=udomi_pondnaslov_i_slika>
        <div class="podnaslov">
            <h1 class="podnaslov_h1">Udomljavanje</h1>
            <h5 class="podnaslov_podnaslov">Udomite napuštenog ljubimca. Pogledajte oglase volontera i građana koji
                brinu o njima i pronađite svog novog prijatelja.</h5>
        </div>
    </section>

    <div class="prikaz_ljubimca">
<?php
    $brojac=1;
    for($i=1;$i<=9;$i++){
        echo "<div class='div$i' id='div$i'><p><span class='ime_ljubimca'>".strtoupper($niz[$brojac]['ime'])."
        </span> <br> <button> <a href='prikazi_detaljnije.php?ime=".$niz[$brojac]['ime']."'>UPOZNAJ ME</a></button></p></div>";
        $brojac+=3;
    }
?>
    </div>

<?php
    include ("include/footer.php");
?>
</body>

</html>