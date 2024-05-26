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
</head>

<body style="overflow: hidden;" >
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
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur "style="background-color: #f0f2f5 ;" 
          navbar-scroll="true">
          <div class="container-fluid py-3 px-3">
            <nav aria-label="breadcrumb">
        
              <h6 class="font-weight-bolder mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                  <label class="form-label">Type here...</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">Sign In</span>
                  </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                  </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src=".././assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New message</span> from Laur
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              13 minutes ago
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="my-auto">
                            <img src=".././assets/img/small-logos/logo-spotify.svg"
                              class="avatar avatar-sm bg-gradient-dark  me-3 ">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">New album</span> by Travis Scott
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              1 day
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                          <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <title>credit-card</title>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(453.000000, 454.000000)">
                                      <path class="color-background"
                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                        opacity="0.593633743"></path>
                                      <path class="color-background"
                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                      </path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              Payment successfully completed
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                              <i class="fa fa-clock me-1"></i>
                              2 days
                            </p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 ">
          <div class="row pb-3">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div
                    class="icon icon-lg icon-shape bg-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">menu_book</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">TOTAL BUKU BARU</p>
                    <h4 class="mb-0">25</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><BR></BR> </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div
                    class="icon icon-lg icon-shape bg-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">event_note</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">PETUGAS</p>
                    <h4 class="mb-0">2,300</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder"><BR></BR> </span></p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div
                    class="icon icon-lg icon-shape bg-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">event_available</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">New Clients</p>
                    <h4 class="mb-0">3,462</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2">
                  <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"><BR></BR></span> </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div
                    class="icon icon-lg icon-shape bg-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">paid</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Sales</p>
                    <h4 class="mb-0">Rp.10.430</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-2">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder"> <BR></BR></span></p>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid py-4">
            <div class="row">
              <div class="col-12">
                <div class="card my-4">
                  <div class="card-header pb-0">
                    <div class="row">
                      <div class="col-lg-6 col-7">
                        <h6>MEMBERS</h6>
                        <p class="text-sm mb-0">
                          
                          <span class="font-weight-bold ms-1">
                          </span>  <button class="btn btn-primary" id="btnTambah">Tambah Data</button>
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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gmail</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                          </tr>
                        </thead>
                        
                        <tbody id="tbodyData">

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
                    <h5 class="modal-title" id="modalTitle">Tambah Data member</h5>
                    <button type="button" class="btn-close" id="btnCloseModal"></button>
                  </div>
                  <div class="modal-body">
                    <form id="formPetugas">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="gmail" class="form-label">Gmail:</label>
                        <input type="email" id="gmail" name="gmail" class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="role" class="form-label">Role:</label>
                        <select id="role" name="role" class="form-select" required>
                          <option value="petugas">Petugas</option>
                          <option value="user">User</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" id="btnBatal">Batal</button>
                    </form>
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
  <script>
    // Data Petugas CRUD
    let dataPetugas = [];
    let selectedIndex = -1;

    function renderTable() {
      let tbody = document.getElementById("tbodyData");
      tbody.innerHTML = "";
      dataPetugas.forEach((data, index) => {
        let row = `
          <tr>
            <td>${index + 1}</td>
            <td>${data.nama}</td>
            <td>${data.gmail}</td>
            <td>${data.password}</td>
            <td>${data.role}</td>
            <td>
              <button class="btn btn-warning btnEdit" data-index="${index}">Edit</button>
              <button class="btn btn-danger btnDelete" data-index="${index}">Hapus</button>
            </td>
          </tr>
        `;
        tbody.innerHTML += row;
      });
      document.querySelectorAll(".btnEdit").forEach(btn => {
        btn.onclick = function() {
          selectedIndex = parseInt(this.getAttribute("data-index"));
          let data = dataPetugas[selectedIndex];
          document.getElementById("nama").value = data.nama;
          document.getElementById("gmail").value = data.gmail;
          document.getElementById("password").value = data.password;
          document.getElementById("role").value = data.role;
          document.getElementById("modalTitle").innerText = "Edit Data Petugas";
          document.getElementById("modalData").style.display = "block";
        };
      });
      document.querySelectorAll(".btnDelete").forEach(btn => {
        btn.onclick = function() {
          selectedIndex = parseInt(this.getAttribute("data-index"));
          dataPetugas.splice(selectedIndex, 1);
          renderTable();
        };
      });
    }

    document.getElementById("btnTambah").onclick = function() {
      selectedIndex = -1;
      document.getElementById("formPetugas").reset();
      document.getElementById("modalTitle").innerText = "Tambah Data Petugas";
      document.getElementById("modalData").style.display = "block";
    };

    document.getElementById("btnBatal").onclick = function() {
      document.getElementById("modalData").style.display = "none";
    };

    document.getElementById("formPetugas").onsubmit = function(event) {
      event.preventDefault();
      let nama = document.getElementById("nama").value;
      let gmail = document.getElementById("gmail").value;
      let password = document.getElementById("password").value;
      let role = document.getElementById("role").value;
      let data = { nama, gmail, password, role };

      if (selectedIndex === -1) {
        dataPetugas.push(data);
      } else {
        dataPetugas[selectedIndex] = data;
      }

      document.getElementById("modalData").style.display = "none";
      renderTable();
    };

    renderTable();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="../../assets/js/script.js"></script>
</body>

</html>