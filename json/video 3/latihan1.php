<?php 

// $mahasiswa = [
//     [
//         "nama" => "Anita",
//         "nrp" => "2217020046",
//         "email" => "anitava@gmail.com"
//     ],
//     [
//         "nama" => "Aminah",
//         "nrp" => "2217020069",
//         "email" => "aminah@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root', '');
$db = $dbh->prepare('SELECT * FROM  mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>