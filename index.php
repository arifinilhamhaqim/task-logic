<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
<h2 style="text-align: center;">Daftar Nilai Mahasiswa Program Studi </h2>
    <h3 style="text-align: center;">Informatika Dan Manajemen</h3>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Nilai Pertama</th>
            <th>Nilai Kedua</th>
            <th>Rata-Rata</th>
            <th>Total Nilai</th>
            <th>Lulus = Nilai > 150</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data_array = [
            ["nama_mahasiswa" => "Rifqi Ismail", "program_studi" => "Informatika", "nilai_pertama" => 70, "nilai_kedua" => 93],
            ["nama_mahasiswa" => "Sadad Nabil", "program_studi" => "Manajemen", "nilai_pertama" => 80, "nilai_kedua" => 62],
            ["nama_mahasiswa" => "Zaenal Arham", "program_studi" => "Informatika", "nilai_pertama" => 87, "nilai_kedua" => 63],
            ["nama_mahasiswa" => "Indah Salma", "program_studi" => "Informatika", "nilai_pertama" => 65, "nilai_kedua" => 90],
        ];

        foreach ($data_array as $index => $data) {
            $total_nilai = $data['nilai_pertama'] + $data['nilai_kedua'];
            $rata_rata = $total_nilai / 2;
            $status = $total_nilai > 150 ? "LULUS" : "TIDAK LULUS";
            $row_class = $status == "LULUS" ? "lulus" : "tidak-lulus";
        ?>
        <tr class="<?= $row_class ?>">
            <td><?= $index + 1 ?></td>
            <td><?= $data['nama_mahasiswa'] ?></td>
            <td><?= $data['program_studi'] ?></td>
            <td><?= $data['nilai_pertama'] ?></td>
            <td><?= $data['nilai_kedua'] ?></td>
            <td><?= number_format($rata_rata, 2) ?></td>
            <td><?= $total_nilai ?></td>
            <td><?= $status ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>