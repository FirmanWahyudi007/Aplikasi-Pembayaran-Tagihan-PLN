<?php 
    require_once("login/auth.php");
    $user=$_SESSION['login-username'];
    $nama = $_SESSION['nama'];
    include '../config/koneksi.php';
?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>PLN - Admin Control</title>

        <link rel="stylesheet" id="css-main" href="../assets/css/codebase.min.css">
    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <div class="content-header content-header-fullrow px-15">
                            <div class="content-header-section sidebar-mini-visible-b">
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                            </div>
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="../pelanggan">
                                        <i class="si si-fire text-danger"></i>
                                        <span class="font-size-xl text-danger">PLN</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="index.php?page=cektagihan">Cek Tagihan</a>
                                </li>
                                <li>
                                    <a href="index.php?page=listtagihan">List Tagihan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo  $nama?><i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php?page=settings" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </span>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                    	<div class="col-sm-12">
                    		<div class="block">
								<div class="block-header block-header-default">
									<div class="block-title">Pembayaran</div>
								</div>
								<div class="block-content">
									<form action="insert-pembayaran.php" method="post">
                                        <?php 
                                            $administrasi = 2500;
                                            $user=$_SESSION['login-username'];
                                            $nama = $_SESSION['nama'];
                                            $pem = mysqli_query($koneksi,"SELECT p.nama,p.id_pelanggan,t.id_tagihan,t.tgl_tagihan,t.tagihan FROM tb_tagihan t JOIN tb_pelanggan p ON t.id_pelanggan=p.id_pelanggan where username = '$user' and status = 'belum bayar'");
                                            while ($data = mysqli_fetch_array($pem)) {
                                         ?>
										<div class="form-group row">
                                            <label class="col-12" for="id_tagihan">ID Tagihan</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" name="id_tagihan" value="<?php echo $data['id_tagihan'] ?>">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-12" for="id_pelanggan">ID Pelanggan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="nama">Nama</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="tagihan">Tagihan</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="tagihan" id="tagihan" value="<?php echo $data['tagihan'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="administrasi">Administrasi</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="administrasi" value="<?php echo 
                                                $administrasi ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="total">Total</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="total" value="<?php echo $data['tagihan'] + $administrasi ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        	<label class="col-12" for="via">Via</label>
                                        	<div class="col-md-6">
                                        		<select class="form-control" id="via" name="via">
                                                    <option value="0">Silahkan pilih...</option>
                                                    <option value="BCA">BCA</option>
                                                    <option value="BRI">BRI</option>
                                                    <option value="BNI">BNI</option>
                                                    <option value="MANDIRI">MANDIRI</option>
                                                </select>
                                        	</div>
                                        </div>
                                        <div class="form-group row">
                                        	<div class="col-sm-12" for="norek">No Rekening</div>
                                        	<div class="col-md-6">
                                        		<input type="text" class="form-control" name="norek" id="norek">
                                        	</div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
									</form>
									<?php } ?>
								</div>
							</div>
                    	</div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">SARA :)</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.3</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../assets/js/core/jquery.appear.min.js"></script>
        <script src="../assets/js/core/jquery.countTo.min.js"></script>
        <script src="../assets/js/core/js.cookie.min.js"></script>
        <script src="../assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/js/pages/be_pages_dashboard.js"></script>
    </body>
</html>