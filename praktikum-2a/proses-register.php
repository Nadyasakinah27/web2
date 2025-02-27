<?php

//mengambil data dari file data-form-register
require_once "data-form-registrasi.php";

$nim = $_POST['nim'];
$jk = $_POST['jenis_kelamin'];
$prodi = $_POST['program_studi'];
$skill_pilihan = $_POST['skills'];
$email = $_POST['email'];
$domisili = $_POST['domisili'];

$skor_skill = skor_skill($skill_pilihan, $ar_skill);
$kategori_skill = kategori_skill($skor_skill)

function skor_skill($skill_pilihan, $ar_skill){
    $skor = 0;

    foreach($skill_pilihanas $skill){
        if(isset($ar_skill[$skill])){
            $skor = $skor + $ar_skill[$skill];
        }
    }

    return $skor;
  

  }
}
?>