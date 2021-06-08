<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1.	Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
Napisati konstruktor koji dobija i  postavlja sve clanice.
Napisati metodu za citanje cene.
Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...." -->
<?php
class Krevet{
    public $duzina;
    public $sirina;
    public $materijal;
    private $cena;

    public function __construct($duzina,$sirina,$materijal,$cena){
        $this->duzina=$duzina;
        $this->sirina=$sirina;
        $this->materijal=$materijal;
        $this->cena=$cena;
    }
    public function get_price(){
        return $this->cena;
    }

    public function __toString(){
        return "Krevet je duzine $this->duzina i sirine $this->sirina napravljen od $this->materijal po ceni $this->cena"; 
    }

    public function popust($a){
    $this->cena=$this->cena-($this->cena*$a/100);
    }
}
// Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.
$krevet_1=new Krevet(220,130,"hrastovina",300);
$krevet_2=new Krevet(200,100,"bukva",230);

echo $krevet_1."<br>";
echo $krevet_2."<br>";

if($krevet_1->get_price()>$krevet_2->get_price())
    echo $krevet_1->get_price()."<br>";
else 
    echo $krevet_2->get_price()."<br>";
    // 3.	U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
    // Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.
$krevet_3=new Krevet(250,200,"camovina",350);    
echo $krevet_3."<br>";
$krevet_3->popust(10);
echo $krevet_3;



?>
</body>
</html>