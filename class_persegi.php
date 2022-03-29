<?php
class __persegipanjang{
    public $panjang;
    public $lebar;

    public function luaspp(){
        $luas=$this-> panjang*$this-> lebar;
        return "Luas : ".$luas;
    }
    public function kelilingpp(){
        $keliling=2*($this-> panjang + $this-> lebar);
        return "Keliling : ".$keliling;
    }
    public function settlebar($lebar){
        return $this->lebar = $lebar;
    }
    public function settpanjang($panjang){
        return $this->panjang = $panjang;
    }
}
$luaspersegi = new __persegipanjang();
echo "Panjang : ".$luaspersegi-> settpanjang(15);
echo "<br>";
echo "Lebar : ".$luaspersegi-> settlebar(7);
echo "<br>";
echo $luaspersegi-> luaspp();
echo "<br>";
echo $luaspersegi-> kelilingpp();
?>
