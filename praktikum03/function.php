<?php 

// buat fungsi
function hitungUmur($thn_lahir) {
    // code fungsi
    $thn_sekarang = 2023;
    // hitung umur
    $umur = $thn_sekarang - $thn_lahir;

    // tampilin umur
    //echo $umur;

    // kembaliin umur
     return $umur;
    
}

// panggil fungsi
//hitungUmur(2003);
echo "umur saya adalah " . hitungUmur(2003);

?>