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
//var_dump($perekondPeppa);
//print_r
//echo '<pre>';
//print_r($perekondPeppa);
//echo '</pre>';

echo '<br>';
echo '<hr>';

function suguVarv($sugu){
    if ($sugu == 'naine'){
        echo '<div style="color: red">';
    }else {
        echo '<div style="color: blue">';
    }
}


//fuktsiooni kirjeldus
function valjastaInfo($massiiv) {
    foreach ($massiiv as $alamMassiiviNimi => $alamMassiiviAndmed){
        suguVarv($alamMassiiviAndmed['sugu']);
        echo '<b>'.$alamMassiiviNimi.'</b>';
        echo '<br>';
        echo '<br>';
        foreach ($alamMassiiviAndmed as $elemendiNimi => $elemendiVaartus){
            suguVarv($alamMassiiviAndmed['sugu']);
            echo $elemendiNimi.' - '.$elemendiVaartus.'</div>';
        }
        echo '<hr>';
    }
}

//katse sorteerida soo järgi
//function suguVordlus($a, $b){
//    if($aSugu == $bSugu) {
//        return 0;
//    }return($aSugu < $bSugu) ? -1 : 1;
//}

function suguVordlus($a, $b){
    if($a['sugu'] == $b['sugu']) {
        return 0;
    }return($a['sugu'] < $b['sugu']) ? -1 : 1;
}
//seda ei ole tegelikult üldse vaja
function sortSooJargi ($massiiv){
    usort($massiiv,'suguVordlus');
}

//massiivi loomine
//ühemõõtmelised massiivid
$porsasPeppa = array('nimi'=>'Peppa', 'amet'=>'põrsaslaps', 'vanus'=>5, 'sugu'=>'naine');
$porsasGeorge = array('nimi'=>'George', 'amet'=>'põrsaslaps', 'vanus'=>2, 'sugu'=>'mees');

//mitmemõõtmeline massiiv
$perekondPeppa = array(
    'Peppa' => array(
        'nimi'=>'Pepa',
        'amet'=>'põrsalaps',
        'vanus'=>5,
        'sugu'=>'naine'
    ),
    'George' => array(
        'nimi'=>'George',
        'amet'=>'põrsalaps',
        'vanus'=>2,
        'sugu'=>'mees'
    ),
    'Põrsaema' => array(
        'nimi'=>'Ema',
        'amet'=>'põrsaema',
        'vanus'=>35,
        'sugu'=>'naine'
    ),
    'Põrsaisa' => array(
        'nimi'=>'Isa',
        'amet'=>'põrsaisa',
        'vanus'=>40,
        'sugu'=>'mees'
    ),
);


echo '<hr>';
//sort($perekondPeppa);
//asort($perekondPeppa);
//ksort($perekondPeppa);
//sortSooJargi($perekondPeppa);

uasort($perekondPeppa,'suguVordlus');

echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>' . 'Massiiv'. '</title>
            <link rel="stylesheet" href="katsestyle.css">
        </head>
        <body>';


valjastaInfo($perekondPeppa);
echo '<hr>';




// html lehe lõpp
echo '
        </body>
    </html>
';


?>