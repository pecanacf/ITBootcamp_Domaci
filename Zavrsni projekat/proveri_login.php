<?php
    session_start();
    $username = $_GET['username'];
    $password = $_GET['password'];
    $zapamti = $_GET['zapamti'];


    $baza = new mysqli("localhost", "root", "", "macka_u_dzaku");
    $podaci = $baza->query("SELECT id from korisnici WHERE email='$username' AND sifra='$password'");
    if($podaci === false){
        //nije dobar upit
        echo "Ne postoje podaci o useru!";
        exit;
    }
    
    $niz = $podaci->fetch_all(MYSQLI_ASSOC);
    
    if(count($niz) === 0){
        // ne postoji user ili pass
        echo "Niste pravilno uneli email adresu i/ili password!";
        exit;
    }

    $id = $niz[0]['id'];
    
    if($zapamti == false)
        $_SESSION['login_id'] = $id;
    else                                 
        setcookie('login_id', $id, time()+60*60*24*30*3, "/");

    header("Location: index.php");
?>
<a href="index.php">POČETNA STRANA</a>