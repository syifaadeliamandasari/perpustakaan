<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive | Sidebar</title>
  <link rel="stylesheet" href="Side.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="web icon" type="png" href="logo-html-5-2048.png">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

:root{
  --color-default:#69888e;
  --color-second:#69888e;
  --color-white:#fff;
  --color-body:#e4e9f7;
  --color-light:#e0e0e0;
}

*{
  padding: 0%;
  margin: 0%;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
  min-height: 100vh;
}

.sidebar{
  min-height: 100vh;
  width: 78px;
  padding: 6px 14px;
  z-index: 99;
  background-color: var(--color-default);
  transition: all .5s ease;
  position: fixed;
  top:0;
  left: 0;
}

.sidebar.open{
  width: 250px;
}

.sidebar .logo_details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}

.sidebar .logo_details .icon{
  opacity: 0;
  transition: all 0.5s ease ;
}

.sidebar .logo_details .logo_name{
  color:var(--color-white);
  font-size: 22px;
  font-weight: 600;
  opacity: 0;
  transition: all .5s ease;
}

.sidebar.open .logo_details .icon,
.sidebar.open .logo_details .logo_name{
  opacity: 1;
}

.sidebar .logo_details #btn{
  position: absolute;
  top:50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all .5s ease;
}

.sidebar.open .logo_details #btn{
  text-align: right;
}

.sidebar i{
  color:var(--color-white);
  height: 60px;
  line-height: 60px;
  min-width: 50px;
  font-size: 25px;
  text-align: center;
}

.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}

.sidebar li{
  position: relative;
  margin:8px 0;
  list-style: none;
}

.sidebar li .tooltip{
  position: absolute;
  top:-20px;
  left:calc(100% + 15px);
  z-index: 3;
  background-color: var(--color-white);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 14px;
  font-size: 15px;
  font-weight: 400;
  border-radius: 5px;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
}

.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top:50%;
  transform: translateY(-50%);
}

.sidebar.open li .tooltip{
  display: none;
}

.sidebar input{
  font-size: 15px;
  color: var(--color-white);
  font-weight: 400;
  outline: none;
  height: 35px;
  width: 35px;
  border:none;
  border-radius: 5px;
  background-color: var(--color-second);
  transition: all .5s ease;
}

.sidebar input::placeholder{
  color:var(--color-light)
}

.sidebar.open input{
  width: 100%;
  padding: 0 20px 0 50px;
}

.sidebar .bx-search{
  position: absolute;
  top:50%;
  left:0;
  transform: translateY(-50%);
  font-size: 22px;
  background-color: var(--color-second);
  color: var(--color-white);
}

.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  align-items: center;
  text-decoration: none;
  background-color: var(--color-default);
  position: relative;
  transition: all .5s ease;
  z-index: 12;
}

.sidebar li a::after{
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  transform: scaleX(0);
  background-color: var(--color-white);
  border-radius: 5px;
  transition: transform 0.3s ease-in-out;
  transform-origin: left;
  z-index: -2;
}

.sidebar li a:hover::after{
  transform: scaleX(1);
  color:var(--color-default)
}

.sidebar li a .link_name{
  color:var(--color-white);
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  pointer-events: auto;
  transition: all 0.4s ease;
  pointer-events: none;
  opacity: 0;
}

.sidebar li a:hover .link_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color:var(--color-default)
}

.sidebar.open li a .link_name{
  opacity: 1;
  pointer-events: auto;
}

.sidebar li i{
  height: 35px;
  line-height: 35px;
  font-size: 18px;
  border-radius: 5px;
}

.sidebar li.profile{
  position: fixed;
  height: 65px;
  width: 78px;
  left: 0;
  bottom:-8px;
  padding:10px 14px;
  overflow:hidden ;
  transition: all .5s ease;
}

.sidebar.open li.profile{
  width: 250px;
}

.sidebar .profile .profile_details{
  display: flex;
  align-items: center;
  flex-wrap:  nowrap;
}

.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 50%;
  margin-right: 10px;
}

