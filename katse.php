<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 06.12.2018
 * Time: 11:08
 */


//massiivid
/*
 * $massiiv = array(); //tühi massiiv
 * $massiiv[] = väärtus; //et lisada massiivi väärtuseid
 */

// kaks võimalust vaadata massiivi sisu
//var_dump
var_dump($perekondPepa);
//print_r
echo '<pre>';
print_r($perekondPepa);
echo '</pre>';

echo '<br>';
echo '<hr>';

//fuktsiooni kirjeldus
function valjastaInfo($massiiv) {
    foreach ($massiiv as $alamMassiiviNimi => $alamMassiiviAndmed){
        echo '<b>'.$alamMassiiviNimi.'</b>';
        echo '<br>';
        echo '<br>';
        foreach ($alamMassiiviAndmed as $elemendiNimi => $elemendiVaartus){
            echo $elemendiNimi.' - '.$elemendiVaartus.'<br>';
        }
        echo '<hr>';
    }
}

//massiivi loomine
//ühemõõtmelised massiivid
$porsasPeppa = array('nimi'=>'Peppa', 'amet'=>'põrsaslaps', 'vanus'=>5, 'sugu'=>'naine');
$porsasGeorge = array('nimi'=>'George', 'amet'=>'põrsaslaps', 'vanus'=>2, 'sugu'=>'mees');

//mitmemõõtmeline massiiv
$perekondPepa = array(
    'Peppa' => array(
        'nimi'=>'Pepa',
        'amet'=>'põrsaslaps',
        'vanus'=>5,
        'sugu'=>'naine'
    ),
    'George' => array(
        'nimi'=>'George',
        'amet'=>'põrsaslaps',
        'vanus'=>2,
        'sugu'=>'mees'
    )
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