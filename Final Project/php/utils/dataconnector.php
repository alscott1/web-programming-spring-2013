<?php
$mysqli = new mysqli("localhost", "ascott1_admin", "X2e1pt58", "ascott1");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}