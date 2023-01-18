<?php

abstract class BangunDatar_Defri {
    abstract function luas();
    abstract function keliling();
}



/**
 * Menghitung bangun datar Persegi
 *
 * @param $sisi
 *
 */
class Persegi_Defri extends BangunDatar_Defri {
    private float $sisi;

    function __construct($sisi){
        $this->sisi = $sisi;
    }
    function luas(){
        echo "Luas ". get_class(). " : ". ($this->sisi * $this->sisi). "\n";
    }
    function keliling(){
        echo "Keliling ". get_class(). " : ". (4*$this->sisi). "\n";;
    }
}



/**
 * Menghitung bangun datar Persegi Panjang
 *
 * @param $panjang
 * @param $lebar
 *
 */
class PersegiPanjang_Defri extends BangunDatar_Defri {
    private float $panjang;
    private float $lebar;
    
    function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function luas(){
        echo "Luas ".get_class(). " : ".($this->panjang*$this->lebar). "\n";
    }
    function keliling(){
        echo "Keliling ". get_class(). " : ". ((2*$this->panjang) + (2*$this->lebar)). "\n";
    }
}


/**
 * Menghitung bangun datar Lingkarang
 *
 * @param $jari2
 *
 */
class Lingkaran_Defri extends BangunDatar_Defri {
    private float $jari2;
    function __construct($jari2){
        $this->jari2 = $jari2;
    }
    function luas(){
        echo "Luas ". get_class(). " : ". (pi() * pow($this->jari2,2)). "\n";
    }
    function keliling(){
        echo "Keliling ". get_class(). " : ". (2 * pi() * $this->jari2). "\n";
    }
}

/**
 * Menghitung bangun datar segitiga
 *
 * @param $alas
 * @param $tinggi
 *
 */
class Segitiga_Defri extends BangunDatar_Defri {
    private float $tinggi;
    private float $alas;
    function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    function luas(){
        echo "Luas ". get_class(). " : ". (($this->alas * $this->tinggi) * .5). "\n";
    }
    function keliling(){
        echo "Keliling ". get_class(). " : ". (sqrt(
            pow($this->alas,2) + pow($this->tinggi,2)
        ) + $this->alas + $this->tinggi). "\n";
    }
}

// alas = 4
// tinggi = 5 
$segitiga = new Segitiga_Defri(10,10);

// jari jari = 10
$lingkaran = new Lingkaran_Defri(10);

// sisi = 10
$persegi = new Persegi_Defri(10);

// panjang = 10
// lebar = 5
$persegi_panjang = new PersegiPanjang_Defri(10,5);

$segitiga->luas();
$lingkaran->luas();
$persegi->luas();
$persegi_panjang->luas();


$segitiga->keliling();
$lingkaran->keliling();
$persegi->keliling();
$persegi_panjang->keliling();