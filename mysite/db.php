<?php
require "libs/rb.php";
$site_url = "localhost/";
R::setup( 'mysql:host=127.0.0.1;dbname=reg','root', '' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}
session_start();
?>