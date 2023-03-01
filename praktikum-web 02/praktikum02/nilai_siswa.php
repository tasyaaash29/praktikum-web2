<?php
    $proses = $_POST["kirim"];
    $nama_siswa = $_POST["Nama"];
    $mata_kuliah = $_POST["matkul"];
    $nilai_uts = $_POST["uts"];
    $nilai_uas = $_POST["nilai_uas"];
    $nilai_tugas = $_POST["nilai_tugas"];

    //Variabel Total Nilai
    $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    //echo $total_nilai;

    //Logic Status
    $status;

    if ($total_nilai >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    //Logic Grade 
    if ($total_nilai >= 85 && $total_nilai <= 100) {
        $grade = "A";
    } elseif ($total_nilai >= 70 && $total_nilai < 85) {
        $grade = "B";
    } elseif ($total_nilai >= 56 && $total_nilai < 70) {
        $grade = "C";
    } elseif ($total_nilai >= 36 && $total_nilai < 56) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    //Logic Predikat
    switch ($grade) {
        case "A":
            $predikat = "Sangat Memuaskan";
            break;
        case "B":
            $predikat = "Memuaskan";
            break;
        case "C":
             $predikat = "Cukup";
             break;
        case "D":
             $predikat = "Kurang";
             break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
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

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 align="center">Daftar Nilai Siswa</h1>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Nilai UTS</th>
      <th scope="col">Nilai UAS</th>
      <th scope="col">Nilai Tugas</th>
      <th scope="col">Grade</th>
      <th scope="col">Predikat</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
   <tr>
    <td><?php
        echo $nama_siswa;
    ?></td>
    <td><?php
        echo $mata_kuliah;
    ?></td>
    <td><?php
        echo $nilai_uts;
    ?></td>
    <td><?php
        echo $nilai_uas;
    ?></td>
    <td><?php
        echo $nilai_tugas;
    ?></td>
    <td><?php
        echo $grade;
    ?></td>
    <td><?php
        echo $predikat;
    ?></td>
    <td><?php
        echo $status;
    ?></td>
   </tr>
  </tbody>
</table>
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