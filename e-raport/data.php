<?php
// Data Siswa dan Nilai
$nama_sekolah = "SMK Koding Nusantara";
$kelas = "11-RPL";
$wali_kelas = "Bapak Setiawan";

$data_siswa = [
    [
        "nama" => "Andi Pratama",
        "nilai" => [
            "Matematika" => 85,
            "Bahasa Indonesia" => 90,
            "Bahasa Inggris" => 88
        ]
    ],
    [
        "nama" => "Bunga Citra",
        "nilai" => [
            "Matematika" => 65,
            "Bahasa Indonesia" => 75,
            "Bahasa Inggris" => 70
        ]
    ],
    [
        "nama" => "Charlie Darmawan",
        "nilai" => [
            "Matematika" => 20,
            "Bahasa Indonesia" => 88,
            "Bahasa Inggris" => 95
        ]
    ],
    [
        "nama" => "Diana Sari",
        "nilai" => [
            "Matematika" => 50,
            "Bahasa Indonesia" => 65,
            "Bahasa Inggris" => 100
        ]
    ]
];

// Fungsi untuk menghitung rata-rata nilai
function tentukanGrade($rata_rata)
{
    if ($rata_rata >= 90 && $rata_rata <= 100) {
        return "A";
    } elseif ($rata_rata >= 80 && $rata_rata <= 89) {
        return "B";
    } elseif ($rata_rata >= 70 && $rata_rata <= 79) {
        return "C";
    } elseif ($rata_rata >= 60 && $rata_rata <= 69) {
        return "D";
    } elseif ($rata_rata >= 0 && $rata_rata <= 59) {
        return "E";
    } else {
        return "Invalid";
    }
}

function hitungRataRata($nilai)
{
    $total = array_sum($nilai);
    $jumlah = count($nilai);
    $rata_rata = $jumlah > 0 ? $total / $jumlah : 0;
    return number_format($rata_rata, 2);
    
}
