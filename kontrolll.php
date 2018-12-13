<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 11.12.2018
 * Time: 9:26
 */

echo '<html><head><title>Ülesanded</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/

//muutujate defineerimine
$nimi = 'Mairi Saar';
$kursuseTahis = 'KD18';
$kursuseNumber = '1.';
$kooliEmail = 'mairi.saar@khk.ee';

echo '<h4>Ülesanne 1</h4>';
$eesNimi = 'Mairi';
$pereNimi = 'Saar';
$kursus = 'KD18';
$email = 'mairi.saar@khk.ee';
echo 'Eesnimi '.$eesNimi.'<br>';
echo 'Perenimi '.$pereNimi.'<br>';
echo 'Kursus '.$kursus.'<br>';
echo 'email '.$email.'<br>';
echo '<hr>';

// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange
*/

echo '<h4>Ülesanne 2</h4>';
$varv = 'orange';
echo '<p style="color: ';
if($varv == 'punane'){
    echo 'red';
} else if($varv == 'sinine'){
    echo 'blue';
} else if($varv == 'orange'){
    echo 'orange';
} else {
    echo 'black';
}
echo ';">Värviline tekst</p>';
echo '</body></html>';
echo '<hr>';

//Ülesanne 3
/*
 * Gradient tabeli ridadele, läheb järjest heledamaks
 */

echo '<h4>Ülesanne 3</h4>';
echo '<table>';
$ridadeArv = 6;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#'.F.E.$reaNumber.$veeruNumber.'0'.'0';
        echo '<td style="background-color: '.$varv.'">';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';

echo '<table>';
$ridadeArv = 6;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#';
        for ($i = 1; $i <= 6; $i++){
            $varv = $varv.dechex(rand(0, 16));
        }
        echo '<td style="background-color: '.$varv.'">';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<hr>';

//Ülesanne4

/*
 * Ümber kirjutada tabeli funktsioon nii, et tabeli sisu/info väljastataks massiivist
 */

echo '<h4>Ülesanne 4</h4>';

$numbrid = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15),
);

$symbolid = array(
    array(a, b, c),
    array(d, e, f)
);

//for
function htmlTabel ($massiiv) {
    echo '<table>';
    for($reaNumber = 0; $reaNumber < count($massiiv); $reaNumber++){
        echo '<tr>';
        for($veeruNumber = 0; $veeruNumber < count($massiiv[$reaNumber]); $veeruNumber++) {
            echo '<td>';
            echo $massiiv[$reaNumber][$veeruNumber];
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

//foreach
function htmlTabelFE($massiiv){
    echo '<table>';
    foreach($massiiv as $rida){
        echo '<tr>';
        foreach($rida as $element) {
            echo '<td>';
            echo $element;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

htmlTabel($numbrid);

echo '<hr>';

htmlTabelFE($symbolid);

echo '<hr>';

echo '</body></html>';

