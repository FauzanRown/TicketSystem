// totalHarga.js
function hitungTotal() {
  const namaKereta = document.getElementById("namaKereta").value;
  const jumlah = parseInt(document.getElementById("jumlah").value) || 0;

  const dataTiket = {
    "Argo Bromo": 150000,
    Taksaka: 200000,
    Lodaya: 170000,
    "Argo Wilis (Jakarta)": 180000,
    Serayu: 130000,
    Matarmaja: 90000,
    Gajayana: 160000,
    Sancaka: 140000,
    Singasari: 120000,
    Majapahit: 110000,
    "Argo Wilis (Surabaya)": 190000,
    Turangga: 150000,
    Jayakarta: 135000,
    Kutojaya: 100000,
    "Tawang Jaya": 115000,
    Kaligung: 95000,
    Bogowonto: 105000,
    Progo: 98000,
    Menoreh: 110000,
    "Senja Utama": 125000,
  };

  const harga = dataTiket[namaKereta] || 0;
  const total = harga * jumlah;

  // Tampilkan hanya di layar
  document.getElementById("displaybayar").textContent =
    "Rp. " + total.toLocaleString("id-ID");
}
document.getElementById("namaKereta").addEventListener("change", hitungTotal);
document.getElementById("jumlah").addEventListener("input", hitungTotal);
