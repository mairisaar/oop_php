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
    <html lang="et">
    <head>
        <meta charset="UTF-8" />
        <title>Kontroll</title>
    </head>
    <body>
        <p>Minu nimi on '. $nimi. '</p>
        <p>Minu kursuse tähis Tartu Kutsehariduskeskuses on '. $kursuseTähis. '</p>
        <p>Õpin '. $kursuseNumber. ' kursusel.</p>
        <p>Minu kooli e-posti aadress on '. $kooliEmail. '</p>

    </body>
    </html>
 ';