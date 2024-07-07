<?php
$nilai = 50;
$nilaiHuruf = '';
$nilaiNumerik = 0.0;

if ($nilai >= 80.00 && $nilai <= 100.00) {
    $nilaiHuruf = 'A';
    $nilaiNumerik = 4.00;
} elseif ($nilai >= 76.25 && $nilai <= 79.99) {
    $nilaiHuruf = 'A-';
    $nilaiNumerik = 3.67;
} elseif ($nilai >= 68.75 && $nilai <= 76.24) {
    $nilaiHuruf = 'B+';
    $nilaiNumerik = 3.33;
} elseif ($nilai >= 65.00 && $nilai <= 68.74) {
    $nilaiHuruf = 'B';
    $nilaiNumerik = 3.00;
} elseif ($nilai >= 62.50 && $nilai <= 64.99) {
    $nilaiHuruf = 'B-';
    $nilaiNumerik = 2.67;
} elseif ($nilai >= 57.50 && $nilai <= 62.49) {
    $nilaiHuruf = 'C+';
    $nilaiNumerik = 2.33;
} elseif ($nilai >= 55.00 && $nilai <= 57.49) {
    $nilaiHuruf = 'C';
    $nilaiNumerik = 2.00;
} elseif ($nilai >= 51.25 && $nilai <= 54.99) {
    $nilaiHuruf = 'C-';
    $nilaiNumerik = 1.67;
} elseif ($nilai >= 43.75 && $nilai <= 51.24) {
    $nilaiHuruf = 'D+';
    $nilaiNumerik = 1.33;
} elseif ($nilai >= 40.00 && $nilai <= 43.74) {
    $nilaiHuruf = 'D';
    $nilaiNumerik = 1.00;
} elseif ($nilai >= 0.00 && $nilai <= 39.99) {
    $nilaiHuruf = 'E';
    $nilaiNumerik = 0.00;
}

if($nilai >= 60){
    echo "Nilai anda $nilai, anda lulus. Nilai huruf: $nilaiHuruf, Nilai numerik: $nilaiNumerik";
} else {
    echo "Nilai anda $nilai, anda gagal. Nilai huruf: $nilaiHuruf, Nilai numerik: $nilaiNumerik";
}
?>
