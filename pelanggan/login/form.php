<?php
    if (isset($_POST['login'])) {
        # code...
        require_once("../config/koneksi.php");

        $user = $_POST['login-username'];
        $pass = $_POST['login-password'];

        $data = mysqli_query($koneksi,"SELECT p.nama , p.username , p.password , l.level 
        FROM tb_pelanggan p JOIN tb_level l ON p.id_tingkatan = l.id_level 
        WHERE username='$user' && password='$pass'");

        if (mysqli_num_rows($data)>0) {
            # code...
            $row_akun = mysqli_fetch_array($data);
            $_SESSION["nama"] = $row_akun["nama"];
            $_SESSION["level"] = $row_akun["level"];
            $_SESSION['login-username'] = $user;
            $_SESSION['status'] = "login";
            header("location: ../pelanggan/");
        }else{
        header("location:pesan.php?pesan=gagal");
        }
    }
?>
<div class="hero-static col-lg-6 col-xl-4">
    <div class="content content-full overflow-hidden">
        <!-- Header -->
        <div class="py-30 text-center"  data-toggle="appear" data-class="animated fadeInDown">
            <a class="link-effect font-w700" href="index.html">
                <i class="si si-fire text-danger"></i>
                <span class="font-size-xl text-danger">PLN</span>
            </a>
            <h1 class="h4 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
            <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
        </div>
        <form class="js-validation-signin" method="post">
            <div class="block block-themed block-rounded block-shadow" data-toggle="appear" data-class="animated fadeInDown">
                <div class="block-header bg-gd-dusk">
                    <h3 class="block-title">Please Sign In</h3>
                </div>
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="login-username">Username</label>
                            <input type="text" class="form-control" id="login-username" name="login-username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="login-password">Password</label>
                            <input type="password" class="form-control" id="login-password" name="login-password">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-sm-6 d-sm-flex align-items-center push"></div>
                        <div class="col-sm-6 text-sm-right push">
                            <button type="submit" class="btn btn-alt-primary" name="login" value="login">
                                <i class="si si-login mr-10"></i> Sign In
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
