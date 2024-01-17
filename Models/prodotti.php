<?php
class Animali
{
    public $cibo;
    public $giochi;
    public $cucce;
}

class Cani extends Animali
{
}

class Gatti extends Animali
{
}


$cane = new Cani();
$cane->cibo = "Croccantini";
$cane->giochi = "Pallina";
$cane->cucce = "Cuccia Morbida";

$gatto = new Gatti();
$gatto->cibo = "Scatolette";
$gatto->giochi = "Topo di peluche";
$gatto->cucce = "Cuccia Igloo";
