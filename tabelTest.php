<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 13.12.2018
 * Time: 10:44
 */
//Loeme sisse Tabel.php faili sisu
require_once './Tabel.php';
// loome tabeli objekti

$lihttabel = new Tabel();
//lisame read sisuga
$lihttabel->lisaRida(array(1, 2, 3));
$lihttabel->lisaRida(array(4, 5, 6));
$lihttabel->lisaRida(array(7, 8, 9));
//väljastamine
$lihttabel->naitaTabel();

