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

//echo '<br>';
//var_dump($sisuPealkiri);
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

//funktsioonid
/*
 * function funktsiooniNimi ($param1, $param2, ... , $paramn){
 * kõik tegevused, mis peavad funktsiooni sisus toimuma
 * }
 * */

//massiivid
/*
 * $massiiv = array(); //tühi massiiv
 * $massiiv[] = väärtus; //et lisada massiivi väärtuseid
 */
$nimed = array();
$nimed[] = 'Anna';
$nimed[] = 'Mairi';
// kaks võimalust vaadata massiivi sisu
//var_dump
var_dump($perekondPepa);
//print_r
echo '<pre>';
print_r($perekondPepa);
echo '</pre>';

echo '<br>';
echo '<hr>';

function valjastaInfo($massiiv) {
    foreach ($massiiv as $alamMassiiv){
        foreach ($alamMassiiv as $elemendiNimi => $elemendiVaartus){
            echo $elemendiNimi.' - '.$elemendiVaartus.'<br>';
        }
        echo '<hr>';
    }
}

//massiivi loomine
$porsasPepa = array('nimi'=>'Pepa', 'amet'=>'põrsaslaps', 'vanus'=>5, 'sugu'=>'naine');
$porsasGeorge = array('nimi'=>'George', 'amet'=>'põrsaslaps', 'vanus'=>2, 'sugu'=>'mees');

$perekondPepa = array(
    array('nimi'=>'Pepa', 'amet'=>'põrsaslaps', 'vanus'=>5, 'sugu'=>'naine'),
    array('nimi'=>'George', 'amet'=>'põrsaslaps', 'vanus'=>2, 'sugu'=>'mees')
);


echo '<hr>';



echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>' . 'Massiiv'. '</title>
            <link rel="stylesheet" href="katsestyle.css">
        </head>
        <body>';


valjastaInfo($perekondPepa);
echo '<hr>';



// html lehe lõpp
echo '
        </body>
    </html>
';


?>