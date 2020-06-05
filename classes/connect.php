<?php
session_start();
require 'classes/banco.php';
$banco = new Banco("localhost", "medtemplate", "root", "");
?>