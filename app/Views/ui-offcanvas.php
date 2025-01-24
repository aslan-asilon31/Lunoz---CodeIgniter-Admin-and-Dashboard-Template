<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Offcanvas")) ?>

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

                    <?php echo view("partials/page-title", array("title" => "Offcanvas", "subtitle" => "Base UI")) ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Offcanvas</h4>
                                    <p class="text-muted">
                                        You can use a link with the <code>href</code> attribute, or a button with the <code>data-bs-target</code> attribute. In both cases, the <code>data-bs-toggle="offcanvas"</code> is required.
                                    </p>

                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <div>
                                                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                                                images, lists, etc.
                                            </div>
                                            <div class="dropdown mt-3">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                                    Dropdown button
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-list">
                                        <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                            Link with href
                                        </a>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                            Button with data-bs-target
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Offcanvas Backdrop</h4>
                                    <p class="text-muted">
                                        Scrolling the <code>&lt;body&gt;</code> element is disabled when an offcanvas and its backdrop are visible. Use the <code>data-bs-scroll</code> attribute to toggle <code>&lt;body&gt;</code> scrolling and <code>data-bs-backdrop</code> to toggle the backdrop.
                                    </p>

                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <p>Try scrolling the rest of the page to see this option in action.</p>
                                        </div>
                                    </div>

                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul>
                                                <li>Maecenas tempus, tellus eget rhoncus, sem quam semper.</li>
                                                <li class="mt-1">Cum sociis natoque penatibus ridiculus mus.</li>
                                                <li class="mt-1">Aenean vulputate eleifend tellus aenean leo ligula eleifend condimentum enim.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <p>Try scrolling the rest of the page to see this option in action.</p>
                                        </div>
                                    </div>

                                    <div class="button-list">
                                        <!-- offcanvas Scrolling -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>
                                        <!-- offcanvas Backdrop -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable backdrop (default)</button>
                                        <!-- offcanvas Options -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Offcanvas Placement</h4>
                                    <p class="text-muted">Try the right and bottom examples out below.</p>
                                    <ul class="text-muted">
                                        <li><code>.offcanvas-start</code> places offcanvas on the left of the viewport (shown above)</li>
                                        <li><code>.offcanvas-end</code> places offcanvas on the right of the viewport</li>
                                        <li><code>.offcanvas-top</code> places offcanvas on the top of the viewport</li>
                                        <li><code>.offcanvas-bottom</code> places offcanvas on the bottom of the viewport</li>
                                    </ul>

                                    <!-- offcanvas Top -->
                                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasTopLabel">Offcanvas top</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul>
                                                <li>Maecenas tempus, tellus eget rhoncus, sem quam semper.</li>
                                                <li class="mt-1">Cum sociis natoque penatibus ridiculus mus.</li>
                                                <li class="mt-1">Aenean vulputate eleifend tellus aenean leo ligula eleifend condimentum enim.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- offcanvas Right -->
                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul>
                                                <li>Maecenas tempus, tellus eget rhoncus, sem quam semper.</li>
                                                <li class="mt-1">Cum sociis natoque penatibus ridiculus mus.</li>
                                                <li class="mt-1">Aenean vulputate eleifend tellus aenean leo ligula eleifend condimentum enim.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- offcanvas Bottom -->
                                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul>
                                                <li>Maecenas tempus, tellus eget rhoncus, sem quam semper.</li>
                                                <li class="mt-1">Cum sociis natoque penatibus ridiculus mus.</li>
                                                <li class="mt-1">Aenean vulputate eleifend tellus aenean leo ligula eleifend condimentum enim.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- offcanvas Left -->
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasLeftLabel">Offcanvas Left</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul>
                                                <li>Maecenas tempus, tellus eget rhoncus, sem quam semper.</li>
                                                <li class="mt-1">Cum sociis natoque penatibus ridiculus mus.</li>
                                                <li class="mt-1">Aenean vulputate eleifend tellus aenean leo ligula eleifend condimentum enim.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="button-list">
                                        <!-- offcanvas Top -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle top offcanvas</button>
                                        <!-- offcanvas Right -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
                                        <!-- offcanvas Bottom -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
                                        <!-- offcanvas Left -->
                                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Toggle left offcanvas</button>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                    </div>

                </div> <!-- container -->

            </div> <!-- content -->

            <?= $this->include("partials/footer") ?>

        </div>
        <!-- End Page content -->


    </div>
    <!-- END wrapper -->

    <?= $this->include("partials/footer-scripts") ?>

</body>

</html>