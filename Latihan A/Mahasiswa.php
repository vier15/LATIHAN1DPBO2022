<?php

class Mahasiswa {

    /* Private Attribute */
    private $nim = "0000000";
    private $nama = "nama mahasiswa";
    private $prodi = "nama prodi";
    private $semester = 0;

    /* Constructor */
    public function __construct($nim = "0000000", $nama = "nama mahasiswa", $prodi = "nama prodi", $semester = 0) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    /* Setter dan Getter NIM */
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    /* Setter dan Getter Nama */
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getnama() {
        return $this->nama;
    }

    /* Setter dan Getter Prodi */
    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }

    public function getProdi() {
        return $this->prodi;
    }

    /* Setter dan Getter Semester */
    public function setSemester($semester) {
        $this->semester = $semester;
    }

    public function getSemester() {
        return $this->semester;
    }

    /* Menampilkan data Mahasiswa */
    public function tampilkanData() {
        echo "NIM      : $this->nim <br />
              Nama     : $this->nama <br />
              Prodi    : $this->prodi <br />
              Semester : $this->semester <br />";
    }

    /* Destructor */
    public function __destruct() {

	}

}

?>