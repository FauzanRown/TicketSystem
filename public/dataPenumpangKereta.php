<?php
session_start();
// unset($_SESSION['data_tiket']); // ! KALO MAU MENGHAPUS DATA DARI AWAL PAKE INI
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blibli Tiket</title>
  <link rel="stylesheet" href="../src/style.css" />
</head>

<body class="main-body">
  <aside class="sidebar">
    <div class="logo-section">
      <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#1e40af">
          <path
            d="M4 15.5C4 17.43 5.57 19 7.5 19L6 20.5v.5h2l2-2H7.5C6.12 19 5 17.88 5 16.5S6.12 14 7.5 14h7v-4H7.5C5.57 10 4 11.57 4 13.5S5.57 17 7.5 17h9c1.93 0 3.5-1.57 3.5-3.5S18.43 10 16.5 10H14V7h4v2h1.5c.83 0 1.5.67 1.5 1.5S20.33 12 19.5 12H18c-1.1 0-2 .9-2 2s.9 2 2 2h1.5c.83 0 1.5.67 1.5 1.5S20.33 19 19.5 19H18v2h-1.5l-2-2h-7l-2 2H6v-.5L7.5 17c-1.93 0-3.5-1.57-3.5-3.5V4H4v11.5z">
          </path>
        </svg>
      </div>
      <div>
        <h1 class="title">Blibli Tiket</h1>
        <h5>Murah, Aman, Cepat</h5>
      </div>
    </div>

    <div class="menu-section">
      <h2 class="menu-title">Menu Utama</h2>
      <nav class="menu-list">
        <a href="../public/index.php" class="link-tombol">
          <div class="nav-tombol">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor"
                d="M11 17h2v-4h4v-2h-4V7h-2v4H7v2h4zm1 5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
            </svg>
            <p>Tambah Tiket</p>
          </div>
        </a>

        <a href="../public/dataTicket.php" class="link-tombol">
          <div class="nav-tombol">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor"
                d="M4 20q-.825 0-1.412-.587T2 18v-3.375q0-.275.175-.475t.45-.25q.6-.2.988-.725T4 12t-.387-1.175t-.988-.725q-.275-.05-.45-.25T2 9.375V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v3.375q0 .275-.175.475t-.45.25q-.6.2-.987.725T20 12t.388 1.175t.987.725q.275.05.45.25t.175.475V18q0 .825-.587 1.413T20 20zm5.5-3h5.05q.2 0 .325-.125T15 16.55v-.275q0-.125-.062-.237t-.188-.163L14 15.5q.825 0 1.413-.587T16 13.5V9q0-1.075-.925-1.537T12 7q-2.075 0-3.037.475T8 9v4.5q0 .825.588 1.413T10 15.5l-.725.35q-.125.05-.2.175T9 16.3v.2q0 .2.15.35t.35.15m.75-2.5q-.325 0-.537-.213T9.5 13.75t.213-.537t.537-.213t.538.213t.212.537t-.213.538t-.537.212m3.5 0q-.325 0-.537-.213T13 13.75t.213-.537t.537-.213t.538.213t.212.537t-.213.538t-.537.212M9.5 12V9h5v3z" />
            </svg>
            <p>Data Tiket</p>
          </div>
        </a>

        <a href="../public/dataPenumpangKereta.php" class="link-tombol">
          <div class="nav-tombol">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor" d="M2 21v-2h20v2zm1-3v-7h3v7zm5 0V6h3v12zm5 0V9h3v9zm5 0V3h3v15z" />
            </svg>
            <p>Data Pembellian Ticket</p>
          </div>
        </a>

        <a href="../public/profile.php" class="link-tombol">
          <div class="nav-tombol">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path fill="currentColor"
                d="m16 21l-.3-1.5q-.3-.125-.562-.262T14.6 18.9l-1.45.45l-1-1.7l1.15-1q-.05-.35-.05-.65t.05-.65l-1.15-1l1-1.7l1.45.45q.275-.2.538-.337t.562-.263L16 11h2l.3 1.5q.3.125.563.275t.537.375l1.45-.5l1 1.75l-1.15 1q.05.3.05.625t-.05.625l1.15 1l-1 1.7l-1.45-.45q-.275.2-.537.338t-.563.262L18 21zM2 20v-2.8q0-.825.425-1.55t1.175-1.1q1.275-.65 2.875-1.1T10 13h.35q.15 0 .3.05q-.725 1.8-.6 3.575T11.25 20zm15-2q.825 0 1.413-.587T19 16t-.587-1.412T17 14t-1.412.588T15 16t.588 1.413T17 18m-7-6q-1.65 0-2.825-1.175T6 8t1.175-2.825T10 4t2.825 1.175T14 8t-1.175 2.825T10 12" />
            </svg>
            <p>Profile</p>
          </div>
        </a>
      </nav>
    </div>
  </aside>

  <div class="content-card">
    <div class="card-penumpang">
      <h1 class="card-penumpang-title">DATA PEMBELIAN TIKET KERETA API</h1>
      <p style="text-align: center; color: white; padding-bottom: 28px;">Data Penumpang Yang Sudah Membeli Tiket</p>

      <?php if (!empty($_SESSION['data_tiket'])): ?>
      <?php foreach ($_SESSION['data_tiket'] as $index => $tiket): ?>

      <div class="display-ticket">
        <div class="ticket-penumpang-header">
          <div>
            <div class="ticket-penumpang-title"><?= $tiket['namaKereta'] ?></div>
            <div class="ticket-penumpang-code"> Kode Tiket : KAI 100<?= $index + 1 ?></div>
          </div>
          <div class="ticket-penumpang-label"><?= $tiket['kategori'] ?></div>
        </div>

        <div class="ticket-penumpang-body">

          <img src="../image/Logo KAI.png ?>" alt="" class="logo-kai">

          <div class="ticket-penumpang-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g fill="none" fill-rule="evenodd">
                <path
                  d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                <path fill="#3119a1"
                  d="M14.72 2a5 5 0 0 1 4.855 3.802l.049.217l1.4 7c.496 2.482-.929 4.83-3.14 5.663l-.21.073L19.6 20.2a1 1 0 0 1-1.095 1.669L18.4 21.8L14.667 19H9.333L5.6 21.8a1 1 0 0 1-1.296-1.518L4.4 20.2l1.926-1.445c-2.26-.735-3.768-3.031-3.39-5.503l.04-.233l1.4-7a5 5 0 0 1 4.68-4.014L9.28 2h5.442Zm0 2H9.28a3 3 0 0 0-2.943 2.412l-1.4 7A3 3 0 0 0 7.88 17h8.242a3 3 0 0 0 2.942-3.588l-1.4-7A3 3 0 0 0 14.72 4m-6.47 9.25a1.25 1.25 0 1 1 0 2.5a1.25 1.25 0 0 1 0-2.5m7.5 0a1.25 1.25 0 1 1 0 2.5a1.25 1.25 0 0 1 0-2.5M14.61 6a1.5 1.5 0 0 1 1.416 1.005l.039.131l.75 3a1.5 1.5 0 0 1-1.324 1.858L15.36 12H8.64a1.5 1.5 0 0 1-1.481-1.735l.026-.129l.75-3a1.5 1.5 0 0 1 1.319-1.13L9.39 6zm-.39 2H9.78l-.5 2h5.44z" />
              </g>
            </svg>
          </div>

          <div class="ticket-penumpang-row">
            <div class="ticket-penumpang-detail">
              <strong>Nama Penumpang :</strong> <?= $tiket['nama'] ?>
            </div>
          </div>

          <div class="ticket-penumpang-row">
            <div class="ticket-penumpang-detail">
              <strong>Tanggal Pemesanan:</strong> <?= $tiket['tanggal'] ?>
            </div>
          </div>

          <div class="ticket-penumpang-row">
            <div class="ticket-penumpang-detail"><strong>Harga per Tiket :</strong> Rp
              <?= number_format($tiket['total'] / $tiket['jumlah'], 0, ',', '.') ?></div>
          </div>

          <div class="ticket-penumpang-row">
            <div class="ticket-penumpang-detail"><strong>Jumlah Tiket :</strong> <?= $tiket['jumlah'] ?></div>
          </div>

          <div class="ticket-penumpang-price">TOTAL PEMBAYARAN Rp. <?= number_format($tiket['total'], 0, ',', '.') ?>
          </div>
        </div>

        <div class="ticket-penumpang-footer">
          <div><b>Silahkan Tunjukan Tiket Ini Kepada Petugas Sebelum Melakukan Perjalanan</b></div>
          <div>Terima Kasih Telah Memilih Layanan Jasa PT. Kereta Api Indonesia</div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>Belum ada data pemesanan.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>

<script src="../js/dataTicket.js"></script>

</html>