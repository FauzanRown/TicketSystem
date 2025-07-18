const dataTiket = [
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

const container = document.getElementById("ticketContainer");

dataTiket.forEach(([kereta, tujuan, jam, harga], index) => {
  const card = document.createElement("div");
  card.className =
    "max-w-md bg-white shadow-lg rounded-xl overflow-hidden border border-gray-200 p-4";

  card.innerHTML = `
    <div class="flex justify-between items-center bg-indigo-600 text-white p-3 rounded-md mb-3">
      <div>
        <h2 class="text-lg font-bold">${kereta}</h2>
        <p class="text-xs">Kode Tiket: KA${1000 + index}</p>
      </div>
      <span class="text-xs bg-white text-indigo-600 font-semibold px-2 py-1 rounded-full">Ticket</span>
    </div>

    <div class="space-y-2 text-sm">
      <div class="flex justify-between">
        <span class="text-gray-500">Tujuan</span>
        <span class="font-semibold">${tujuan}</span>
      </div>
      <div class="flex justify-between">
        <span class="text-gray-500">Jam Berangkat</span>
        <span class="font-semibold">${jam}</span>
      </div>
      <div class="flex justify-between">
        <span class="text-gray-500">Harga</span>
        <span class="font-bold text-green-600">Rp ${harga.toLocaleString()}</span>
      </div>
    </div>
    <div class="bg-gray-100 text-center mt-3 p-2 text-xs text-gray-600 rounded">
      Ticket Ini Masih Tersedia
    </div>
  `;

  container.appendChild(card);
});
