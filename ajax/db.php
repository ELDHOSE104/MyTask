<?php
$host_name = $DB_HOST = 'localhost';
$db_username = $DB_USER = 'root';
$db_password = $DB_PASS = 'qburst';
$db_name = $DB_NAME = 'angularcode_task';

/*login with google keys*/
$client_id = '492769946544-ktjauuhqughrgre7blu2b6cmuuir1688.apps.googleusercontent.com';
$client_secret = 'UqeCQ7pj42axoJ5E1iVu0kyr';
$redirect_uri = 'http://localhost/MyTask/index1.php';

//Database connection
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
?>
