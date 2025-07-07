const dataTiket = [
  ["Argo Bromo", "Surabaya", "06:00", 150000],
  ["Taksaka", "Yogyakarta", "07:30", 200000],
  ["Lodaya", "Bandung", "08:15", 170000],
  ["Argo Wilis", "Jakarta", "05:45", 180000],
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

const container = document.getElementById("daftartiket");

dataTiket.forEach(([kereta, tujuan, jam, harga], index) => {
  const card = document.createElement("div");
  card.className = "ticket-card";

  card.innerHTML = `
    <div class="ticket-header">
      <div>
        <h2 class="ticket-title">${kereta}</h2>
        <p class="ticket-code">Kode Tiket: KA${1000 + index}</p>
      </div>
      <span class="ticket-label">Ticket</span>
    </div>

    <div class="ticket-body">
      <div class="ticket-row">
        <span class="ticket-label-left">Tujuan</span>
        <span class="ticket-value">${tujuan}</span>
      </div>
      <div class="ticket-row">
        <span class="ticket-label-left">Jam Berangkat</span>
        <span class="ticket-value">${jam}</span>
      </div>
      <div class="ticket-row">
        <span class="ticket-label-left">Harga</span>
        <span class="ticket-price">Rp ${harga.toLocaleString()}</span>
      </div>
    </div>

    <div class="ticket-footer">
      Ticket Ini Masih Tersedia
    </div>
  `;

  container.appendChild(card);
});
