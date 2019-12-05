<?php
// $mahasiswa = [
//     [
//     "nama" => "Erdika Rhamadan Kusumah",
//     "nrp" => "173040002",
//     "email" => "erdikar.kusumah@mail.unpas.ac.id"
//     ],
//     [
//         "nama" => "Erdika Rhamadan Kusumah",
//         "nrp" => "173040002",
//         "email" => "erdikar.kusumah@mail.unpas.ac.id"
//     ];


    $dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
    $db = $dbh->prepare('SELECT * FROM mahasiswa');
    $db->execute();
    $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);
    $data = json_encode($mahasiswa);
    echo $data;
