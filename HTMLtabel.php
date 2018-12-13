<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 13.12.2018
 * Time: 11:04
 */
require_once './Tabel.php';
class HTMLtabel extends Tabel
{

    /**
     * HTMLtabel constructor.
     */
    public function __construct()
    {
        echo 'HTML';
        parent::__construct();
    }

        /*
         * vaata tabeli massiivi foreach ridade abil
         * ja väljasta html tabeli kujul
         * */
    function naitaTabel()
    {
        echo '<table style="border-collapse: collapse; border: solid 1px #000000; width: 200px; text-align: center;">';
        foreach ($this->tabel as $rida){
            echo '<tr style="border-collapse: collapse; border: solid 1px #000000;">';
            foreach ($rida as $element){
                echo '<td style="border-collapse: collapse; border: solid 1px #000000;">'.$element.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

}