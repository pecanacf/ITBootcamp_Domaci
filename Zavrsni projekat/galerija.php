<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerija</title>
</head>
<?php
include ("include/style.php");
?>
<style>
    #galerija {
        background-color: #457b9d;
        color: white;
    }

    div.div1 {
        grid-area: 1 / 1 / 2 / 2;
        margin-left: 12px;
    }

    .div2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .div3 {
        grid-area: 1 / 3 / 2 / 4;
    }

    div.div4 {
        grid-area: 1 / 4 / 2 / 5;
        margin-right: 12px;
    }

    div.div5 {
        grid-area: 2 / 1 / 3 / 2;
        margin-left: 12px;
    }

    div.div6 {
        grid-area: 2 / 2 / 3 / 3;
    }

    div.div7 {
        grid-area: 2 / 3 / 3 / 4;
    }

    div.div8 {
        grid-area: 2 / 4 / 3 / 5;
        margin-right: 12px;
    }

    div.div9 {
        grid-area: 3 / 1 / 4 / 2;
        margin-left: 12px;
    }

    .div10 {
        grid-area: 3 / 2 / 4 / 3;
    }

    .div11 {
        grid-area: 3 / 3 / 4 / 4;
    }

    div.div12 {
        grid-area: 3 / 4 / 4 / 5;
        margin-right: 12px;
    }

    div.div13 {
        grid-area: 4 / 1 / 5 / 2;
        margin-left: 12px;
    }

    .div14 {
        grid-area: 4 / 2 / 5 / 3;
    }

    .div15 {
        grid-area: 4 / 3 / 5 / 4;
    }

    div.div16 {
        grid-area: 4 / 4 / 5 / 5;
        margin-right: 12px;
    }
</style>

<body>
    <?php
include ("include/header.php");
include ("include/body.php");
?>
    <section id=galerija_udomljeni>
        <div class="podnaslov">
            <h1 class="podnaslov_h1">Udomljeni ljubimci</h1>
            <h5 class="podnaslov_podnaslov">U nastavku pogledajte fotografije koje nam šalju vlasnici srećnih ljubimaca
                kojima smo pronašli novi dom .</h5>
        </div>
    </section>

    <div class="galerija">
        <?php
    for($i=1;$i<=16;$i++){
        echo "<div class='div$i' style='background-image: url(slike/galerija$i.jpg)';></div>";
    }
?>
    </div>
    <?php
    include ("include/footer.php");
    ?>
</body>

</html>