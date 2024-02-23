<?php

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];

    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }

    public function setNilai($index,$mapel, $nilai) {
        $this->daftarNilai[$index] = new Nilai($mapel,$nilai);
    }
}
class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

function generateRandomName($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyz';
    $randomName = '';

    for ($i=0; $i < $length; $i++) { 
        $randomName .= $chars[rand(0, strlen($chars)-1)];
    }

    return $randomName;
}

function generateRandomMapel() {
    $mapels = ['inggris', 'indonesia', 'jepang'];

    return $mapels[array_rand($mapels)];
}

$siswa = new Siswa('123', 'agil');
$siswa->setNilai(0,"inggris", 100);
echo "NRP : $siswa->nrp,  Nama : $siswa->nama,  Daftar Nilai : ";
foreach ($siswa->daftarNilai as $nilai) {
    echo "$nilai->mapel : $nilai->nilai" . PHP_EOL;
}

$listSiswa = [];
for ($i=0; $i < 10; $i++) { 
    $nama = generateRandomName(10);
    $mapel = generateRandomMapel();
    $nilai = rand(75,100);
    $siswa = new Siswa($i+1, $nama);
    $siswa->setNilai(0, $mapel, $nilai);
    array_push($listSiswa, $siswa);
}


foreach ($listSiswa as $siswa) {
    echo "NRP : $siswa->nrp,  Nama : $siswa->nama,  Daftar Nilai : ";
    foreach ($siswa->daftarNilai as $nilai) {
        echo "$nilai->mapel : $nilai->nilai" . PHP_EOL;
    }
}

?>