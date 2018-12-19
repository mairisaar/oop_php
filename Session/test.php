<?php
/**
 * Created by PhpStorm.
 * User: mairi.saar
 * Date: 19.12.2018
 * Time: 11:30
 */

session_start();
echo session_id();
echo '<br>';
echo '<a href="login_do.php">Mine eelmisele lehele</a>';
echo '<br>';
echo '<a href="logout.php">Logi välja</a>';