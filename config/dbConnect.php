<?php 

$con = mysql_connect('127.0.0.1', 'root', '');
if(!$con){
	die('kan inte connecta!'.mysql_error());
}
mysql_select_db('supliers-parts');