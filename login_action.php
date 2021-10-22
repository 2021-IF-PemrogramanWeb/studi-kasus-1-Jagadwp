<?php

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == 'jagad@mail.com' && $password == '123') {
    echo("Login Berhasil");
} else {
    echo("Login Gagal");
}