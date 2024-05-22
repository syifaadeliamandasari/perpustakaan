  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  </head>

  <body style="overflow: hidden;" >
    <div class="wrapper">

    @include('partials.nav')

      <div class="main overflow-scroll">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
          <!-- Navbar -->
          <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur "style="background-color: #f0f2f5 ;" 
            navbar-scroll="true">
            <div class="container-fluid py-3 px-3">
              <nav aria-label="breadcrumb">
          
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
              </nav>
       
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
                      <i class="material-icons opacity-10">book</i>
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
                      <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">PETUGAS</p>
                      <h4 class="mb-0">5</h4>
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
                      <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                      <p class="text-sm mb-0 text-capitalize">New Clients</p>
                      <h4 class="mb-0">8</h4>
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
                      <p class="text-sm mb-0 text-capitalize">DENDA</p>
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

            <div class="row mb-4 pt-2">
              <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="row">
                      <div class="col-lg-6 col-7">
                        <h6>PEMINJAMAN HARI INI</h6>
                        <p class="text-sm mb-0">
                          <i class="fa fa-check text-info" aria-hidden="true"></i>
                          <span class="font-weight-bold ms-1">
                          </span> Rekap peminjaman hari ini
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
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BOOK</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              TIPE</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                              Completion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <h6 class="me-3 text-sm">1</h6>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"> Bumi Manusia</h6>
                                
                                  
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">yanto apel</p>
                            
                              
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                        
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <h6 class="me-3 text-sm">2</h6>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Laskar Pelangi</h6>
                              
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">budi odol</p>
                            
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                        
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>   <h6 class="me-3 text-sm">3</h6>
                                  </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Habis gelap </h6>
                                  
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">budi lobang</p>
                            
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                            </td>
                        
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <h6 class="me-3 text-sm">4</h6>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">ctya abadi</h6>
                                
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">purta js</p>
                            
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                            </td>
                        
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <h6 class="me-3 text-sm">5</h6>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">resep dodol</h6>
                                  
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">mail</p>
                          
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                            </td>
                        
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                    <h6 class="me-3 text-sm">6</h6>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">Rumah Kaca.</p>
                          
                            </td>
                            <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td>
                        
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                  <div class="card-header pb-0">
                    <h6>Members BARU DITAMBAHKAN</h6>
                    <p class="text-sm">
                      <!-- Icons   <i class="fa fa-arrow-up text-success" aria-hidden="true"></i> -->
                      <span class="font-weight-bold"></span> 
                    </p>
                  </div>
                  <div class="card-body p-3">
                    
                      <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                      
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                  </div>
                                </div>
                              </td>
  
                        
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                  </div>
                                </div>
                              </td>
  
                        
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                  </div>
                                </div>
                              </td>
  
                        
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                  </div>
                                </div>
                              </td>
  
                        
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                  </div>
                                </div>
                              </td>
  
                        
                            </tr>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
  </body>

  </html>