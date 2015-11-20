<?php 
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'qburst';
$DB_NAME = 'angularcode_task';

/*login with google keys*/
$client_id = '492769946544-ktjauuhqughrgre7blu2b6cmuuir1688.apps.googleusercontent.com';
$client_secret = 'xUqeCQ7pj42axoJ5E1iVu0kyr';
$redirect_uri = 'http://localhost/MyTask/index.php';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
?>