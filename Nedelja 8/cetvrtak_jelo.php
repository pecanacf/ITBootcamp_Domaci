<!-- 2.	Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. 
Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.   -->
<?php
include "cetvrtak_sastojak.php";
include "cetvrtak_podaci.php";
class Jelo{
    public $naslov, $opis, $niz_sastojaka_hrane;
    function __construct($naslov, $opis, $podaci){
        $this->naslov=$naslov;
        $this->opis=$opis;
        $this->niz_sastojaka_hrane=[];
        for($i=0;$i<count($podaci);$i++){
        
        $sastojak = new SastojakHrane($podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
        array_push($this->niz_sastojaka_hrane, $sastojak);    
        }
    }
    public function prikazi(){
        for($i=0;$i<count($this->niz_sastojaka_hrane);$i++){
                    $this->niz_sastojaka_hrane[$i]->prikazi();
        }
    }
    public function promeniMeru($sastojak,$nova_mera){
        for($i=0;$i<count($this->niz_sastojaka_hrane);$i++){
            if($this->niz_sastojaka_hrane[$i]->naziv == $sastojak)
                $this->niz_sastojaka_hrane[$i]->promeniMeru($nova_mera);
        }
    }
}

$jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
$jelo->prikazi();
$jelo->promeniMeru("brasno", "400g");
$jelo->prikazi();

?>
