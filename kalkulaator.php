<style>

    form {
        margin: 100px;
        padding: 30px;
        width: 500px;
        text-align: center;
        border: solid 1px forestgreen;
        background-color: darkseagreen;
    }

    label, input {
        font-family: Helvetica, SansSerif;
    }

    input {
        width: 50px;
        margin-left: 10px;
    }

    .button {
        width: 100px;
        margin-top: 30px;
    }

    label {
        line-height: 200%;
    }

    .num {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }


</style>

<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 18.12.2018
 * Time: 11:04
 */

function vorm(){
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
    <div class="num">
        <div>
            <label>Esimene arv :</label>
            <input type="number" name="first">
        </div>
        <div>
            <select name="tehe">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">*</option>
              <option value="/">/</option>
            </select>       
        </div>
        <div>
            <label>Teine arv :</label>
            <input type="number" name="second">
        </div>
    </div>
    <input class="button" type="submit" name="saada" value="Arvuta">
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
            echo 'Liitmiseks sisesta arvud!<br>';
            echo '<a href="kalkulaator.php">Proovi uuesti!</a>';
            exit;
        }
    }
    echo 'Esimene arv = ' . $_POST['first'] . '<br>';
    echo 'Teine arv = ' . $_POST['second'] . '<br>';

    echo '<hr>';

    echo 'Arvude summa: ' . $_POST['first']. ' + '.$_POST['second'] . ' = '.summa($_POST['first'], $_POST['second']).'<br>';

    echo '<a href="kalkulaator.php">Proovi uuesti!</a>';
};