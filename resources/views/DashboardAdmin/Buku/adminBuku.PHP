<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar With Bootstrap</title>
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

  <style>
    .custom-css-form {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    input.form-control,
    select.form-select,
    textarea.form-control {
        border: 1px solid #ced4da !important;
        border-radius: .25rem !important;
    }
</style>
</head>

<body style="overflow: hidden;">
  <div class="wrapper">

  <aside id="sidebar" style="background-color: #69888e;">
        <div class="d-flex">
          <!-- Toggle Button -->
          <button class="toggle-btn" type="button">
            <!-- Assuming this button is for toggling the sidebar -->
            <i class="lni lni-grid-alt"></i> <!-- You can use a menu icon -->
          </button>
          <div class="sidebar-logo">
            <a href="#">STARLEARN</a>
          </div>
        </div>
        <ul class="sidebar-nav">
          <!-- Sidebar Items -->
          <li class="sidebar-item">
            <a href="{{ route('dA') }}" class="sidebar-link">
              <i class="material-icons opacity-10">dashboard</i> <!-- Dashboard icon -->
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('member') }}" class="sidebar-link">
              <i class="material-icons opacity-10">group</i> <!-- Group or user icon -->
              <span>Members</span>
            </a>
          </li>
          <li class="sidebar-item">
          
            <a href="{{ route('aB') }}" class="sidebar-link">
              <i class="material-icons opacity-10">book</i> <!-- Book icon -->
              <span>Buku</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('rPJ') }}" class="sidebar-link">
              <i class="material-icons opacity-10">event_note</i> <!-- Event or calendar icon -->
              <span>Peminjaman</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('rPG') }}" class="sidebar-link">
              <i class="material-icons opacity-10">event_available</i> <!-- Checkmark or success icon -->
              <span>Pengembalian</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="rD" class="sidebar-link">
              <i class="lni lni-money"></i> <!-- Money or financial icon -->
              <span>Denda</span>
            </a>
          </li>
        </ul>
        <div class="sidebar-footer">
          <!-- Logout Button -->
          <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i> <!-- Exit or log out icon -->
            <span>Logout</span>
          </a>
        </div>
      </aside>
    <div class="main overflow-scroll">
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
          style="background-color: #f0f2f5;" navbar-scroll="true">
        </nav>
        <!-- End Navbar -->

      
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header pb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-7">
                                        <h6>DAFTAR BUKU</h6>
                                        <p class="text-sm mb-0">
                                            <button class="btn btn-primary" id="btnTambah">Tambah Buku</button>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-5 my-auto text-end">
                                        <div class="dropdown float-lg-end pe-4">
                                            <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-secondary"></i>
                                            </a>
                                            <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID Buku</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cover</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pengarang</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penerbit</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tahun Terbit</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah Halaman</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sinopsis</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipe Buku</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyData">
                                            <!-- Data rows will be inserted here by JavaScript -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div id="modalData" class="modal" tabindex="-1" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Tambah Buku</h5>
                                <button type="button" class="btn-close" id="btnCloseModal"></button>
                            </div>
                            <div class="modal-body">
                                <form id="formBuku">
                                    <div class="mb-3">
                                        <label for="id_buku" class="form-label">ID Buku</label>
                                        <input type="text" id="id_buku" name="id_buku" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cover" class="form-label">Cover Buku</label>
                                        <input type="file" id="cover" name="cover" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul:</label>
                                        <input type="text" id="judul" name="judul" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pengarang" class="form-label">Pengarang:</label>
                                        <input type="text" id="pengarang" name="pengarang" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit:</label>
                                        <input type="text" id="penerbit" name="penerbit" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tahunTerbit" class="form-label">Tahun Terbit:</label>
                                        <input type="date" id="tahunTerbit" name="tahunTerbit" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah_halaman" class="form-label">Jumlah Halaman:</label>
                                        <input type="number" id="jumlah_halaman" name="jumlah_halaman" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kategori:</label>
                                        <select class="
                                        <select class="form-select" id="kategori" name="kategori" required>
                                          <option value="">Pilih Kategori</option>
                                          <!-- Kategori options will be populated by JavaScript -->
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="sinopsis" class="form-label">Sinopsis:</label>
                                      <textarea id="sinopsis" name="sinopsis" class="form-control" rows="3" required></textarea>
                                  </div>
                                  <div class="mb-3">
                                      <label for="tipe_buku" class="form-label">Tipe Buku:</label>
                                      <select class="form-select" id="tipe_buku" name="tipe_buku" required>
                                          <option value="">Pilih Tipe Buku</option>
                                          <option value="offline">Offline</option>
                                          <option value="online">Online</option>
                                      </select>
                                  </div>
                                  <input type="hidden" id="id" name="id">
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" id="btnTutupModal">Tutup</button>
                              <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
                          </div>
                      </div>
                  </div>
              
        
            
          </div>
        </div>

        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  ©
                
                  made with <i class="fa fa-heart"></i> by
                  <a href="#" class="font-weight-bold" target="_blank">cpCODE</a>
                  for a better web.
                </div>
              </div>
              <div class="col-lg-3">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                
                </ul>
              </div>
              <div class="col-lg-3">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="#" class="nav-link text-muted" target="_blank">CP CODE</a>
                  </li>
                  <li class="nav-item">
                    <a href="#/presentation" class="nav-link text-muted"
                      target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="#/blog" class="nav-link text-muted" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="#/license" class="nav-link pe-0 text-muted"
                      target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        </div>
      </main>
    </div>
  </div>
