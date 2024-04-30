<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar dan Konten</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #69888e;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .sidebar {
      position: fixed;
      left: -250px; /* Sidebar default tersembunyi */
      top: 0;
      bottom: 0;
      width: 250px;
      background-color: #69888e;
      color: #fff;
      padding-top: 20px;
      transition: left 0.3s ease; /* Transisi ketika menu diklik */
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar ul li {
      padding: 16px;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
    }

    .sidebar ul li a:hover {
      background-color: #69888e;
    }

    .content {
      margin-left: 240px;
      padding: 20px;
    }

    .image {
      width: 180px;
      margin-left: 30px;
      border-radius: 90px;
    }

    .petugas {
      font-family: 'Times New Roman', Times, serif;
      margin-left: 60px;
    }

    .search {
      margin-left: 1100px;
    }

    .teks {
      margin-right: 10px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }

    .menu-icon {
      position: absolute;
      top: 20px;
      left: 270px;
      cursor: pointer;
      font-size: 24px;
    }

    /* Tambahkan gaya untuk konten yang akan ditampilkan */
    .konten {
      display: none;
    }

    /* Tampilkan konten ketika kelas aktif diterapkan */
    .konten.active {
      display: block;
    }
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width:1100px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }

  .btn {
    padding: 8px 12px;
    border: none;
    cursor: pointer;
  }

  .btn-primary {
    background-color: #69888e;
    color: #fffff;
    margin-top: 2%;
  }

  .btn-danger {
    background-color: #dc3545;
    color: #fff;
  }

  </style>
</head>
<body>
<header>
  <form class="search">
    <label for="search" class="teks">Search</label>
    <input id="search" type="search" pattern=".\S." required>
    <span class="caret"></span>
  </form>
</header>
<div class="sidebar" id="sidebar"> <!-- Tambahkan id "sidebar" -->
  <i class="fas fa-bars menu-icon" id="menuIcon"></i> <!-- Icon menu -->
  <img src="{{ asset('images/petugas1.jpg') }}" class="image">
  <h3 class="petugas">Person Petugas</h3>
  <ul>
    <!-- Tambahkan atribut data-target dengan nilai yang sesuai dengan id konten -->
    <li><a href="#" data-target="dataKategori">Data Kategori</a></li>
    <li><a href="#" data-target="dataBuku">Data Buku</a></li>
    <li><a href="#" data-target="dataAnggota">Data Anggota</a></li>
    <li><a href="#" data-target="peminjaman">Peminjaman</a></li>
    <li><a href="#" data-target="pengembalian">Pengembalian</a></li>
    <li><a href="#" data-target="logOut">Log Out</a></li>
  </ul>
</div>

<div class="content">
  <h1>Selamat Datang, Person</h1>
  <!-- Tambahkan kontainer untuk setiap konten -->
  <div id="dataKategori" class="konten">
    <div class="container">
        <h2>Data Kategori Buku</h2>
        <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
        <table id="tableData">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="tbodyData">
            <!-- Data akan ditampilkan di sini -->
          </tbody>
        </table>
      </div>

      <!-- Modal Tambah/Edit Data -->
      <div id="modalData" style="display: none;">
        <div class="container">
          <h2 id="modalTitle">Tambah Data Kategori</h2>
          <form id="formKategori">
            <label for="kategori">Kategori:</label><br>
            <input type="text" id="kategori" name="kategori" required><br><br>
            <input type="submit" value="Simpan" class="btn btn-primary">
            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
          </form>
        </div>
      </div>
  </div>
  <div id="dataBuku" class="konten">
    <div class="container">
        <h2>Data Buku</h2>
        <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
        <table id="tableData">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="tbodyData">
            <!-- Data akan ditampilkan di sini -->
          </tbody>
        </table>
      </div>

      <!-- Modal Tambah/Edit Data -->
      <div id="modalData" style="display: none;">
        <div class="container">
          <h2 id="modalTitle">Tambah Data Kategori</h2>
          <form id="formKategori">
            <label for="kategori">Kategori:</label><br>
            <input type="text" id="kategori" name="kategori" required><br><br>
            <input type="submit" value="Simpan" class="btn btn-primary">
            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
          </form>
        </div>
      </div>
  </div>
  <div id="dataAnggota" class="konten">
    <div class="container">
        <h2>Data Kategori Buku</h2>
        <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
        <table id="tableData">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="tbodyData">
            <!-- Data akan ditampilkan di sini -->
          </tbody>
        </table>
      </div>

      <!-- Modal Tambah/Edit Data -->
      <div id="modalData" style="display: none;">
        <div class="container">
          <h2 id="modalTitle">Tambah Data Kategori</h2>
          <form id="formKategori">
            <label for="kategori">Kategori:</label><br>
            <input type="text" id="kategori" name="kategori" required><br><br>
            <input type="submit" value="Simpan" class="btn btn-primary">
            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
          </form>
        </div>
      </div>
  </div>
  <div id="peminjaman" class="konten">
    <div class="container">
        <h2>Data Kategori Buku</h2>
        <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
        <table id="tableData">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="tbodyData">
            <!-- Data akan ditampilkan di sini -->
          </tbody>
        </table>
      </div>

      <!-- Modal Tambah/Edit Data -->
      <div id="modalData" style="display: none;">
        <div class="container">
          <h2 id="modalTitle">Tambah Data Kategori</h2>
          <form id="formKategori">
            <label for="kategori">Kategori:</label><br>
            <input type="text" id="kategori" name="kategori" required><br><br>
            <input type="submit" value="Simpan" class="btn btn-primary">
            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
          </form>
        </div>
      </div>
  </div>
  <div id="pengembalian" class="konten">
    <div class="container">
        <h2>Data Kategori Buku</h2>
        <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
        <table id="tableData">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="tbodyData">
            <!-- Data akan ditampilkan di sini -->
          </tbody>
        </table>
      </div>

      <!-- Modal Tambah/Edit Data -->
      <div id="modalData" style="display: none;">
        <div class="container">
          <h2 id="modalTitle">Tambah Data Kategori</h2>
          <form id="formKategori">
            <label for="kategori">Kategori:</label><br>
            <input type="text" id="kategori" name="kategori" required><br><br>
            <input type="submit" value="Simpan" class="btn btn-primary">
            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
          </form>
        </div>
      </div>
  </div>
  <div id="logOut" class="konten">

  </div>
