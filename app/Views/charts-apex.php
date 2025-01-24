<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Apexcharts")) ?>

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

                    <?php echo view("partials/page-title", array("title" => "Apex Charts", "subtitle" => "Charts")) ?>

                    <div class="row">
                        <div class="col-12">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Sparkline Charts</h4>

                                    <div id="cardCollpase1" class="collapse show" dir="ltr">
                                        <div class="row pt-3">
                                            <div class="col-md-4">
                                                <div id="spark1" class="apex-charts mb-sm-0 mb-4" data-colors="#00acc1"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="spark2" class="apex-charts mb-sm-0 mb-4" data-colors="#DCE6EC"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="spark3" class="apex-charts" data-colors="#f672a7"></div>
                                            </div>
                                        </div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Line with Data Labels</h4>

                                    <div id="cardCollpase2" class="collapse show" dir="ltr">
                                        <div id="apex-line-1" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Gradient Line Chart</h4>

                                    <div id="cardCollpase3" class="collapse show" dir="ltr">
                                        <div id="apex-line-2" class="apex-charts pt-3" data-colors="#f672a7"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Stacked Area</h4>

                                    <div id="cardCollpase4" class="collapse show" dir="ltr">
                                        <div id="apex-area" class="apex-charts pt-3" data-colors="#00acc1,#f7b84b,#CED4DC"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Basic Column Chart</h4>

                                    <div id="cardCollpase5" class="collapse show" dir="ltr">
                                        <div id="apex-column-1" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c,#CED4DC"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Column Chart with Datalabels</h4>

                                    <div id="cardCollpase6" class="collapse show" dir="ltr">
                                        <div id="apex-column-2" class="apex-charts pt-3" data-colors="#00acc1"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Mixed Chart - Line & Area</h4>

                                    <div id="cardCollpase7" class="collapse show" dir="ltr">
                                        <div id="apex-mixed-1" class="apex-charts pt-3" data-colors="#CED4DC,#00acc1"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Basic Bar Chart</h4>

                                    <div id="cardCollpase8" class="collapse show" dir="ltr">
                                        <div id="apex-bar-1" class="apex-charts pt-3" data-colors="#1abc9c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Bar with Negative Values</h4>

                                    <div id="cardCollpase9" class="collapse show" dir="ltr">
                                        <div id="apex-bar-2" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Line, Column & Area Chart</h4>

                                    <div id="cardCollpase10" class="collapse show" dir="ltr">
                                        <div id="apex-mixed-2" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c,#f672a7"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Multiple Y-Axis Chart</h4>

                                    <div id="cardCollpase11" class="collapse show" dir="ltr">
                                        <div id="apex-mixed-3" class="apex-charts pt-3" data-colors="#00acc1,#ebf2f6,#f672a7"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Simple Bubble Chart</h4>

                                    <div id="cardCollpase12" class="collapse show" dir="ltr">
                                        <div id="apex-bubble-1" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c,#f672a7"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">3D Bubble Chart</h4>

                                    <div id="cardCollpase13" class="collapse show" dir="ltr">
                                        <div id="apex-bubble-2" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c,#f672a7,#6c757d"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Scatter (XY) Chart</h4>

                                    <div id="cardCollpase14" class="collapse show" dir="ltr">
                                        <div id="apex-scatter-1" class="apex-charts pt-3" data-colors="#1abc9c,#f672a7,#6c757d"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Scatter Chart - Datetime</h4>

                                    <div id="cardCollpase15" class="collapse show" dir="ltr">
                                        <div id="apex-scatter-2" class="apex-charts pt-3" data-colors="#1abc9c,#f672a7,#6c757d,#00acc1,#6559cc"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Simple Candlestick Chart</h4>

                                    <div id="cardCollpase16" class="collapse show" dir="ltr">
                                        <div id="apex-candlestick-1" class="apex-charts pt-3" data-colors="#00acc1,#1abc9c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Combo Candlestick Chart</h4>

                                    <div id="cardCollpase17" class="collapse show" dir="ltr">
                                        <div class="pt-3">
                                            <div id="apex-candlestick-2" class="apex-charts" data-colors="#00acc1,#f7b84b"></div>
                                            <div id="apex-candlestick-3" class="apex-charts" data-colors="#f45454,#37cde6"></div>
                                        </div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Simple Pie Chart</h4>

                                    <div id="cardCollpase18" class="collapse show" dir="ltr">
                                        <div id="apex-pie-1" class="apex-charts pt-3" data-colors="#00acc1,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Gradient Donut Chart</h4>

                                    <div id="cardCollpase19" class="collapse show" dir="ltr">
                                        <div id="apex-pie-2" class="apex-charts pt-3" data-colors="#00acc1,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Patterned Donut Chart</h4>

                                    <div id="cardCollpase20" class="collapse show" dir="ltr">
                                        <div id="apex-pie-3" class="apex-charts pt-3" data-colors="#00acc1,#4fc6e1,#4a81d4,#00b19d,#f1556c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Basic RadialBar Chart</h4>

                                    <div id="cardCollpase21" class="collapse show" dir="ltr">
                                        <div id="apex-radialbar-1" class="apex-charts pt-3" data-colors="#6c757d"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Multiple RadialBars</h4>

                                    <div id="cardCollpase22" class="collapse show" dir="ltr">
                                        <div id="apex-radialbar-2" class="apex-charts pt-3" data-colors="#00acc1,#e36498,#23b397,#f7b84b"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Stroked Circular Guage</h4>

                                    <div id="cardCollpase23" class="collapse show" dir="ltr">
                                        <div id="apex-radialbar-3" class="apex-charts pt-3" data-colors="#f1556c"></div>
                                    </div> <!-- collapsed end -->
                                </div> <!-- end card-body -->
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

    <!-- Third Party js-->
    <script src="/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>

    <!-- Demo js -->
    <script src="/js/pages/apexcharts.js"></script>
</body>

</html>