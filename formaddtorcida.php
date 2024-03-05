<?php
    require_once 'init.php';
    $PDO = db_connect();
    $sql = "SELECT id, nome, maiorConquista FROM timess ORDER BY estado ASC";
    $stmt = $PDO->prepare($sql);
    $stmt->execute();
?>
