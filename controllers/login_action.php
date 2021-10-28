<?php

$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "tes@tes.com" && $password == "12345") {
    echo ("Login Berhasil");
} else {
    echo ("Login Gagal");
}