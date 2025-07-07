// Fungsi PHP untuk menghitung total harga
function hitungTotalHarga($namaKereta, $jumlahTiket) {
$hargaTiket = [
"Argo Bromo" => 150000,
"Taksaka" => 200000,
"Lodaya" => 170000,
"Argo Wilis (Jakarta)" => 180000,
"Serayu" => 130000,
"Matarmaja" => 90000,
"Gajayana" => 160000,
"Sancaka" => 140000,
"Singasari" => 120000,
"Majapahit" => 110000,
"Argo Wilis (Surabaya)" => 190000,
"Turangga" => 150000,
"Jayakarta" => 135000,
"Kutojaya" => 100000,
"Tawang Jaya" => 115000,
"Kaligung" => 95000,
"Bogowonto" => 105000,
"Progo" => 98000,
"Menoreh" => 110000,
"Senja Utama" => 125000,
];

// Ambil harga dari nama kereta
$harga = $hargaTiket[$namaKereta] ?? 0;

// Hitung total
return $harga * $jumlahTiket;
}

// Proses form jika ada data yang dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nama = htmlspecialchars($_POST['nama']);
$tanggal = htmlspecialchars($_POST['tanggal']);
$namaKereta = htmlspecialchars($_POST['namaKereta']);
$jumlahTiket = (int)$_POST['jumlah'];
$kategori = htmlspecialchars($_POST['kategori']);

// 🟢 FIXED: urutan parameter diperbaiki
$totalHarga = hitungTotalHarga($namaKereta, $jumlahTiket);
}