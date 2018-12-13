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

//funktsioonid
/*
 * function funktsiooniNimi ($param1, $param2, ... , $paramn){
 * kõik tegevused, mis peavad funktsiooni sisus toimuma
 * }
 * */

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


// html lehe lõpp
echo '
        </body>
    </html>
';


?>