    <?php
    $nama_siswa= "Sachio";
    $kelas= "XII PPLG 3" ;
    $nilai_tugas= 90;
    $nilai_UTS= 86;
    $nilai_UAS= 84;

    $nilai_Akhir = ($nilai_tugas * 0.30) + ($nilai_UTS * 0.30) + ($nilai_UAS * 0.40);

    if ($nilai_Akhir >= 90) {
    $predikat = 'A';
} elseif ($nilai_Akhir >= 80) {
    $predikat = 'B';
} elseif ($nilai_Akhir >= 75) {
    $predikat = 'C';
} elseif ($nilai_Akhir >= 60) {
    $predikat = 'D';
} else {
    $predikat = 'E';
}

if ($nilai_Akhir >= 75) {
    $status = 'LULUS';
} else {
    $status = 'TIDAK LULUS';
}
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil penilaian siswa</title>
</head>
<body>
    <h1>Hasil Penilaian Siswa
    </h1><br>

    <?php
    echo 'Nama: ' . $nama_siswa . '<br>';
    echo 'Kelas: ' . $kelas . '<hr>';
    echo 'Nilai Tugas: ' . $nilai_tugas . '<br>';
    echo 'Nilai UTS: ' . $nilai_UTS . '<br>';
    echo 'Nilai UAS: ' . $nilai_UAS . '<hr>';
    echo 'Nilai Akhir: ' . $nilai_Akhir . '<br>';
    echo 'Predikat: ' . $predikat . '<br>';
    echo 'Status: ' . $status . '<br>';
    ?>
</body>
</html>