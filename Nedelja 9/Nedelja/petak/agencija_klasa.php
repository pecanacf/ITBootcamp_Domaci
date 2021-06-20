<?php

class TuristickaAgencija{
    public $conn;

    function __construct($baza){
        $this->conn = new mysqli('localhost', 'root', '', $baza);
        // provera
        if ($this->conn->connect_error)
            die('Greska: '. $this->conn->connect_error);
        // else
        //     echo 'Konektovan!';
    }

    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci === false)
            return ['uspesno'=>false, 'poruka'=>$this->conn->error];
        else{
            $niz = $podaci->fetch_all(MYSQLI_ASSOC);//kreira asoc niz
            return ['uspesno'=>true, 'niz'=>$niz];
        }
    }
    function prikazi_destinacije(){
        $r = $this->izvrsi_select("SELECT DEST.drzava,DEST.grad,PUT.datum_polaska,PUT.datum_povratka 
        FROM `putovanja` AS PUT 
        JOIN destinacije AS DEST ON PUT.id_destinacija=DEST.id");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
            die("Neuspesan upit: ".$r['poruka']);
        }
        }
            
    }

    function otkazi_rezervaciju($broj_pasosa){
      echo "DELETE FROM `spisak_putnika_po_putovanju` WHERE broj_pasosa=";
}



?>
