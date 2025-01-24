<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Morris.js Charts")) ?>

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

                    <?php echo view("partials/page-title", array("title" => "Morris Charts", "subtitle" => "Charts")) ?>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" dir="ltr">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Stacked Bar Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-size-15 mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Ethereum</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                                        </p>
                                    </div>
                                    <div id="morris-bar-stacked" style="height: 350px;" class="morris-chart" data-colors="#4a81d4,#4fc6e1,#e3eaef"></div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-6">
                            <div class="card" dir="ltr">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Area Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-size-15 mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="morris-area-example" style="height: 350px;" class="morris-chart" data-colors="#4a81d4,#f1556c"></div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" dir="ltr">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Line Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-size-15 mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-pink"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="morris-line-example" style="height: 350px;" class="morris-chart" data-colors="#4a81d4,#f672a7"></div>
                                </div>
                            </div> <!-- card -->
                        </div> <!-- end row -->

                        <div class="col-lg-6">
                            <div class="card" dir="ltr">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Bar Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-size-15 mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Ethereum</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                                        </p>
                                    </div>
                                    <div id="morris-bar-example" style="height: 350px;" class="morris-chart" data-colors="#02c0ce,#0acf97,#ebeff2"></div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" dir="ltr">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Area Chart with Point</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-size-15 mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="morris-area-with-dotted" style="height: 350px;" class="morris-chart" data-colors="#e3eaef,#00acc1"></div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-6">
                            <div class="card" dir="ltr">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Donut Chart</h4>
                                    <div id="morris-donut-example" style="height: 350px;" class="morris-chart" data-colors="#4fc6e1,#00acc1,#ebeff2"></div>
                                    <div class="text-center">
                                        <p class="text-muted font-size-15 mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Ethereum</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Litecoin</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
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

    <!--Morris Chart-->
    <script src="/libs/morris.js06/morris.min.js"></script>
    <script src="/libs/raphael/raphael.min.js"></script>

    <!-- Demo js -->
    <script src="/js/pages/morris.js"></script>


</body>

</html>