<?= $this->include("partials/main") ?>

<head>
    <?php echo view("partials/title-meta", array("title" => "Form Advanced")) ?>

    <!-- Plugins css -->
    <link href="/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
    <link href="/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />

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

                    <?php echo view("partials/page-title", array("title" => "Form Advanced", "subtitle" => "Forms")) ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Selectize</h4>
                                    <p class="sub-header">
                                        Selectize is the hybrid of a textbox and <code>&lt;select&gt;</code> box. It's jQuery-based and it's useful for tagging, contact lists, country selectors, and so on.
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Default</label>
                                                <input type="text" id="selectize-tags" value="Awesome, Admin, Dashboard">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Select</label> <br />
                                                <select id="selectize-select">
                                                    <option data-display="Select">Nothing</option>
                                                    <option value="1">Some option</option>
                                                    <option value="2">Another option</option>
                                                    <option value="3" disabled>A disabled option</option>
                                                    <option value="4">Potato</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Maximum Allow</label>
                                                <select id="selectize-maximum">
                                                    <option value="">Select a state...</option>
                                                    <option value="AL">Alabama</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="CA" selected>California</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="DC">District of Columbia</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="WV">West Virginia</option>
                                                    <option value="WI">Wisconsin</option>
                                                    <option value="WY" selected>Wyoming</option>
                                                </select>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Links</label>
                                                <select id="selectize-links"></select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Delete Alert</label>
                                                <input type="text" id="selectize-confirm" value="awesome,neat,yeah">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Basic Optgroups</label>
                                                <select id="selectize-optgroup" multiple placeholder="Select gear...">
                                                    <option value="">Select gear...</option>
                                                    <optgroup label="Climbing">
                                                        <option value="pitons">Pitons</option>
                                                        <option value="cams">Cams</option>
                                                        <option value="nuts">Nuts</option>
                                                        <option value="bolts">Bolts</option>
                                                        <option value="stoppers">Stoppers</option>
                                                        <option value="sling">Sling</option>
                                                    </optgroup>
                                                    <optgroup label="Skiing">
                                                        <option value="skis">Skis</option>
                                                        <option value="skins">Skins</option>
                                                        <option value="poles">Poles</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Programmatic Optgroups</label>
                                                <select id="selectize-programmatic" placeholder="Select animal..."></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Optgroup Columns</label>
                                                <input type="text" id="selectize-optgroup-column" placeholder="Select cars...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-lg-0">
                                                <label class="form-label">Remove Button</label>
                                                <input type="text" class="selectize-close-btn" value="awesome,neat">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label class="form-label" for="select-code-language">Dropdown Header</label>
                                                <select id="select-code-language" class="selectize-drop-header" placeholder="Select a language...">
                                                    <option value="txt">Text</option>
                                                    <option value="md">Markdown</option>
                                                    <option value="html">HTML</option>
                                                    <option value="php">PHP</option>
                                                    <option value="python">Python</option>
                                                    <option value="java">Java</option>
                                                    <option value="js" selected>JavaScript</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="vhdl">VHDL</option>
                                                    <option value="verilog">Verilog</option>
                                                    <option value="c#">C#</option>
                                                    <option value="c++">C/C++</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Switchery</h4>
                                    <p class="sub-header">
                                        iOS 7 style switches for your checkboxes
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="mb-1">Basic</label>
                                            <p class="text-muted font-size-13">
                                                Add an attribute <code>
                                                    data-plugin="switchery" data-color="@colors"</code>
                                                to your input element and it will be converted into switch.
                                            </p>

                                            <div class="switchery-demo">
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#039cfd" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#f1b53d" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff5d48" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#3db9dc" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#9261c6" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#98a6ad" />
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <label class="mb-1 mt-3 mt-lg-0">Sizes & Secondary color</label>
                                            <p class="text-muted font-size-13">
                                                Add an attribute <code>
                                                    data-size="small",data-size="large"</code>
                                                to your input element and it will be converted into switch.
                                                Add an attribute <code>
                                                    data-color="@color" data-secondary-color="@color"</code>
                                                to your input element and it will be converted into switch.
                                            </p>

                                            <div class="switchery-demo">
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#ff7aa3" />
                                                <input type="checkbox" checked data-plugin="switchery" data-color="#2b3d51" data-size="large" />
                                                <input type="checkbox" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" />
                                                <input type="checkbox" data-plugin="switchery" data-color="#9261c6" data-secondary-color="#ff7aa3" checked />
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Select2</h4>
                                    <p class="sub-header">The jQuery replacement for select boxes</p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1 fw-medium">Single Select</p>
                                            <p class="text-muted font-size-13">
                                                Select2 can take a regular select box like this...
                                            </p>

                                            <select class="form-control" data-toggle="select2">
                                                <option>Select</option>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- end col -->

                                        <div class="col-md-6">
                                            <p class="mb-1 fw-medium mt-3 mt-md-0">Multiple Select</p>
                                            <p class="text-muted font-size-13">
                                                Select2 can take a regular select box like this...
                                            </p>

                                            <select class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Bootstrap MaxLength</h4>
                                    <p class="sub-header">Uses the HTML5 attribute "maxlength" to work.</p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label class="mb-1 fw-medium">Default usage</label>
                                                <p class="text-muted font-size-13">
                                                    The badge will show up by default when the remaining chars are 10 or less:
                                                </p>
                                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />
                                            </div>

                                            <div>
                                                <label class="mb-1 mt-4 fw-medium">Threshold value</label>
                                                <p class="text-muted font-size-13">
                                                    Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                                </p>
                                                <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                            </div>

                                            <div>
                                                <label class="mb-1 mt-4 fw-medium">All the options</label>
                                                <p class="text-muted m-b-15 font-size-13">
                                                    Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                                </p>
                                                <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-md-6">
                                            <div class="mt-3 mt-md-0">

                                                <label class="mb-1 fw-medium">Position</label>
                                                <p class="text-muted font-size-13">
                                                    All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                                    is specified, the positioning will be defauted to 'bottom'.
                                                </p>
                                                <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />

                                                <div>
                                                    <label class="mb-1 mt-4 fw-medium">Textareas</label>
                                                    <p class="text-muted font-size-13">
                                                        Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                    </p>
                                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Multiple Select</h4>
                                    <p class="sub-header">Example of multiple select.</p>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="mt-0 font-size-14 mb-1">Default</h5>
                                            <p class="text-muted font-size-13">
                                                Use a <code>
                                                    &lt;select multiple /&gt;</code>
                                                as your input element for a tags input, to gain true multivalue support.
                                            </p>

                                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]" data-plugin="multiselect">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option selected>Philadelphia Eagles</option>
                                                <option selected>Washington Redskins</option>
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                                <option selected>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                            </select>

                                        </div> <!-- end col -->

                                        <div class="col-md-4">
                                            <h5 class="mb-1 font-size-14 mt-3 mt-md-0 fw-medium">Grouped Options</h5>
                                            <p class="text-muted font-size-13">
                                                Use a <code>
                                                    &lt;select multiple /&gt;</code>
                                                as your input element for a tags input, to gain true multivalue support.
                                            </p>

                                            <select multiple="multiple" class="multi-select" id="my_multi_select2" name="my_multi_select2[]" data-plugin="multiselect" data-selectable-optgroup="true">
                                                <optgroup label="NFC EAST">
                                                    <option>Dallas Cowboys</option>
                                                    <option>New York Giants</option>
                                                    <option>Philadelphia Eagles</option>
                                                    <option>Washington Redskins</option>
                                                </optgroup>
                                                <optgroup label="NFC NORTH">
                                                    <option>Chicago Bears</option>
                                                    <option>Detroit Lions</option>
                                                    <option>Green Bay Packers</option>
                                                    <option>Minnesota Vikings</option>
                                                </optgroup>
                                                <optgroup label="NFC SOUTH">
                                                    <option>Atlanta Falcons</option>
                                                    <option>Carolina Panthers</option>
                                                    <option>New Orleans Saints</option>
                                                    <option>Tampa Bay Buccaneers</option>
                                                </optgroup>
                                                <optgroup label="NFC WEST">
                                                    <option>Arizona Cardinals</option>
                                                    <option>St. Louis Rams</option>
                                                    <option>San Francisco 49ers</option>
                                                    <option>Seattle Seahawks</option>
                                                </optgroup>
                                            </select>

                                        </div> <!-- end col -->

                                        <div class="col-md-4">
                                            <h5 class="mb-1 mt-3 mt-md-0 font-size-14">Searchable</h5>
                                            <p class="text-muted font-size-13">
                                                Use a <code>
                                                    &lt;select multiple /&gt;</code>
                                                as your input element for a tags input, to gain true multivalue support.
                                            </p>

                                            <select name="country" class="multi-select" multiple="" id="my_multi_select3">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BA">Bosnia and Herzegowina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Cote d'Ivoire</option>
                                                <option value="HR">Croatia (Hrvatska)</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint LUCIA</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="PM">St. Pierre and Miquelon</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands (British)</option>
                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                <option value="WF">Wallis and Futuna Islands</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div> <!-- end row -->

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Bootstrap Touchspin</h4>
                                    <p class="text-muted font-size-14 mb-3">
                                        A mobile and touch friendly input spinner component for Bootstrap.
                                        Specify attribute <code>data-toggle="touchspin"</code> and your input would be conveterted into touch friendly spinner.
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Using data attributes</label>
                                                <input data-toggle="touchspin" type="text" value="55">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Example with postfix (large)</label>
                                                <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">With prefix</label>
                                                <input data-toggle="touchspin" type="text" data-bts-prefix="$">
                                            </div>

                                            <div>
                                                <label class="form-label">Change button class</label>
                                                <input data-toggle="touchspin" value="77" type="text" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info">
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6 mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label class="form-label">Init with empty value:</label>
                                                <input data-toggle="touchspin" type="text">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Max value - (Default value 100)</label>
                                                <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text">
                                            </div>

                                            <div>
                                                <label class="form-label">With prefix and postfix button</label>
                                                <input data-toggle="touchspin" data-bts-prefix="A Button" data-bts-prefix-extra-class="btn btn-light" data-bts-postfix="A Button" data-bts-postfix-extra-class="btn btn-light" type="text">
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-body -->
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

    <!-- Vendor js -->
    <?= $this->include("partials/footer-scripts") ?>

    <!-- Plugins Js -->
    <script src="/libs/selectize/js/standalone/selectize.min.js"></script>
    <script src="/libs/mohithg-switchery/switchery.min.js"></script>
    <script src="/libs/multiselect/js/jquery.multi-select.js"></script>
    <script src="/libs/jquery.quicksearch/jquery.quicksearch.min.js"></script>
    <script src="/libs/select2/js/select2.min.js"></script>
    <script src="/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Demo js -->
    <script src="/js/pages/form-advanced.js"></script>

</body>

</html>