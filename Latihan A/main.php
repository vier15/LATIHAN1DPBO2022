<?php

include "Mahasiswa.php";

/* 
Deklarasi objek Mahasiswa bernama mahasiswa1
beserta inisialisasinya 
*/
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNim("2007874");
$mahasiswa1->setNama("Raihan Fitrah V Ramadhan");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

/* Tampilkan data Mahasiswa */
$mahasiswa1->tampilkanData();

?>