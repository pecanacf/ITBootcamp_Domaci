<!-- 1.	Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i 
"prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu. -->
<?php
class SastojakHrane{
    public $naziv,$mera,$kalorije;
    function __construct($naziv,$mera,$kalorije){
        $this->naziv=$naziv;
        $this->mera=$mera;
        $this->kalorije=$kalorije;
    }
    public function promeniMeru($a){
        $this->mera=$a;
    }
    public function prikazi(){
        echo "<p>Naziv sastojka je $this->naziv, njegova mera je $this->mera i ima $this->kalorije kalorija</p>";
    }
}
?>