<?php 
    // prendo i dati da database.php e li pubblico come API
    require_once __DIR__ . '/database.php';
    header('Content-Type: application/json');

    //se il genere viene passato a parametro, setta la variabile, altrimeti metti All di default
    if(isset($_GET['genre'])){
        $filter = $_GET['genre'];
    } else {
        $filter = 'All';
    }
    $filteredAlbums = [];


    if($filter === 'All'){
        echo json_encode($database);
    } else {
        foreach($database as $album){
            if($album['genre'] === $filter){
                $filteredAlbums[] = $album;
            }
        }
        echo json_encode($filteredAlbums);
    }
?>
