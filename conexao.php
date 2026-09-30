<?php

$host = "seu IP";
$usuario = "seu usuario";
$senha = "sua senha";
$banco = "seu bcd";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);
?>