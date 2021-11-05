<div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
    <div class="p-30 invisible" data-toggle="appear">
        <p>
            <a href="login.php"><i class="fa fa-arrow-left text-white-op"> BACK</i></a>
        </p>
        <p class="font-italic text-white-op">
            Copyright &copy; <span class="js-year-copy">2017</span>
        </p>
    </div>
</div>
<div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
    <div class="content content-full">
    <!-- Header -->
        <div class="px-30 py-10">
            <a class="link-effect font-w700">
                <i class="si si-fire text-danger"></i>
                <span class="font-size-xl text-danger">PLN</span>
            </a>
            <h1 class="h3 font-w700 mt-30 mb-10">Welcome to Your Dashboard</h1>
                <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
            </div>
            <form class="js-validation-signin px-30" action="cek_login.php" method="post">
            <div class="form-group row">
                <div class="col-12">
                    <div class="form-material floating">
                        <input type="username" class="form-control" id="username" name="username">
                        <label for="username">Username</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <div class="form-material floating">
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
            </div>
            <div class="form-group row gutters-tiny">
                <div class="col-12 mb-10">
                    <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" name="login" value="login">
                        <i class="si si-login mr-10"></i> Sign In
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>