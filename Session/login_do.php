<?php
session_start(); // jätkame login.php faili sessiooni
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 19.12.2018
 * Time: 10:40
 */

// see fail hakkab ootama/töötlema kasutaja poolt saadetud andmeid

//kontrollida saab,et vormi sisestatud andmed tulevad
//kui need ei ole välja kommenteeritud, siis ei kuvata automaatselt sisselogimisvormi, vt järgmist lõiku
//echo $_POST['username'];
//echo '<br>';
//echo $_POST['passwd'];

//kui satud sellele lehele ja vorm on tühi, siis kuvatakse automaatselt sisselogimise vorm
if(empty($_POST)){
    header('Location: login.php');
    $_SESSION['viga'] = 'Täida vormi andmed';
} else if(empty($_POST[username])){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta kasutajanimi';
} else if(empty($_POST[passwd])){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta parool';
} else {
    session_destroy(); // lõpetan veateate sessiooni
    session_start(); //alustan sisselogitud kasutaja sessiooni
    //session_regenerate_id(); // sessioonile uue id genereerimine/määramine

    echo session_id();
    $_SESSION['username'] = $_POST['username'];
    echo '<br>';
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo 'Sisselogimine õnnestus! Sinu kasutajanimi on '.$_SESSION['username'];
    echo '<br>';
    echo '<a href="test.php">Mine test lehele</a>';
    echo '<br>';
    echo '<a href="logout.php">Logi välja</a>';
}
