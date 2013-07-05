<?php

//text100dev
// define('DB_HOST', 'localhost');
// define('DB_DATABASE', 'stresstest');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'Digital100');

//localhost
define('DB_HOST', 'localhost');
define('DB_DATABASE', 'stresstest');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_error());

?>