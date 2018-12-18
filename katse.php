<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 06.12.2018
 * Time: 11:08
 */

function vorm(){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
    <div>
        <label>kasutajanimi :</label>
        <input type="text" name="username">
    </div>
    <input type="submit" name="Saada!">
</form>';
}

if(empty($_POST)){
    vorm();
}else {
    foreach ($_POST as $elment){
        if (empty($elment)){
            echo 'Sisesta andmed!<br>';
            echo '<a href="katse.php">Proovi uuesti!</a>';
            exit;
        }
    }
    echo 'kasutajanimi = ' . $_POST['username'] . '<br>';

    echo '<hr>';

    echo 'Tere tulemast, ' . $_POST['username'] . '<br>';
};








echo '
    <!DOCTYPE html>
    <html>
        <head>
            <title>' . 'Vormid'. '</title>
            <link rel="stylesheet" href="katsestyle.css">
        </head>
        <body>';




echo '<hr>';




// html lehe lõpp
echo '
        </body>
    </html>
';


?>