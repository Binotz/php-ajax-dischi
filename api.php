<?php 
    // prendo i dati da database.php e li pubblico come API
    require_once __DIR__ . '/database.php';
    header('Content-Type: application/json');
    echo json_encode($database);
?>
