<?php
function calculate_kpi($absence, $target_achievement, $event_participation) {
    // Menghitung kontribusi masing-masing faktor terhadap KPI
    $absence_score = min(10, 10 - $absence) * 0.39;
    $target_score = $target_achievement * 0.45;
    $event_score = $event_participation * 0.16;

    // Menghitung total KPI
    $kpi = $absence_score + $target_score + $event_score;

    return $kpi;
}

// Input data karyawan
$nama = "Budi";
$jabatan = "SPV";
$jumlah_absen = 5;
$target_penjualan = 50;
$partisipasi_event = 10;

// Menghitung KPI menggunakan fungsi calculate_kpi
$kpi = calculate_kpi($jumlah_absen, $target_penjualan / 100, $partisipasi_event / 10);

// Menampilkan hasil KPI
echo "Nama: " . $nama . "\n";
echo "Jabatan: " . $jabatan . "\n";
echo "KPI: " . $kpi . "\n";
?>
