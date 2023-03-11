<?php 

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$program_studi = $_POST['program_studi'];
$skill = $_POST['skill'];
$tempat_domisili = $_POST['domisili'];
$email = $_POST['email'];
$skor = 0;

// Buat logic nentuin skor dari skill
foreach ($skill as $s){
    // cek skilll nya
    switch ($s) {
        case 'html':
            $skor += 10;
            break;
        case 'css':
            $skor += 10;
            break;
        case 'javascript':
            $skor += 20;
            break;
        case 'bootstrap':
            $skor += 20;
            break;
        case 'php':
            $skor += 30;
            break;
        case 'python':
            $skor += 30;
            break;
        case 'java':
            $skor += 50;
            break;  
        default:
            $skor = 0;
            break;
    }
}

// KATEGORI SKILL
$nilai_skill;
if ($skor >= 100 && $skor <= 150) {
    $nilai_skill = "Sangat Baik";
} elseif ($skor >= 60 && $skor <= 100) {
    $nilai_skill = "Baik";
} elseif ($skor >= 40 && $skor <= 60) {
    $nilai_skill = "Cukup Baik";
} elseif ($skor >= 0 && $skor <= 40) {
    $nilai_skill = "Kurang";
} else {
    $nilai_skill = "Tidak Memadai";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Pendaftaran</title>
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran</h1>
        <form method="POST" action="form.php" style="background-color: lightgoldenrodyellow;">
        <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
        <input id="nim" name="nim" type="text" class="form-control">
        </div>
        </div> 
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                    <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
    <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program_studi" name="program_studi" class="custom-select">
        <option value="Tehnik Infromatika">Tehnik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
      </select>
    </div>
  </div> 
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html">
                        <label for="skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css">
                        <label for="skill[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript">
                        <label for="skill[]_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap">
                        <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php">
                        <label for="skill[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python">
                        <label for="skill[]_5" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java">
                        <label for="skill[]_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="depok">Depok</option>
        <option value="bogor">Bogor</option>
        <option value="bekasi">Bekasi</option>
        <option value="bandung">Bandung</option>
        <option value="banten">Banten</option>
      </select>
    </div>
    </div>
    <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="email" class="form-control">
    </div>
  </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <?php 
        
        echo "NIM : " . $nim . "<br>";
        echo "Nama : " . $nama . "<br>";
        echo "Jenis Kelamin : " . $jk . "<br>";
        echo "Program Studi : " . $program_studi . "<br>";
        echo "Skill Web & Programming : ";
        foreach ($skill as $s){
            echo $s . ",";        
        }
        echo "Tempat Domisili : " . $tempat_domisili . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Kategori :" . $nilai_skill . "<br>";
        echo "Skor : " . $skor;
        ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>