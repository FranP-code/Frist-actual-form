<?php

echo print_r($_POST);

if (!isset($_POST['sumbit'])) {
    header ('Location: index.html');
};

$name = $_POST;

?>