.sidebar li.profile .name,
.sidebar li.profile .designation{
  font-size: 15px;
  font-weight: 400;
  color:var(--color-white);
  white-space: nowrap;
}

.sidebar li.profile .designation{
  font-size: 12px;
}

.sidebar .profile #log_out{
  position: absolute;
  top:50%;
  right: 0;
  transform: translateY(-50%);
  background-color: var(--color-second);
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.5s ease;
}

.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}

.home-section{
  position: relative;
  background-color: var(--color-body);
  min-height: 100vh;
  top:0;
  left:78px;
  width: calc(100% - 78px);
  transition: all .5s ease;
  z-index: 2;
}

.home-section .text{
  display: inline-block;
  color:var(--color-default);
  font-size: 25px;
  font-weight: 500;
  margin: 18px;
}

.sidebar.open ~ .home-section{
  left:250px;
  width: calc(100% - 250px);
}

/* .profile_user {
  margin-right: 50%;
  height: 13px;
  width: 13px;
  margin: 0%;
  padding: 0%;
} */
.image{
    width: 15px;
    height: 15px;
}
.bx-log-out{
    margin-top: 10px;
}
.container {
    max-width:1100px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

  </style>
</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
      <div class="logo_name">STARLEARN</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <li class="profile">
      <div class="profile_details">
        <img class="image" src="{{ asset('images/pinguin.png') }}">
        <div class="profile_content">
          <div class="name">Syifa Adelia Mandasari</div>
          <div class="designation">Petugas</div>
        </div>
      </div>
      <i class="bx bx-log-out" id="log_out"></i>
    </li>
    <ul class="nav-list">
      <li>
        <i class="bx bx-search"></i>
        <input type="text" placeholder="Search . . .">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ route('kategori') }}">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Data Kategori</span>
        </a>
        <span class="tooltip">Data Kategori</span>
      </li>
      <li>
        <a href="{{ route('buku') }}">
            <i class="bx bx-book"></i>
          <span class="link_name">Data Buku</span>
        </a>
        <span class="tooltip">Data Buku</span>
      </li>
      <li>
        <a href="{{ route('anggota') }}">
            <i class='bx bxs-book-content'></i>
          <span class="link_name">Data Anggota</span>
        </a>
        <span class="tooltip">Data Anggota</span>
      </li>
      <li>
        <a href="{{ route('peminjaman') }}">
            <i class="bx bx-calendar"></i>
          <span class="link_name">Peminjaman</span>
        </a>
        <span class="tooltip">Peminjaman</span>
      </li>
      <li>
        <a href="{{ route('pengambalian') }}">
            <i class="bx bx-calendar-check"></i>
          <span class="link_name">Pengembalian</span>
        </a>
        <span class="tooltip">Pengembalian</span>
      </li>
      <li>
        <a href="{{ route('login') }}">
            <i class='bx bx-log-in'></i>
            <span class="link_name">Log Out</span>
        </a>
        <span class="tooltip">Log Out</span>
    </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Dashbord</div>
    <!-- CRUD -->
    <div class="container">
        <h2>Peminjaman</h2>
        <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
        <table id="tableData">
          <thead>
            <tr>
              <th>No</th>
              <th>Buku</th>
              <th>Nama</th>
              <th>Tanggal Peminjaman</th>
              <th>Tanggal Jatuh Tempo</th>
              <th>Tanggal Kembali</th>
              <th>Status</th>
              <th>Edit</th>
               <th>Hapus</th>
            </tr>
          </thead>
          <tbody id="tbodyData">
          </tbody>
        </table>
      </div>
      <!-- Modal Tambah/Edit Data -->
      <div id="modalData" style="display: none;">
        <div class="container">
          <h2 id="modalTitle">Tambah Data Peminjaman</h2>
          <form id="formPeminjaman">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>
            <label for="buku">Buku:</label><br>
            <input type="text" id="buku" name="buku" required><br><br>
            <label for="tgl_pinjam">Tanggal Peminjaman:</label><br>
            <input type="date" id="tgl_pinjam" name="tgl_pinjam" required><br><br>
            <label for="tgl_tempo">Tanggal Jatuh Tempo:</label><br>
            <input type="date" id="tgl_tempo" name="tgl_tempo" required><br><br>
            <input type="submit" value="Simpan" class="btn btn-primary">
            <button type="button" class="btn btn-danger" id="btnBatal">Batal</button>
          </form>
        </div>
      </div>
  </div>
  </section>
  <script>
    window.onload = function(){
        const sidebar = document.querySelector(".sidebar");
        const closeBtn = document.querySelector("#btn");
        const searchBtn = document.querySelector(".bx-search")
        const logoutBtn = document.querySelector("#log_out");

        closeBtn.addEventListener("click",function(){
            sidebar.classList.toggle("open")
            menuBtnChange()
        })

        searchBtn.addEventListener("click",function(){
            sidebar.classList.toggle("open")
            menuBtnChange()
        })

        function menuBtnChange(){
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu","bx-menu-alt-right")
            }else{
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu")
            }
        }

        // Menangani logout
        logoutBtn.addEventListener("click", function() {
            // Redirect ke halaman login
            window.location.href = "{{ route('login') }}";
        });
    }
    const modalData = document.getElementById('modalData');
