<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "File Uploads")) ?>

    <!-- Plugins css -->
    <link href="/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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

                    <?php echo view("partials/page-title", array("title" => "Forms", "subtitle" => "File Uploads")) ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Dropzone File Upload</h4>
                                    <p class="sub-header">
                                        DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                    </p>

                                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                            <h3>Drop files here or click to upload.</h3>
                                            <span class="text-muted font-size-13">(This is just a demo dropzone. Selected files are
                                                <strong>not</strong> actually uploaded.)</span>
                                        </div>
                                    </form>

                                    <!-- Preview -->
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- file preview template -->
                    <div class="d-none" id="uploadPreviewTemplate">
                        <div class="card mt-1 mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                        <p class="mb-0" data-dz-size></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                            <i data-lucide="x"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <script src="/libs/dropzone/min/dropzone.min.js"></script>

    <!-- Demo js-->
    <script src="/js/pages/form-fileuploads.js"></script>

</body>

</html>