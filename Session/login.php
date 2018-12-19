<?php
session_start(); //alustame anonüümse sessiooniga
echo '<div style="color: red">'.$_SESSION['viga'].'</div>';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 19.12.2018
 * Time: 10:36
 */
// /Session/login.php

//logida sisse ja viib üle teisele lehele

?>

<form method="post" action="login_do.php">
    <div>
        <label>Kasutajanimi: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Parool: </label>
        <input type="password" name="passwd">
    </div>
    <div>
        <input type="submit" value="Logi sisse">
    </div>

</form>
