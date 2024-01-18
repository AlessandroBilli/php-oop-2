
<?php
trait ShopTrait
{
    public function doSomething()
    {

        return "Fai qualcosa";
    }
}

class ShopException extends Exception
{
}

class Animali
{
    public $cibo;
    public $giochi;
    public $cucce;
}

class Cani extends Animali
{
    use ShopTrait;
}

class Gatti extends Animali
{
    use ShopTrait;
}

$cane = new Cani();
$cane->cibo = "Croccantini";
$cane->giochi = "Pallina";
$cane->cucce = "Cuccia Morbida";

$gatto = new Gatti();
$gatto->cibo = "Scatolette";
$gatto->giochi = "Topo di peluche";
$gatto->cucce = "Cuccia Igloo";

try {

    throw new ShopException("");
} catch (ShopException $e) {
    echo "Errore: " . $e->getMessage();
}
?>