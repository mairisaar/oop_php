<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 11.12.2018
 * Time: 9:26
 */

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/

// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange
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
$varv = 'roheline';
if($varv == 'punane'){
    echo '<p style="color: red;">Värviline tekst</p>';
} else if($varv == 'sinine'){
    echo '<p style="color: blue;">Värviline tekst</p>';
} else if($varv == 'orange'){
    echo '<p style="color: orange;">Värviline tekst</p>';
} else {
    echo '<p>Värviline tekst</p>';
}
echo '</body></html>';
';