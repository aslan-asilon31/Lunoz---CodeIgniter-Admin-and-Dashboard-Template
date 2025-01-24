<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Material Design Icons")) ?>

    <?= $this->include("partials/head-css") ?>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <?= $this->include("partials/sidenav") ?>

        <!-- Start Page Content here -->
        <div class="page-content">

            <?= $this->include("partials/topbar") ?>

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <?php echo view("partials/page-title", array("title" => "Material Design Icons", "subtitle" => "Icons")) ?>
                    <!-- end page title -->

                    <div class="row icons-list-demo">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">New Icons v5.8.55</h4>
                                    <div class="row icon-list-demo" id="newIcons"> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">All Icons</h4>
                                    <div class="row icon-list-demo" id="icons"> </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="header-title mb-4">Size</h4>

                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-18px mdi-account"></i> mdi-18px
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-24px mdi-account"></i> mdi-24px
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-36px mdi-account"></i> mdi-36px
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-48px mdi-account"></i> mdi-48px
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="header-title mb-4">Rotate</h4>

                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-45 mdi-account"></i> mdi-rotate-45
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-90 mdi-account"></i> mdi-rotate-90
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-135 mdi-account"></i> mdi-rotate-135
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-180 mdi-account"></i> mdi-rotate-180
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-225 mdi-account"></i> mdi-rotate-225
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-270 mdi-account"></i> mdi-rotate-270
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-315 mdi-account"></i> mdi-rotate-315
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="header-title mb-4">Spin</h4>

                                    <div class="row icons-list-demo">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spin mdi-loading"></i> mdi-spin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spin mdi-star"></i> mdi-spin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->

            <?= $this->include("partials/footer") ?>

        </div>
        <!-- End Page content -->


    </div>
    <!-- END wrapper -->

    <?= $this->include("partials/footer-scripts") ?>

    <!-- custom dmeo js-->
    <script src="/js/pages/materialdesign.js"></script>


</body>

</html>