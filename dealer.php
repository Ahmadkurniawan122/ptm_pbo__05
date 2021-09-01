<?php
class mobil_lama 
{
public function nama_kendaraan()
{
    return "Mobil : Lexus, 100kmh, 2000";
}  
}

$dealer = new mobil_lama();
echo $dealer->nama_kendaraan();

?>