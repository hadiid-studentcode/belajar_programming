<?php
require_once 'data.php';




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Raport</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1><?= $nama_sekolah ?></h1>
        <h2>Kelas : <?= $kelas ?></h2>
        <h3>Wali Kelas : <?= $wali_kelas ?></h3>
    </header>
    <section>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Rata-rata</th>
                    <th>Status Kelulusan</th>
                    <th>Grade</th>

                </tr>
            </thead>

            <tbody>
                <?php $index = 1; ?>
                <?php foreach ($data_siswa as $siswa): ?>
                    <tr>
                        <td><?= $index++; ?></td>
                        <td><?= $siswa['nama'] ?></td>
                        <td><?= hitungRataRata($siswa['nilai']) ?></td>
                        <td>



                            <?php if (hitungRataRata($siswa['nilai']) >= 70) : ?>
                                <span class="lulus">Lulus</span>
                            <?php else : ?>
                                <span class="tidak-lulus">Tidak Lulus</span>
                            <?php endif; ?>

                        </td>
                        <td>
                            <?= tentukanGrade(hitungRataRata($siswa['nilai'])) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
    <footer>
        <p>&copy; 2023 SMK Koding Nusantara</p>
    </footer>

    <script src="scripts.js"></script>
</body>

</html>