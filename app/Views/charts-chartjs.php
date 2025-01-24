<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Chart.js Charts")) ?>

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

                    <?php echo view("partials/page-title", array("title" => "Chartjs Charts", "subtitle" => "Charts")) ?>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Line Chart</h4>
                                    <div class="mt-4 chartjs-chart">
                                        <canvas id="line-chart-example" height="350" data-colors="#1abc9c,#f1556c"></canvas>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Bar Chart</h4>

                                    <div class="mt-4 chartjs-chart">
                                        <canvas id="bar-chart-example" height="350" data-colors="#4a81d4,#e3eaef"></canvas>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <div class="mt-4 chartjs-chart">
                                        <canvas id="pie-chart-example" height="350" class="mt-4" data-colors="#00acc1,#fa5c7c,#4fc6e1,#ebeff2"></canvas>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Donut Chart</h4>

                                    <div class="mt-4 chartjs-chart">
                                        <canvas id="donut-chart-example" height="350" data-colors="#6c757d,#1abc9c,#ebeff2"></canvas>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Polar area Chart</h4>

                                    <div class="mt-4 chartjs-chart">
                                        <canvas id="polar-chart-example" height="350" data-colors="#4a81d4,#fa5c7c,#4fc6e1,#ebeff2"> </canvas>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Radar Chart</h4>

                                    <div class="mt-4 chartjs-chart">
                                        <canvas id="radar-chart-example" height="350" data-colors="#39afd1,#a17fe0"></canvas>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
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

    <!-- Chart JS -->
    <script src="/libs/chart.js/Chart.bundle.min.js"></script>

    <!-- Demo js -->
    <script src="/js/pages/chartjs.js"></script>


</body>

</html>