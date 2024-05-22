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
    /* Custom styles for the search input */
    #searchInput {
      border: 2px solid #ced4da; /* Set border color */
      border-radius: 0.25rem; /* Set border radius */
      padding: 0.5rem; /* Set padding */
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
                      <h6>PEMINJAMAN HARI INI</h6>
                      <p class="text-sm mb-0">
                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                        <span class="font-weight-bold ms-1">Rekap peminjaman hari ini</span>
                      </p>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                      <div class="float-lg-end pe-4">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <tbody id="peminjamanTableBody"> <table class="table table-striped table-hover">
                        <thead class="text-center">
                            <tr>
                                <th class="bg-primary text-light">id buku</th>
                                <th class="bg-primary text-light">Judul buku</th>
                                <th class="bg-primary text-light">Nama siswa</th>
                                <th class="bg-primary text-light">Nama petugas</th>
                                <th class="bg-primary text-light">Hari pengembalian</th>
                                <th class="bg-primary text-light">Keterlambatan</th>
                                <th class="bg-primary text-light">Denda</th>
                              </tr>
                        </thead>
                          <?php foreach ($dataDenda as $item) : ?>
                          <tr>
                            <td><?= $item["id_buku"]; ?></td>
                            <td><?= $item["judul"]; ?></td>
                            <td><?= $item["nama"]; ?></td>
                            <td><?= $item["nama_petugas"]; ?></td>
                            <td><?= $item["buku_kembali"]; ?></td>
                            <td><?= $item["keterlambatan"]; ?></td>
                            <td><?= $item["denda"]; ?></td>
                          </tr>
                          <?php endforeach; ?>
                      </table> 
                     </tbody>
                    </table>
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
</body>

</html>
