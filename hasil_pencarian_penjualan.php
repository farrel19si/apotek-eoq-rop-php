<?php
session_start();
if (!isset($_SESSION["Login"])) {
    header("Location: Login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="gambar/icon-nobg.png" />
    <title>Beranda | Apotek Makmur</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg {

            background-color: #98bf64;

        }

        .button {
            background-color: #98bf64;
            color: white;
            border-color: white;
            border-radius: 5px;
            width: 50%;
            align-content: center;
        }

        .btnsize {
            width: fit-content;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg text text-gray-600 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="beranda.php">
                <div class="sidebar-brand-icon ">
                    <div class="logo">
                        <img src="gambar/logo-putih.png" height="110px" width="110px">
                    </div>
                </div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="beranda.php">
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="data_barang.php">
                    <span>Data Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="persediaan.php">
                    <span>Persediaan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="laporan_penjualan.php">
                    <span>Laporan Penjualan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="laporan_pembelian.php">
                    <span>Laporan Pembelian</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <span>Logout</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- judul halaman -->
                    <div>
                        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>

                    </div>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-lg-10 "></div>
                                <div class="col-lg-2">
                                    <a href="laporan_penjualan.php" class="btn btn-secondary btn-user bg-success btn-block" margin-right="100px"> Cancel </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-1">

                                </div>
                                <div class="col-lg-10">

                                    <div class="p-5">
                                        <div class="text-center">
                                        </div>
                                        <table class="table table-bordered" width="800px">
                                            <?php
                                            include 'koneksi.php';
                                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                                if (isset($_POST['bulan'])) {
                                                    $bulan = $_POST['bulan'];
                                                    if ($bulan == '01') {
                                                    } elseif ($bulan == '02') {
                                                    } elseif ($bulan == '03') {
                                                    } elseif ($bulan == '04') {
                                                    } elseif ($bulan == '05') {
                                                    } elseif ($bulan == '06') {
                                                    } elseif ($bulan == '07') {
                                                    } elseif ($bulan == '08') {
                                                    } elseif ($bulan == '09') {
                                                    } elseif ($bulan == '10') {
                                                    } elseif ($bulan == '11') {
                                                    } elseif ($bulan == '12') {
                                                    } else {
                                                        // Aksi untuk bulan lainnya
                                                    }

                                                    // Ambil data penjualan untuk bulan yang dipilih dari database
                                                    $query = "SELECT * FROM penjualan WHERE MONTH(tanggal_penjualan) = '$bulan'";
                                                    $result = mysqli_query($koneksi, $query);
                                            ?>

                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Nama Barang
                                                            </th>
                                                            <th>
                                                                Tanggal Penjualan
                                                            </th>
                                                            <th>
                                                                Jumlah Penjualan
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php // Tampilkan data penjualan pada halaman
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            // Tampilkan data sesuai kebutuhan Anda
                                                        ?>

                                                            <th>
                                                                <?php
                                                                echo $row['nama_barang']
                                                                ?>
                                                            </th>
                                                            <th>
                                                                <?php
                                                                echo $row['tanggal_penjualan']
                                                                ?>
                                                            </th>
                                                            <th>
                                                                <?php
                                                                echo $row['jumlah_penjualan'];
                                                                ?>
                                                            </th>
                                                    </tbody>
                                        <?php }

                                                        // Tutup koneksi
                                                        mysqli_close($koneksi);
                                                    }
                                                }
                                        ?>
                                        </table>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Apotek Makmur</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>