<?php

class Baza{
public $conn;
function __construct($baza){
    $this->conn=new mysqli('localhost','root','',$baza);
    if($this->conn->connect_error)
    die ("Greska: ".$this->conn->connect_error);
}
function izvrsi_select($upit){
    $podaci=$this->conn->query($upit);
    if($podaci===false){
        return ['uspesno'=>false,'poruka'=>$this->conn->error];
    }else{
        $niz=$podaci->FETCH_ALL(MYSQLI_ASSOC);
        return ['uspesno'=>true,'niz'=>$niz];
    }
}
function daj_id_destinacije($drzava,$grad){
    $r=$this->izvrsi_select("select id from destinacije where drzava='$drzava' AND grad='$grad'");
    if($r['uspesno']==true){
        return $r['niz'][0]['id'];
    }else{
        die("Neuspesan upit: ".$r['poruka']);
    }
}
function daj_putovanja($id){
    $r=$this->izvrsi_select("SELECT drzava, grad,datum_polaska,datum_povratka FROM `putovanja` JOIN destinacije ON putovanja.id_destinacija=destinacije.id WHERE destinacije.id=$id");
    if($r['uspesno']==true){
        return $r['niz'];
    }else{
        die("Neuspesan upit: ".$r['poruka']);
    }
}
function brise_putovanje($id){
    $odg=$this->conn->query("DELETE FROM `spisak_putnika_po_putovanju` WHERE id_putovanja=$id");
    if($odg===false){
        die('nije izvrsen upit: '.$this->conn->error);}
        else{
        echo "uspesno izvrsen upit!";
    }
}
}
$b=new Baza('turisticka_agencija');
?>
