<?php 
    session_start();
    if (isset($_SESSION['login-username'])) {
        # code...
        header('location:../pelanggan/');
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - PLN Member</title>
	<link rel="stylesheet" id="css-main" href="../assets/css/codebase.min.css">
</head>
<body>
	<div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-body-dark bg-pattern" style="background-image: url('../assets/img/photos/photo33@2x.jpg');">
                    <div class="row mx-0 justify-content-center">	
                        	<?php 
                        		if (isset($_GET['page'])) {
                        			# code...
                        			$page = $_GET['page'];
                        			switch ($page) {
                        				case 'login':
                        					# code...
                        					include 'login/form.php';
                        					break;
                        				
                        				default:
                        					# code...
                        					echo "Maaf halaman tidak ditemukan";
                        					break;
                        			}
                        		}else{
                        			include 'login/utama.php';
                        		}
                        	 ?>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
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
        <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/js/pages/op_auth_signin.js"></script>

</body>
</html>