const btnTambah = document.getElementById('btnTambah');
const btnBatal = document.getElementById('btnBatal');
const formPeminjaman = document.getElementById('formPeminjaman');

let dataPeminjaman = []; // Simpan data peminjaman

// Tampilkan modal tambah data
btnTambah.addEventListener('click', () => {
  modalData.style.display = 'block';
  document.getElementById('modalTitle').textContent = 'Tambah Data Peminjaman';
  formPeminjaman.reset();
});

// Tutup modal ketika tombol Batal ditekan
btnBatal.addEventListener('click', () => {
  modalData.style.display = 'none';
});

// Tambah data peminjaman
formPeminjaman.addEventListener('submit', (e) => {
  e.preventDefault();
  const nama = document.getElementById('nama').value;
  const buku = document.getElementById('buku').value;
  const tgl_pinjam = document.getElementById('tgl_pinjam').value;
  const tgl_tempo = document.getElementById('tgl_tempo').value;
  const status = "Sudah Kembali"; // Menandakan bahwa data sudah dikembalikan
  if (nama.trim() !== '' && buku.trim() !== '' && tgl_pinjam.trim() !== '' && tgl_tempo.trim() !== '') {
    const data = {
      nama: nama,
      buku: buku,
      tgl_pinjam: tgl_pinjam,
      tgl_tempo: tgl_tempo,
      status: status
    };
    dataPeminjaman.push(data);
    tampilkanDataPeminjaman();
    modalData.style.display = 'none';
  }
});

// Tampilkan data peminjaman
function tampilkanDataPeminjaman() {
  const tbodyData = document.getElementById('tbodyData');
  // Kosongkan isi tbody
  tbodyData.innerHTML = '';

  // Loop melalui setiap data peminjaman
  dataPeminjaman.forEach((data, index) => {
    // Buat sebuah baris baru untuk setiap data peminjaman
    const row = document.createElement('tr');

    // Tambahkan kolom-kolom untuk setiap properti data peminjaman
    row.innerHTML = `
  <td>${index + 1}</td>
  <td>${data.buku}</td>
  <td>${data.nama}</td>
  <td>${data.tgl_pinjam}</td>
  <td>${data.tgl_tempo}</td>
  <td></td> // Diisi dengan tanggal kembali atau status
  <td>${data.status}</td>
  <td><button class="btnEdit" onclick="editData(${index})">Edit</button></td>
  <td><button class="btnHapus" onclick="hapusData(${index})">Hapus</button></td>
`;

// Di dalam container modalData
<button type="button" class="btn btn-danger" id="btnKembali">Kembali</button>

    // Tambahkan baris ke dalam tbody
    tbodyData.appendChild(row);
  });
}

</script>
</body>
</html>
