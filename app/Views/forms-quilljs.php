<?= $this->include("partials/main") ?>

<head>

    <?php echo view("partials/title-meta", array("title" => "Quilljs Editor")) ?>

    <!-- Plugins css -->
    <link href="/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

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

                    <?php echo view("partials/page-title", array("title" => "Quilljs Editor", "subtitle" => "Forms")) ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Snow Editor</h4>
                                    <p class="sub-header">Snow is a clean, flat toolbar theme.</p>

                                    <div id="snow-editor" style="height: 300px;">
                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>
                                    </div> <!-- end Snow-editor-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Bubble Editor</h4>
                                    <p class="sub-header">Bubble is a simple tooltip based theme.</p>

                                    <div id="bubble-editor" style="height: 300px;">
                                        <h3><span class="ql-size-large">Hello World!</span></h3>
                                        <p><br></p>
                                        <h3>This is an simple editable area.</h3>
                                        <p><br></p>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p><br></p>
                                        <p>
                                            End of simple area
                                        </p>
                                    </div> <!-- end Snow-editor-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->
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

    <!-- Plugins js -->
    <script src="/libs/quill/quill.min.js"></script>

    <!-- Demo js-->
    <script src="/js/pages/form-quilljs.js"></script>

</body>

</html>