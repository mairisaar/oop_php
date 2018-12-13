<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 06.12.2018
 * Time: 11:08
 */
//Muutujate defineerimine
//$muutujaNimi = väärtus;
/*$lehePealkiri = 'Katseleht';
*$sisuPealkiri = 'Muutujate defineerimine';
 */
//muutujate sisu test vaatamine
//var_dump($lehePealkiri);
//andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere, PHP';
$tõeväärtusTrue = true;
$tõeväärtusFalse = false;
//echo '<br>';
//var_dump($sisuPealkiri);
//väärtuse tüübi kontroll gettype($muutujaNimi)
//väärtuse tüübi teisendus settype($muutujaNimi, 'tüüp')
//Näide teksti väljastamisest ekraanile veebiprauseris
//Ühendamine toimub 'tekst katkeb '.$muutujaNimi.' tekst jätkub'


//funktsioonid
/*
 * function funktsiooniNimi ($param1, $param2, ... , $paramn){
 * kõik tegevused, mis peavad funktsiooni sisus toimuma
 * }
 * */

//funktsiooni kirjeldamine
function htmlTabel () {
    echo '<table>';
    $ridadeArv = 6;
    $veergudeArv = 5;
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            echo '<td>';
            echo $veeruNumber;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}


//tingimuslause
/*
 * if (tingimus == true) {
 *         siis toimub see osa
 * }else {
 *         muidu toimub see osa
 * }
 * */
$naitaSisu = false;
$naitaPeidetudSisu = true;
echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>' . $lehePealkiri . '</title>
            <link rel="stylesheet" href="katsestyle.css">
        </head>
        <body>';




//funktsioonid
/*
 * function funktsiooniNimi ($param1, $param2, ... , $paramn){
 * kõik tegevused, mis peavad funktsiooni sisus toimuma
 * }
 * */


//funktsiooni kasutamine
echo 'Tabel funktsiooniga htmlTabel()';
echo '<br>';
echo '---';
echo '<br>';
htmlTabel();
echo '<br>';



// html lehe lõpp
echo '
        </body>
    </html>
';


?>