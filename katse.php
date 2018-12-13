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
var_dump($nimed);
//print_r
echo '<pre>';
print_r($nimed);
echo '</pre>';

echo '<br>';
echo '<hr>';

//massiivi loomine
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6),
);

//massiivi sisu test kontroll
var_dump($numbrid);

echo '<pre>';
print_r($numbrid);
echo '</pre>';

echo '<br>';

//massiivi elemendi väljastamine
echo $numbrid[1][1];

echo '<br>';
//massiivi suuruse kontroll - ridade arv
$ridadeArv = count($numbrid);
echo $ridadeArv;

echo '<br>';
//massiivi suuruse kontroll - veergude arv
$veergudeArv = count($numbrid[0]);
echo $veergudeArv;

echo '<br>';
//massiivi väljastamin for tsükliga
//'&nbsp' on tühik
for($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++){
    for($veeruNumber = 0; $veeruNumber < $veergudeArv; $veeruNumber++){
        echo $numbrid[$reaNumber][$veeruNumber].'&nbsp';
    }
    echo '<br>';
}
echo '<br>';
//massiivi väljastamine foreach abil
foreach ($numbrid as $rida){
    foreach ($rida as $number){
        echo $number.'&nbsp';
    }
    echo '<br>';
}



echo '<hr>';



//funktsiooni kirjeldamine
//saab lisada vaikimisi parameetrid, need saab üle kirjutada andes funktsioonile välja kutsudes kaasa uued väärtused
function htmlTabel ($ridadeArv = 0, $veergudeArv = 0) {
    echo '<table>';
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

//tagastamisega funktsioon
function htmlTabelTagasta ($ridadeArv = 0, $veergudeArv = 0) {
    $tabel = '<table>';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        $tabel = $tabel.'<tr>';
        for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            $tabel = $tabel.'<td>';
            $tabel = $tabel.$veeruNumber;
            $tabel = $tabel.'</td>';
        }
        $tabel = $tabel.'</tr>';
    }
    $tabel = $tabel.'</table>';
    return $tabel;
}


$naitaSisu = false;
$naitaPeidetudSisu = true;
echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>' . Funktsioon. '</title>
            <link rel="stylesheet" href="katsestyle.css">
        </head>
        <body>';



//funktsiooni kasutamine
echo 'Tabelid funktsiooniga htmlTabel()';
echo '<br>';
htmlTabel(4, 6);
echo '<hr>';
htmlTabel(3, 2);
echo '<hr>';
// vaikimisi parameetritega tabel
echo 'Tabelid funktsiooniga htmlTabel(), kasutatakse funktsiooni vaikimisi väärtuseid 0 rida ja 0 veergu';
echo '<br>';
htmlTabel();
echo '<hr>';
//tagastamisega funktsiooniga tabel
echo 'Tabelid funktsiooniga htmlTabelTagasta()';
echo '<br>';
$tabel1 = htmlTabelTagasta(4, 4);
echo $tabel1;
echo '<hr>';

// html lehe lõpp
echo '
        </body>
    </html>
';


?>