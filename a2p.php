<?php
// include_once 'koneksi.php';
// ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DAMABIS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#"><img src="gambar/telkom.png" alt="telkom" margin 
            ="auto" style="width:220px;height:70px;" ></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> -->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="home.php">Home</a></li>
                        <li><a class="dropdown-item" href="#!">Log out</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <!-- <li><a class="dropdown-item" href="koneksi.php?proses_logout">Logout</a></li> -->
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">DASHBOARD</div>
                                <a class="nav-link collapsed" href="admin.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon" ><i class="fas fa-columns"></i></div>
                                    DATA SKEMA BISNIS
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="a2p.php">A2P Domestik</a>
                                    <a class="nav-link" href="jenis.php">A2P Internasional</a>
                                    <a class="nav-link" href="motor.php"> P2A</a>
                                    <a class="nav-link" href="waktusewa.php">P2P</a>
                                    <a class="nav-link" href="datasewa.php">PNV</a>
                                    <a class="nav-link" href="lokasi.php">MSU DSU</a>
                                    <a class="nav-link" href="waktusewa.php">SMS Hubber</a>
                                    <a class="nav-link" href="datasewa.php">SMS Interaktif</a>
                                </nav>
                            </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    DATA RATE
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="datauser_.php">A2P Domestik</a>
                                    <a class="nav-link" href="jenis.php">A2P Internasional</a>
                                    <a class="nav-link" href="motor.php"> P2A</a>
                                    <a class="nav-link" href="waktusewa.php">P2P</a>
                                    <a class="nav-link" href="datasewa.php">PNV</a>
                                    <a class="nav-link" href="lokasi.php">MSU DSU</a>
                                    <a class="nav-link" href="waktusewa.php">SMS Hubber</a>
                                    <a class="nav-link" href="datasewa.php">SMS Interaktif</a>
                                </nav>
                            </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    IMPORT DATA
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    HISTORY UPLOAD
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">DATA SKEMA BISNIS</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">DATA SKEMBIS A2P DOMESTIK</li>
                        </ol>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
                                Tambah Data
                            </button>
                        </div>
                        <table border ="1" class= "table table-stripped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <!-- <th>ID</th> -->
                                    <th>Sender</th>
                                    <th>Nama SKEMBIS</th>
                                    <th>Valid From</th>
                                    <th>Valid Until</th>
                                    <th>File SKEMBIS</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                <?php
                                $data = $koneksi->select_data();
                                $no = 1;
                                ?>
                                <?php foreach ($data as $row): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['ID'] ?></td>
                                        <td><?= $row['sender'] ?></td>
                                        <td><?= $row['nama_skembis'] ?></td>
                                        <td><?= $row['valid_from'] ?></td>
                                        <td><?= $row['valid_until'] ?></td>
                                        <td><?= $row['file_skembis'] ?></td>
                                        <td>
                                        <a href="" class="badge badge-success" data-toggle="modal" data-target="#ubahModal<?= $row['ID'] ?>">Edit</a>
                                        <a href="koneksi.php?ID=<?= $row['ID'] ?>" class="badge badge-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody> -->
                        </table>
                        <!-- Modal EDIT -->
                        <?php foreach ($data as $row): ?>
                            <div class="modal fade" id="ubahModal<?= $row['ID'] ?>" tabindex="-1" aria-labelledby="ubahModal<?= $row['ID']  ?>Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ubahModal<?= $row['ID']  ?>Label">
                                            Ubah Data </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="koneksi.php?update_data" method="post">
                                            <input type="hidden" name="ID" value="<?= $row['ID'] ?>">
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="form-group">
                                                        <label>ID</label>
                                                        <input type="text" class="form-control" name="ID" value="<?= $row['ID'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sender</label>
                                                        <input type="text" class="form-control" name="sender" value="<?= $row['sender'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama SKEMBIS</label>
                                                        <input type="text" class="form-control" name="nama skembis" value="<?= $row['nama_skembis'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>File SKEMBIS</label>
                                                        <input type="text" class="form-control" name="nama skembis" value="<?= $row['file_skembis'] ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>      
                                        </form>     
                                    </div>      
                                </div>
                            </div>
                    </div>        
                        <?php endforeach ?>

                    <!-- Modal Tambah data -->
		            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="tambahModalLabel">DAMABIS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container">
                                <!-- <form action="koneksi.php?insert_data" method="post"> -->
                                    <div class="form-group">
                                        <label>Sender</label>
                                        <input type="text" class="form-control" name="sender" placeholder="Sender">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                            <option disable selected>Pilih jenis kelamin</option>
                                            <option value="laki-laki">laki-laki</option>
                                            <option value="perempuan">perempuan</option>
                                        </select>
                                    </div> -->
		            				<div class="form-group">
                                        <label>Nama SKEMBIS</label>
                                        <input type="text" class="form-control" name="nama_skembis" placeholder="nama skema bisnis">
		            				</div>
                                    <div class="form-group">
                                        <label>Valid From</label>
                                        <input type="text" class="form-control" name="valid_from" >
                                    </div>
                                    <div class="form-group">
                                        <label>Valid Until</label>
                                        <input type="text" class="form-control" name="valid_until" >
                                    </div>
                                    <div class="form-group">
                                        <label>File SKEMBIS</label>
                                        <input type="text" class="form-control" name="file_skembis" placeholder="upload file disini">
		            				</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="tombol" class="btn btn-primary">submit</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> Database skema bisnis produk signalling </div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
