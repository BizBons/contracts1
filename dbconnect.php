<?php
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
define("HOST", "localhost");
// Database user
define("DBUSER", "root");
// Database password
define("PASS", "");
// Database name
define("DB", "olvoting_db");


error_reporting(1);
// mysqli_connect('localhost', 'root', 'hill1407') or die(mysqli_error());
// mysqli_select_db('poll') or die(mysqli_error());

$conn = new mysqli(HOST, DBUSER, PASS, DB);

if ($conn->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

?>
