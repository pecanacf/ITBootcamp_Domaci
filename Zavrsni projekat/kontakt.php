<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
</head>
<style>
    #kontakt {
        background-color: #457b9d;
        color: white;
    }
</style>

<body>
    <?php
    include ("include/header.php");
    include ("include/body.php");
    include ("include/style.php");
?>
    <!-- <div class="podnaslov">
        <h1 class="podnaslov-naslov">Udomljeni ljubimci</h1>
        <h5 class="podnaslov-podnaslov">U nastavku pogledajte fotografije koje nam šalju vlasnici srećnih ljubimaca
            kojima smo pronašli novi dom .</h5>
    </div> -->
    <section id="contact">
        <div id="contact_form">
            <form>
                <legend>Pošaljite nam email:</legend>
                <input type="text" placeholder="Unesite ime i prezime*" class='input' required> <br>
                <input type="email" placeholder="Unesite email adresu*" class='input' required> <br>
                <input type="text" placeholder="Unesite broj telefona*" class='input' required> <br>
                <textarea name="message" id="message" cols="30" rows="10" placeholder=" Vaša poruka:*"
                    required></textarea>
                <br>
                <button class="button"><a href="">POŠALJI PORUKU</a></button>
            </form>
        </div>
        <div id="contact_info">
            <legend>Kontakt informacije:</legend>
            <p>
                <span class="contact_white">Telefon: </span><br>
                +381 631045673 <br>
                <span class="contact_white">Email:</span> <br>
                pecanacf@gmail.com <br>
                <span class="contact_white">Adresa:</span><br>
                Dunavski kej 13, Dorćol, Belgrade
            </p>
        </div>
    </section>
    <?php
    include ("include/footer.php");
    ?>
</body>

</html>