<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 18.12.2018
 * Time: 10:27
 */
echo '<pre>';
print_r($_POST);
echo '</pre>';

if(empty($_POST)){
    header('Location: vorm.php');
//    echo '<a href="vorm.php">Logi sisse!</a>';
}else {
    foreach ($_POST as $elment){
        if (empty($elment)){
            echo 'Sisesta andmed!<br>';
            echo '<a href="vorm.php">Logi sisse!</a>';
            exit;
        }
    }
    echo 'kasutajanimi = ' . $_POST['username'] . '<br>';
    echo 'parool = ' . $_POST['passwd'] . '<br>';
    echo '<hr>';

    echo 'Tere tulemast, ' . $_POST['username'] . '<br>';
}