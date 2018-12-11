<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 06.12.2018
 * Time: 11:08
 */
//Muutujate defineerimine
//$muutujaNimi = väärtus;
$lehePealkiri = 'Katseleht';
$sisuPealkiri = 'Muutujate defineerimine';
//muutujate sisu test vaatamine
var_dump($lehePealkiri);
//andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere, PHP';
$tõeväärtusTrue = true;
$tõeväärtusFalse = false;
echo '<br>';
var_dump($sisuPealkiri);
//väärtuse tüübi kontroll gettype($muutujaNimi)
//väärtuse tüübi teisendus settype($muutujaNimi, 'tüüp')
//Näide teksti väljastamisest ekraanile veebiprauseris
//Ühendamine toimub 'tekst katkeb '.$muutujaNimi.' tekst jätkub'
//tingimuslause
/*
 * if (tingimus == true) {
 *         siis toimub see osa
 * }else {
 *         muidu toimub see osa
 * }
 * */
$naitaSisu = true;
$naitaPeidetudSisu = true;
echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>' . $lehePealkiri . '</title>
        </head>
        <body>';
        if($naitaSisu == false){
        //sisu väljastamine
        echo '  <h1>' . $sisuPealkiri . '</h1>
            <h3>Andmetüübid</h3>
            <ul>
                <li>$taisarv = ' . $taisarv . ' - ' . gettype($taisarv) . '</li>
                <li>$reaalarv = ' . $reaalarv . ' - ' . gettype($reaalarv) . '</li>
                <li>$tekst = ' . $tekst . ' - ' . gettype($tekst) . '</li>
                <li>$tõeväärtusTrue = ' . $tõeväärtusTrue . ' - ' . gettype($tõeväärtusTrue) . '</li>
                <li>$tõeväärtusFalse = ' . $tõeväärtusFalse . ' - ' . gettype($tõeväärtusFalse) . '</li>
            </ul>'
            ;
            //tüübi teisendamine
            echo $taisarv.' + '.$taisarv.' = '.($taisarv + $taisarv);
            echo '<br>';
            settype($taisarv,'string');
            echo $taisarv.' + '.$taisarv.' = '.($taisarv + $taisarv);
            echo '<br>';
            echo gettype($taisarv);
            }else if ($naitaSisu == 1){
                    echo '<br>';
                    echo 'See on tavaline peidetud info.';
            }else {
                    echo '<br>';
                    echo 'Sisu on peidetud!';
                }

// html lehe lõpp
echo '
        </body>
    </html>
';


?>