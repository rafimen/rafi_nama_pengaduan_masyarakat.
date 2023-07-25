<?php
class mobil{
    public $merk = "toyota";
    public $tahunproduksi =2018; 
    public $warna = "putih";
    public $kecepatan=  100;

    public function start(){
       echo"mobil berjalan";
    }
    public function akselerasi(){
        echo "mobil akselerasi";
    }
    public function berhenti()
    {
       echo "mobil berhenti"; 
    }
     
}
echo "<div><h1>mobil 1<h1></div>";
$mobil1 = new mobil();
echo $mobil1->merk;
echo "<br>";
echo $mobil1->tahunproduksi;
echo "<br>";
echo $mobil1->warna;
echo "<br>";
echo $mobil1->kecepatan;
echo "<br>";
$mobil1->start();
echo "<br>";
$mobil1->akselerasi();
echo "<br>";
$mobil1->berhenti();

echo "<div><h1>mobil 2<h1></div>";
$mobil2 = new mobil();
echo $mobil2->merk="daihatsu";
echo "<br>";
echo $mobil2->tahunproduksi="2011";
echo "<br>";
echo $mobil1->warna="hitam";
echo "<br>";
echo $mobil1->kecepatan="70";
echo "<br>";
$mobil1->start();
echo "<br>";
$mobil1->akselerasi();
echo "<br>";
$mobil1->berhenti();
?>