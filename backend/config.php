<?php
$db_host = "156.67.212.172";
$db_user = "u5864817_kelompok7";
$db_pass = "kelompok7";
$db_name = "u5864817_buku_pembelajaran";

$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($connect->error) {
    die("Could connect to database");
}
