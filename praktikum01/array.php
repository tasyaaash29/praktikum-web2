<?php
// Buat Array
$animals = ["kucing","ayam","ikan","burung"];
// Tampilin kucing
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

// looping array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

echo "<br>";
// buat array asosiatif
$mahasiswa = ["Nama"=>"Tasya", "Umur"=>19, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"] . "<br>";

foreach( $mahasiswa as $key => $value) {
    echo $key . ":" . $value;
    echo "<br>";
}
echo "<br>";

//buat array multidimensi
$dosen = [
    ["Pak.Rojul", "web"],
    ["pak.Reza", "DDP"],
    ["pak.Lukman", "OS"]
];

echo $dosen[0][1];
echo "<br>";

foreach($dosen as $dsn) {
echo "Nama Dosen :" . $dsn[0];
echo "Matkul : " . $dsn[1];
echo "<br>";
}
?>