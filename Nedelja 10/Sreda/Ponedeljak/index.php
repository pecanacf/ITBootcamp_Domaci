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
    include "baza_agencije.php";

    $id=$b->daj_id_destinacije('Spanija','Madrid');
    echo $id."<br>";
    $putovanja=$b->daj_putovanja(1);
    print_r($putovanja);
    echo "<br>";
    $b->brise_putovanje(1);
    ?>
</body>
</html>