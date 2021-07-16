<?php

    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', $baza);
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
        }
        function izvrsi_select($upit){
            $podaci=$this->conn->query($upit);
            if($podaci===false){
                return['uspesno'=>false,'poruka'=>$this->conn->error];
            }else{
                $niz=$podaci->FETCH_ALL(MYSQLI_ASSOC);
                return['uspesno'=>true,'niz'=>$niz];
            }
        }

        function izvrsi_upit($upit){
            $odg = $this->conn->query($upit);
            if($odg === false){
                die('Nije izvrsen upit:'.$this->conn->error);
            }
        }
        function daj_ljubimce(){
            $r = $this->izvrsi_select("SELECT ljubimci.broj_cipa,ime,uzrast,grad,slike.id,slike.slika, voli, ne_voli 
            FROM ljubimci JOIN slike ON ljubimci.broj_cipa=slike.broj_cipa");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit:".$r['poruka']);
            }
        }
       
        function daj_sliku_ljubimca($id){
            $r = $this->izvrsi_select("SELECT slika 
            FROM ljubimci JOIN slike ON ljubimci.broj_cipa=slike.broj_cipa 
            WHERE slike.id=$id");
            if($r['uspesno'] == true){
                return $r['niz'][0];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }
        function prikazi_detalje($ime){
            $r = $this->izvrsi_select("SELECT ime,uzrast,grad,slike.slika, voli, ne_voli 
            FROM ljubimci JOIN slike ON ljubimci.broj_cipa=slike.broj_cipa WHERE ime='$ime'");
            if($r['uspesno'] == true){
             return $r['niz'];
            }else{
                die("Neuspesan upit:".$r['poruka']);
            }
        }

    }
    $b = new Baza("macka_u_dzaku");
    $niz = $b->daj_ljubimce();
