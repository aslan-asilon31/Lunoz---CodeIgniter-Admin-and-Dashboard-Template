<?= $this->include("partials/main") ?>

<head>

    <?php echo view("partials/title-meta", array("title" => "Error 500")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a href="/" class="logo-dark">
                                <span><img src="/images/logo-dark.png" alt="" height="22"></span>
                            </a>

                            <a href="/" class="logo-light">
                                <span><img src="/images/logo-light.png" alt="" height="22"></span>
                            </a>
                        </div>

                        <div class="text-center w-50 mx-auto my-4">
                            <img src="/images/500-error.svg" title="invite.svg">
                        </div>

                        <h3 class="text-center mb-4 mt-3">Internal Server Error</h3>

                        <p class="text-muted text-center mt-3">We are experiencing an internal server problem, please try back later.</p>
                        <div class="mt-4 text-center">
                            <a href="/" class="btn btn-primary w-100">Back to Home</a>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <?= $this->include("partials/footer-scripts") ?>

</body>

</html>