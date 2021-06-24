<?php

class TuristickaAgencija{
    public $conn;

    function __construct($baza){
        $this->conn = new mysqli('localhost', 'root', '', $baza);
        if ($this->conn->connect_error)
            die('Greska: '. $this->conn->connect_error);
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
    function prikazi_putnike(){
        $r = $this->izvrsi_select("SELECT ime_i_prezime, drzava, grad,datum_polaska,datum_povratka 
        FROM ((`spisak_putnika_po_putovanju` 
        JOIN putnici ON spisak_putnika_po_putovanju.broj_pasosa=putnici.broj_pasosa) 
        JOIN putovanja ON putovanja.id=spisak_putnika_po_putovanju.id_putovanja) 
        JOIN destinacije ON putovanja.id_destinacija=destinacije.id");
        if($r['uspesno'] == true){
            return $r['niz'];
        }else{
                die("Neuspesan upit: ".$r['poruka']);
        }
        }  
        function otkazi_rezervaciju($broj_pasosa){
        $odg=$this->conn->query("DELETE FROM `spisak_putnika_po_putovanju` WHERE broj_pasosa=$broj_pasosa");
        if($odg===false){
            die("nije izvrsen upit: ".$this->conn->error);
        }else{
            echo "uspesno izvrsen upit";
        }
        }    
    }
    $b=new TuristickaAgencija('turisticka_agencija');

  



?>
