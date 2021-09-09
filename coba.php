<!DOCTYPE html>
<html>
<body bgcolor="azure">
  <h1>Waroeng Orders</h1>
  <h2>Menu Makanan</h2>

<?php
  class MenuMakanan{
  public $name;
  protected $harga;
  private $porsi;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
    function set_harga($harga) {
    $this->harga = $harga;
  }
  function get_harga() {
    return $this->harga;
  }

}



$bakso = new MenuMakanan();
$seblak = new MenuMakanan();
$MieAyam = new MenuMakanan();
$AyamGeprek = new MenuMakanan();
$BaksoAci = new MenuMakanan();
$bakso->set_name('Bakso = '); $bakso->set_harga('Rp.8000');
$seblak->set_name('Sate = '); $seblak->set_harga('Rp.10000');
$MieAyam->set_name('Mie Ayam = '); $MieAyam->set_harga('Rp.15000');
$AyamGeprek->set_name('Ayam Geprek = '); $AyamGeprek->set_harga('Rp.15000');
$BaksoAci->set_name('bakso Aci = '); $BaksoAci->set_harga('Rp.9000');

echo $bakso->get_name();
echo $bakso->get_harga();
echo "<br>";
echo $seblak->get_name();
echo $seblak->get_harga();
echo "<br>";
echo $MieAyam->get_name();
echo $MieAyam->get_harga();
echo "<br>";
echo $AyamGeprek->get_name();
echo $AyamGeprek->get_harga();
echo "<br>";
echo $BaksoAci->get_name();
echo $BaksoAci->get_harga();
echo "<br>";

class Makanan extends MenuMakanan{
  public function message(){
    echo "Makanan Selalu Sedia";
  }
}
$makanan = new Makanan("Dessert", "Murah");  // OK. __construct() is public
$makanan->message(); // OK. message() is public
?>

<h3>Menu Minuman</h3>
<?php
interface Menu{
public function __construct($name, $harga);

}
class MenuMinuman implements Menu {
  public $name;
  public $harga;
  public static function Pesan(){}
  public static $value = "Anda Bisa menghubungi 081211307518";
  function __construct($name, $harga) {
    $this->name = $name;
    $this->harga = $harga;
  }
  function __destruct() {
    echo "{$this->name} = {$this->harga}.";
  }
}
echo $esteh = "Es Teh = Rp.3000"; echo "<br>";
echo $JusJambu = "Jus jambu = Rp.6000"; echo "<br>";
echo $EsDegan = "Es degan = Rp.8000"; echo "<br>";
echo $EsBuah = "Esbuah = Rp.10000"; echo "<br>";
echo $EsJeruk = "Es Jeruk = Rp.4000"; echo "<br>";
echo "SILAHKAN DIPESAN"; echo "<br>";
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["Menerima Pesanan"];
printIterable($arr); echo "<br>";
echo MenuMinuman::$value;
MenuMinuman::Pesan();
?>
</body>
</html>

