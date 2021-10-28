<?php

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == 'fulan@mail.com' && $password == '123') {
    echo("Login Berhasil");
    $status = 'success';
} else {
    echo("Login Gagal");
    $status = 'fail';
}
?>