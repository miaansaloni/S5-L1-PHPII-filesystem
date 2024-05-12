<?php

// non ha senso collegarsi più volte al db, quindi
include_once __DIR__ . '/db.php';

// recupero dati dal db:
$stmt = $pdo->query("SELECT * FROM users");
// prendo tutti gli utenti in un array formato php
$users=$stmt->fetchAll();

// li metto in un csv, aprendoli in modalità scrittura
$file_name = 'files/export.csv';
$file_handle = fopen($file_name, 'w');


// verifichiamo che ci sia almeno una riga, se non ci sono elementi mi restituirà un array vuoto
if ($users){
    fputcsv($file_handle, array_keys($users[0]));
}

// ora devo iterare per ogni riga del db. per ognuna ci sarà una riga nel file csv
foreach ($users as $user) {
    // per iniziare a scrivere in questo file scrivo
    fputcsv($file_handle, $user);
};

// una volta che ho finito di iterare chiudo il file

fclose($file_handle);
