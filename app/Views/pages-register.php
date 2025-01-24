<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Register & Signup")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="index.html" class="logo-dark">
                                <span><img src="/images/logo-dark.png" alt="" height="22"></span>
                            </a>

                            <a href="index.html" class="logo-light">
                                <span><img src="/images/logo-light.png" alt="" height="22"></span>
                            </a>
                        </div>

                        <form action="#">

                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" type="text" id="name" required="" placeholder="Enter your Name">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <a href="pages-recoverpw.html" class="text-muted float-end"><small></small></a>
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                            </div>

                            <div class="form-group mb-3">
                                <div class="">
                                    <input class="form-check-input" type="checkbox" id="checkbox-signin" checked>
                                    <label class="form-check-label ms-2" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary w-100" type="submit"> Sign Up </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-white-50">Already have an account ? <a href="pages-login.html" class="text-white font-weight-medium ms-1">Log In</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>

    <?= $this->include("partials/footer-scripts") ?>

</body>

</html>