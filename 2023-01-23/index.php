<?php
//PHP - loosely based programming language
$kintamasis = 'Tai yra kintamojo reiksme';
echo $kintamasis;
//Reiksmes keitimas
$kintamasis = 10;
//Inkrementas
$kintamasis++;
//Dekrementas
$kintamasis--;
//Atimtis is esamojo kintamojo
$kintamasis = $kintamasis - 20;
echo '<h2>' . $kintamasis . '<h2/>';
//Sudetis su esamuoju kintamuoju
$kintamasis = $kintamasis + 50;
echo '<h2>' . $kintamasis . '<h2/>';
//Daugyba su esamuoju kintamuoju
$kintamasis = $kintamasis * 2;
echo '<h2>' . $kintamasis . '<h2/>';
//Dalyba is esamojo kintamojo
$kintamasis = $kintamasis / 2;
echo '<h2>' . $kintamasis . '<h2/>';

$kintamasis = 10;


//Atimtis is esamojo kintamojo
$kintamasis -= 20;
echo '<h2>' . $kintamasis . '<h2/>';
//Sudetis su esamuoju kintamuoju
$kintamasis += 50;
echo '<h2>' . $kintamasis . '<h2/>';
//Daugyba su esamuoju kintamuoju
$kintamasis *= 2;
echo '<h2>' . $kintamasis . '<h2/>';
//Dalyba is esamojo kintamojo
$kintamasis /= 2;
echo '<h2>' . $kintamasis . '<h2/>';

//MASYVAI

//klasikinis masyvo aprasymas
$masyvas = array('raktinis_zodis' => 'jo reiksme');

//print-r funkcija skirta atvaizduoti masyva
print_r($masyvas);

echo '<br />';

//var_dumo antra funkcija skirta atvaizduoti masyvui
var_dump($masyvas);

echo '<br />';

//Naujas masyvo generavimo budas
$masyvas = array(15, 20, 30, 10.2, 18);

var_dump($masyvas);

echo '<br />';

$masyvas = [15, 20, 30, 10.2, 18];

var_dump($masyvas);

echo '<br />';

$masyvas = ['pirmas_raktas' => 15, 1 => 20, true => 30, 3 => 10.2, 4 => 18];

var_dump($masyvas);

echo '<br />';

echo $masyvas['pirmas_raktas'];


//Funkcija norint kazka panaikinti is masyvo
unset($masyvas['pirmas_raktas']);

var_dump($masyvas);

echo '<br />';

$masyvas[1] = 'pakeista reiksme';

var_dump($masyvas);

$raktas = 3;

echo '<br />';

$masyvas[$raktas] = 'kintamojo pagalba surastas elementas';

var_dump($masyvas);

echo '<br />';

//Naujos reiksmes pridejimas i masyva
$masyvas['raktazodis'] = 'Naujia prideta reiksme su raktazodziu';

var_dump($masyvas);

echo '<br />';

//For ciklas su php
for($i = 0; $i < 100; $i++) {
  echo $i . 'cikle aprasyta eilute ir sugeneruotas skaicius' . rand(0,500) . '<br />';
}






?>