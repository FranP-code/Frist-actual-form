<?php

echo print_r($_POST);

if (!isset($_POST['sumbit'])) {
    header ('Location: index.html');
}

echo 'hola';

$name = $_POST['name'];

?>