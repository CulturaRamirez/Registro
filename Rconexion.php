<?php
$mysqli = new mysqli("localhost","root","","registro");
if ($mysqli ->connect_error) {
    echo"Fallo al conectar a MySQL:
    (".$msqli ->connect_error.")".$msqli ->connect_error;
}
