<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 24.09.2016
 * Time: 11:45
 */

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'center-lab';

$con = mysql_connect($dbhost, $dbuser, $dbpass) or die('error while connecting to database');

$db = mysql_select_db($dbname) or die('error while connecting to database');