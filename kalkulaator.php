<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 18.12.2018
 * Time: 11:04
 */

function vorm(){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
    <div>
        <label>Esimene arv :</label>
        <input type="number" name="first">
    </div>
    <div>
        <label>Teine arv :</label>
        <input type="number" name="second">
    </div>
    <input type="submit" name="Saada!">
</form>';
}

function summa($arv1, $arv2){
    return $arv1 + $arv2;
}

if(empty($_POST)){
    vorm();
}else {
    foreach ($_POST as $elment){
        if (empty($elment)){
            echo 'Sisesta arvud!<br>';
            echo '<a href="kalkulaator.php">Proovi uuesti!</a>';
            exit;
        }
    }
    echo 'Esimene arv = ' . $_POST['first'] . '<br>';
    echo 'teine arv = ' . $_POST['second'] . '<br>';

    echo '<hr>';

    echo 'Arvude summa: ' . $_POST['first']. ' + '.$_POST['second'] . ' = '.summa($_POST['first'], $_POST['second']).'<br>';
};