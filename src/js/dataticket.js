const tabel = document.getElementById("tabelTiket");
const filterTicket = document.getElementById("filterTiket");
const dataTiketKereta = [
  ["Nama Kereta", "Tujuan", "Jam Berangkat", "Harga"],
  ["Argo Bromo", "Surabaya", "06:00", 150000],
  ["Taksaka", "Yogyakarta", "07:30", 200000],
  ["Lodaya", "Bandung", "08:15", 170000],
  ["Argo Parahyangan", "Jakarta", "05:45", 180000],
  ["Serayu", "Purwokerto", "10:00", 130000],
  ["Matarmaja", "Malang", "11:20", 90000],
  ["Gajayana", "Blitar", "09:00", 160000],
  ["Sancaka", "Yogyakarta", "12:10", 140000],
  ["Singasari", "Pasuruan", "13:30", 120000],
  ["Majapahit", "Semarang", "14:45", 110000],
  ["Argo Wilis", "Surabaya", "15:00", 190000],
  ["Turangga", "Solo", "16:20", 150000],
  ["Jayakarta", "Jakarta", "17:15", 135000],
  ["Kutojaya", "Kutoarjo", "18:00", 100000],
  ["Tawang Jaya", "Tegal", "19:40", 115000],
  ["Kaligung", "Brebes", "20:10", 95000],
  ["Bogowonto", "Kebumen", "21:30", 105000],
  ["Progo", "Wates", "22:00", 98000],
  ["Menoreh", "Magelang", "22:45", 110000],
  ["Senja Utama", "Cirebon", "23:15", 125000],
];

dataTiketKereta.forEach((baris, i) => {
  const tr = document.createElement("tr");

  baris.forEach((data) => {
    const cell = document.createElement(i === 0 ? "th" : "td");
    cell.textContent = data;
    cell.className = "border px-4 py-2 bg-while";
    tr.appendChild(cell);
    tr.className = "border px-4 py-2 hover:bg-blue-100";
  });

  tabel.appendChild(tr);
});

function urutkanTiket() {
  const kriteria = document.getElementById("filltertiket").value;

  // Salin data tanpa header
  const header = dataTiketKereta[0];
  const data = dataTiketKereta.slice(1);

  // Bubble Sort
  for (let i = 0; i < data.length - 1; i++) {
    for (let j = 0; j < data.length - i - 1; j++) {
      const harga1 = data[j][3];
      const harga2 = data[j + 1][3];

      if (
        (kriteria === "hargaTerendah" && harga1 > harga2) ||
        (kriteria === "hargaTertinggi" && harga1 < harga2)
      ) {
        // Tukar posisi
        const temp = data[j];
        data[j] = data[j + 1];
        data[j + 1] = temp;
      }
    }
  }

  // Kosongkan tabel
  tabel.innerHTML = "";

  // Tampilkan kembali
  const semuaData = [header, ...data];
  semuaData.forEach((baris, i) => {
    const tr = document.createElement("tr");

    baris.forEach((data) => {
      const cell = document.createElement(i === 0 ? "th" : "td");
      cell.textContent = data;
      cell.className = "border px-4 py-2 bg-while";
      tr.appendChild(cell);
      tr.className = "border px-4 py-2 hover:bg-blue-100";
    });

    tabel.appendChild(tr);
  });
}
