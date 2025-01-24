<?= $this->include("partials/main") ?>

<head>

    <?php echo view("partials/title-meta", array("title" => "Tooltips & Popovers")) ?>

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

                    <?php echo view("partials/page-title", array("title" => "Tooltips & Popovers", "subtitle" => "Base UI")) ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Popovers</h4>
                                    <p class="sub-header">Add small overlays of content, like those on
                                        the iPad, to any element for housing secondary information.</p>

                                    <div class="button-list" id="popover-container">
                                        <button type="button" class="btn btn-primary" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on top
                                        </button>

                                        <button type="button" class="btn btn-primary" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on bottom
                                        </button>

                                        <button type="button" class="btn btn-primary" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on right
                                        </button>

                                        <button type="button" class="btn btn-primary" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">
                                            Popover on left
                                        </button>

                                        <button type="button" tabindex="0" class="btn btn-primary" data-bs-container="#popover-container" data-bs-toggle="popover" data-trigger="focus" data-bs-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                                            Dismissible popover
                                        </button>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Tooltips</h4>
                                    <p class="sub-header">Four options are available: top, right, bottom,
                                        and left aligned.</p>

                                    <div class="button-list" id="tooltip-container">
                                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>

                                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

                                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Tooltip on left</button>

                                        <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Tooltip on right</button>
                                    </div>
                                </div>

                            </div> <!-- end card -->
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

    <!-- Vendor js -->
    <?= $this->include("partials/footer-scripts") ?>

</body>

</html>