</div>

<script>
  const menuIcon = document.getElementById('menuIcon');
  const sidebar = document.getElementById('sidebar');

  menuIcon.addEventListener('click', () => {
    if (sidebar.style.left === '-250px') {
      sidebar.style.left = '0';
    } else {
      sidebar.style.left = '-250px';
    }
  });

  // Ambil semua elemen <a> di dalam sidebar
  const sidebarLinks = document.querySelectorAll('.sidebar ul li a');

  // Loop melalui setiap link dan tambahkan event listener
  sidebarLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      const target = event.target.getAttribute('data-target'); // Ambil nilai dari atribut data-target
      const konten = document.getElementById(target); // Temukan elemen konten berdasarkan id

      // Sembunyikan semua konten
      document.querySelectorAll('.konten').forEach(element => {
        element.classList.remove('active');
      });

      // Tampilkan konten yang sesuai dengan link yang diklik
      konten.classList.add('active');
    });
  });

  const modal = document.getElementById('modalData');
  const btnTambah = document.getElementById('btnTambah');
  const btnBatal = document.getElementById('btnBatal');
  const formKategori = document.getElementById('formKategori');
  const tbodyData = document.getElementById('tbodyData');

  let dataKategori = []; // Simpan data kategori

  // Tampilkan modal tambah data
  btnTambah.addEventListener('click', () => {
    modal.style.display = 'block';
    document.getElementById('modalTitle').textContent = 'Tambah Data Kategori';
    formKategori.reset();
  });

  // Tutup modal ketika tombol Batal ditekan
  btnBatal.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  // Tampilkan data kategori
  function tampilkanData() {
    tbodyData.innerHTML = '';
    dataKategori.forEach((item, index) => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${index + 1}</td>
        <td>${item}</td>
        <td>
          <button class="btn btn-primary btnEdit" data-index="${index}">Edit</button>
          <button class="btn btn-danger btnHapus" data-index="${index}">Hapus</button>
        </td>
      `;
      tbodyData.appendChild(tr);
    });
  }

  // Tambah data kategori
  formKategori.addEventListener('submit', (e) => {
    e.preventDefault();
    const kategori = document.getElementById('kategori').value;
    if (kategori.trim() !== '') {
      dataKategori.push(kategori);
      tampilkanData();
      modal.style.display = 'none';
    }
  });

  // Edit data kategori
  tbodyData.addEventListener('click', (e) => {
    if (e.target.classList.contains('btnEdit')) {
      const index = e.target.getAttribute('data-index');
      const kategori = dataKategori[index];
      document.getElementById('kategori').value = kategori;
      document.getElementById('modalTitle').textContent = 'Edit Data Kategori';
      modal.style.display = 'block';

      // Hapus data yang lama
      dataKategori.splice(index, 1);
      tampilkanData();
    }
  });

  // Hapus data kategori
  tbodyData.addEventListener('click', (e) => {
    if (e.target.classList.contains('btnHapus')) {
      const index = e.target.getAttribute('data-index');
      dataKategori.splice(index, 1);
      tampilkanData();
    }
  });

</script>
</body>
</html>
