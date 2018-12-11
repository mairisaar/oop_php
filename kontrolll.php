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

//muutujate defineerimine
$nimi = 'Mairi Saar';
$kursuseTähis = 'KD18';
$kursuseNumber = '1.';
$kooliEmail = 'mairi.saar@khk.ee';

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
    </head>
    <body>
        <p>$nimi = '. $nimi. '</p>
        <p>$kursuseTähis = '. $kursuseTähis. '</p>
        <p>$kursuseNumber = '. $kursuseNumber. '</p>
        <p>$kooliEmail = '. $kooliEmail. '</p>

    </body>
    </html>
 ';