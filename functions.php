<?php
//prendiamo i dati dal file lista. json con il metodo file_get_contents
$fileList = file_get_contents("./lista.json");
//var_dump($fileList);

// convertiamo il file json in una stringa di php con json_decode()

$listDischi = json_decode($fileList, true);
//var_dump($listDischi);


//per aggiungere un nuovo disco quindi per manipolare il file json usiamo file_put_contents()


//devo prima leggere il file 

//creiamo un array associativo in moda tale che poi sia convertito in json


if (isset($_POST["titolo"]) && isset($_POST["artista"])) {

    $newdisco = [
        "titolo" => $_POST["titolo"],
        "artista" => $_POST["artista"],
        "url_cover" => $_POST["url_cover"],
        "anno_pubblicazione" => $_POST["anno_pubblicazione"],
        "genere" => $_POST["genere"]
    ];
    // aggiungiamo il nuovo disco all’array
    $listDischi[] = $newdisco;

    // converitamo in json l array

    $json_string_update = json_encode($listDischi, true);
    //var_dump($json_string_update);

    file_put_contents("./lista.json", $json_string_update);
    header("Location: ./index.php");
    exit;
};