<Script src="../../assets/js/script.js"></Script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz4fnFO9gybBogGzpeT0K7p1I4PjV4lgHj2EO8qnF0HlRbW7gjUanA2WLe" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-QWY6ZZhBprJ1AqVJuqeRtvzUJzH3ZjgGp1cj2lnD/xj5e3+ZZ0+uwAwPo8TXoF6Y" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const modalData = document.getElementById('modalData');
        const btnTambah = document.getElementById('btnTambah');
        const btnSimpan = document.getElementById('btnSimpan');
        const btnTutupModal = document.getElementById('btnTutupModal');
        const btnCloseModal = document.getElementById('btnCloseModal');
        const formBuku = document.getElementById('formBuku');
        const tbodyData = document.getElementById('tbodyData');
        const kategoriSelect = document.getElementById('kategori');

        // Dummy data for kategori
        const kategoriList = ['Fiksi', 'Non-Fiksi', 'Ilmiah', 'Biografi'];
        kategoriList.forEach(kat => {
            const option = document.createElement('option');
            option.value = kat;
            option.text = kat;
            kategoriSelect.add(option);
        });

        let bukuData = [
            { id_buku: 'inf01', cover: 'cover1.jpg', judul: 'Buku A', pengarang: 'Pengarang A', penerbit: 'Penerbit A', tahun_terbit: '2021-01-01', jumlah_halaman: 100, kategori: 'Fiksi', sinopsis: 'Sinopsis A', tipe_buku: 'offline' },
            { id_buku: 'inf02', cover: 'cover2.jpg', judul: 'Buku B', pengarang: 'Pengarang B', penerbit: 'Penerbit B', tahun_terbit: '2022-01-01', jumlah_halaman: 200, kategori: 'Non-Fiksi', sinopsis: 'Sinopsis B', tipe_buku: 'online' },
        ];

        function renderTable() {
            tbodyData.innerHTML = '';
            bukuData.forEach((buku, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${buku.id_buku}</td>
                    <td><img src="${buku.cover}" alt="Cover" width="50px"></td>
                    <td>${buku.judul}</td>
                    <td>${buku.pengarang}</td>
                    <td>${buku.penerbit}</td>
                    <td>${buku.tahun_terbit}</td>
                    <td>${buku.jumlah_halaman}</td>
                    <td>${buku.kategori}</td>
                    <td>${buku.sinopsis}</td>
                    <td>${buku.tipe_buku}</td>
                    <td>
                        <button class="btn btn-warning btnEdit" data-index="${index}">Edit</button>
                        <button class="btn btn-danger btnDelete" data-index="${index}">Delete</button>
                    </td>
                `;
                tbodyData.appendChild(row);
            });

            document.querySelectorAll('.btnEdit').forEach(button => {
                button.addEventListener('click', editBuku);
            });

            document.querySelectorAll('.btnDelete').forEach(button => {
                button.addEventListener('click', deleteBuku);
            });
        }

        function editBuku(event) {
            const index = event.target.dataset.index;
            const buku = bukuData[index];

            document.getElementById('id_buku').value = buku.id_buku;
            document.getElementById('judul').value = buku.judul;
            document.getElementById('pengarang').value = buku.pengarang;
            document.getElementById('penerbit').value = buku.penerbit;
            document.getElementById('tahunTerbit').value = buku.tahun_terbit;
            document.getElementById('jumlah_halaman').value = buku.jumlah_halaman;
            document.getElementById('kategori').value = buku.kategori;
            document.getElementById('sinopsis').value = buku.sinopsis;
            document.getElementById('tipe_buku').value = buku.tipe_buku;
            document.getElementById('id').value = index;

            modalData.style.display = 'block';
            document.getElementById('modalTitle').textContent = 'Edit Buku';
        }

        function deleteBuku(event) {
            const index = event.target.dataset.index;
            bukuData.splice(index, 1);
            renderTable();
        }

        btnTambah.addEventListener('click', () => {
            formBuku.reset();
            document.getElementById('modalTitle').textContent = 'Tambah Buku';
            document.getElementById('id').value = '';
            modalData.style.display = 'block';
        });

        btnTutupModal.addEventListener('click', () => {
            modalData.style.display = 'none';
        });

        btnCloseModal.addEventListener('click', () => {
            modalData.style.display = 'none';
        });

        btnSimpan.addEventListener('click', () => {
            const buku = {
                id_buku: document.getElementById('id_buku').value,
                cover: document.getElementById('cover').files[0].name, // This is just a placeholder. Actual implementation should handle file uploads
                judul: document.getElementById('judul').value,
                pengarang: document.getElementById('pengarang').value,
                penerbit: document.getElementById('penerbit').value,
                tahun_terbit: document.getElementById('tahunTerbit').value,
                jumlah_halaman: document.getElementById('jumlah_halaman').value,
                kategori: document.getElementById('kategori').value,
                sinopsis: document.getElementById('sinopsis').value,
                tipe_buku: document.getElementById('tipe_buku').value
            };

            const id = document.getElementById('id').value;

            if (id) {
                bukuData[id] = buku;
            } else {
                bukuData.push(buku);
            }

            modalData.style.display = 'none';
            renderTable();
        });

        renderTable();
    });
</script>
</body>

</html>
