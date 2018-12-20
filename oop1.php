<?php
 //class
 class dinosaurus {
 //Property
 //private $jumlahRoda;
 private $makanan;
 //Property
 //private $jumlahKursi;
 private $jumlahKaki;

 	//public function setJumlahRoda ($jumlahRoda)
 	public function setMakanan ($makanan) {
 	//$this->jumlahRoda = $jumlahRoda;
 	$this->makanan = $makanan;
 	}
 	//Method
 //public function setJumlahKursi($jumlahKursi)
  public function setJumlahKaki($jumlahKaki)
 {
 //$this->jumlahKursi = $jumlahKursi;
  $this->jumlahKaki = $jumlahKaki;
 //Method
}
public function cetak()
{
//echo 'Mobil punya '.$this->jumlahRoda.' roda dan '.$this->jumlahKursi.' kursi.';
echo 'Brontosaurus punya '.$this->jumlahKaki.' kaki dan makan '.$this->makanan;
}
}
//$sedan = new Mobil();//Object
//$sedan->setJumlahRoda(4);
//$sedan->setJumlahKursi(4);
//$sedan->cetak();
//echo PHP_EOL;
$Brontosaurus = new dinosaurus();//Object
$Brontosaurus->setJumlahKaki(4);
$Brontosaurus->setMakanan(rumput);
$Brontosaurus->cetak();
echo PHP_EOL;
?>