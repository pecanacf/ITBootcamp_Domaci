<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1.	Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. 
(odvojena cena samo za dodatak)
Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice

2.	Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
(Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu") -->

    <?php
    include "ponedeljak.php";
    class Baldahin extends Krevet{
    public $visina;
    public $cena_Baldahina;

    public function __construct($duzina,$sirina,$materijal,$cena,$visina,$cena_Baldahina){
        $this->visina = $visina;
        $this->cena_Baldahina=$cena_Baldahina;
        parent::__construct($duzina,$sirina,$materijal,$cena);
   }
   public function get_price(){
    return parent::get_price();
}
   public function __toString(){
        $cena=$this->get_price();
        $cena_sa_baldahinom=$cena+$this->cena_Baldahina;
        $string="<p>Cena kreveta je $cena, a cena kreveta sa baldahinom iznosi $cena_sa_baldahinom</p>"; 
        echo $cena;
        return $string;    
    }
    
    }
    $krevet1=new Baldahin(200,200,"hrastovina",500,50,50);
    echo $krevet1;
    ?>
</body>
</html>