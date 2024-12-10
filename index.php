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
            ["id" => "1", "nama_mahasiswa" => "Rifqi Ismail", "program_studi" => "Informatika", "nilai_pertama" => 70, "nilai_kedua" => 93],
            ["id" => "2", "nama_mahasiswa" => "Sadad Nabil", "program_studi" => "Manajemen", "nilai_pertama" => 80, "nilai_kedua" => 62],
            ["id" => "3", "nama_mahasiswa" => "Friska Aprilia", "program_studi" => "Akuntansi", "nilai_pertama" => 92, "nilai_kedua" => 77],
            ["id" => "4", "nama_mahasiswa" => "Zaenal Arham", "program_studi" => "Informatika", "nilai_pertama" => 87, "nilai_kedua" => 63],
            ["id" => "5", "nama_mahasiswa" => "Laila Shafira", "program_studi" => "Pendidikan Matematika", "nilai_pertama" => 67, "nilai_kedua" => 83],
            ["id" => "6", "nama_mahasiswa" => "Indah Salma", "program_studi" => "Informatika", "nilai_pertama" => 65, "nilai_kedua" => 90],
        ];

        $filtered_data = array_filter($data_array, function ($item) {
            return in_array($item['program_studi'], ['Informatika', 'Manajemen']);
        });

        foreach ($filtered_data as $index => $data) {
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
