<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App Favicon icon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App Title -->
        <title>Ubold - Responsive Admin Dashboard Template</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="index.html" class="logo"><span>Ub<i
                                class="md md-album"></i>ld</span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="navbar-c-items">
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="dropdown navbar-c-items">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                    <li class="list-group slimscroll-noti notification-list">
                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-bell-o noti-custom"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">Updates</h5>
                                                <p class="m-0">
                                                    <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-user-plus noti-pink"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">New user registered</h5>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                        <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>

                                       <!-- list item-->
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="list-group-item text-right">
                                            <small class="font-600">See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock text-custom m-r-10"></i> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off text-danger m-r-10"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="#"><i class="md md-dashboard"></i>Dashboard</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="index.html">Dashboard 01</a>
                                    </li>
                                    <li>
                                        <a href="dashboard_2.html">Dashboard 02</a>
                                    </li>
                                    <li>
                                        <a href="dashboard_3.html">Dashboard 03</a>
                                    </li>
                                    <li>
                                        <a href="dashboard_4.html">Dashboard 04</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-color-lens"></i>UI Kit</a>
                                <ul class="submenu">
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-loading-buttons.html">Loading Buttons</a></li>
                                    <li><a href="ui-panels.html">Panels</a></li>
                                    <li><a href="ui-portlets.html">Portlets</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-notification.html">Notification</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a>
                                    <li><a href="ui-video.html">Video</a>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-layers"></i>Components</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span>Elements</span>
                                            </li>
                                            <li><a href="components-grid.html">Grid</a></li>
                                            <li><a href="components-widgets.html">Widgets</a></li>
                                            <li><a href="components-nestable-list.html">Nesteble</a></li>
                                            <li><a href="components-range-sliders.html">Range sliders</a></li>
                                            <li><a href="components-masonry.html">Masonry</a></li>
                                            <li><a href="components-animation.html">Animation</a></li>
                                            <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
                                            <li><a href="components-treeview.html">Tree view</a></li>
                                            <li><a href="components-tour.html">Tour</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <span>Forms</span>
                                            </li>
                                            <li><a href="form-elements.html">General Elements</a></li>
                                            <li><a href="form-advanced.html">Advanced Form</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-pickers.html">Form Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <span>Forms</span>
                                            </li>
                                            <li><a href="form-mask.html">Form Masks</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                            <li><a href="form-code-editor.html">Code Editor</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                            <li><a href="form-xeditable.html">X-editable</a></li>
                                            <li><a href="form-image-crop.html">Image Crop</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-class"></i>Other</a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html">Basic Tables</a></li>
                                            <li><a href="tables-datatable.html">Data Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                                            <li><a href="tables-foo-tables.html">FooTable</a></li>
                                            <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                            <li><a href="tables-jsgrid.html">JsGrid Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="chart-flot.html">Flot Chart</a></li>
                                            <li><a href="chart-morris.html">Morris Chart</a></li>
                                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                                            <li><a href="chart-peity.html">Peity Charts</a></li>
                                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                            <li><a href="chart-c3.html">C3 Charts</a></li>
                                            <li><a href="chart-nvd3.html"> Nvd3 Charts</a></li>
                                            <li><a href="chart-sparkline.html">Sparkline charts</a></li>
                                            <li><a href="chart-radial.html">Radial charts</a></li>
                                            <li><a href="chart-other.html">Other Chart</a></li>
                                            <li><a href="chart-ricksaw.html">Ricksaw Chart</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                                            <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                            <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                            <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                            <li><a href="icons-weather.html">Weather Icons</a></li>
                                            <li><a href="icons-typicons.html">Typicons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="map-google.html"> Google Map</a></li>
                                            <li><a href="map-vector.html"> Vector Map</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Email</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html"> Inbox</a></li>
                                            <li><a href="email-read.html"> Read Mail</a></li>
                                            <li><a href="email-compose.html"> Compose Mail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-pages"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="page-starter.html">Starter Page</a></li>
                                            <li><a href="page-login.html">Login</a></li>
                                            <li><a href="page-login-v2.html">Login v2</a></li>
                                            <li><a href="page-register.html">Register</a></li>
                                            <li><a href="page-register-v2.html">Register v2</a></li>
                                            <li><a href="page-signup-signin.html">Signin - Signup</a></li>
                                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                            <li><a href="page-400.html">Error 400</a></li>
                                            <li><a href="page-403.html">Error 403</a></li>
                                            <li><a href="page-404.html">Error 404</a></li>
                                            <li><a href="page-404_alt.html">Error 404-alt</a></li>
                                            <li><a href="page-500.html">Error 500</a></li>
                                            <li><a href="page-503.html">Error 503</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-folder-special"></i>Extras</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="extra-profile.html">Profile</a></li>
                                            <li><a href="extra-timeline.html">Timeline</a></li>
                                            <li><a href="extra-sitemap.html">Site map</a></li>
                                            <li><a href="extra-invoice.html">Invoice</a></li>
                                            <li><a href="extra-email-template.html">Email template</a></li>
                                            <li><a href="extra-maintenance.html">Maintenance</a></li>
                                            <li><a href="extra-coming-soon.html">Coming-soon</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="extra-faq.html">FAQ</a></li>
                                            <li><a href="extra-search-result.html">Search result</a></li>
                                            <li><a href="extra-gallery.html">Gallery</a></li>
                                            <li><a href="extra-pricing.html">Pricing</a></li>
                                            <li><a href="apps-calendar.html"> Calendar</a></li>
                                            <li><a href="apps-contact.html"> Contact</a></li>
                                            <li><a href="apps-taskboard.html"> Taskboard</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md md-account-circle"></i>CRM</a>
                                <ul class="submenu">
                                    <li><a href="crm-dashboard.html"> Dashboard </a></li>
                                    <li><a href="crm-contact.html"> Contacts </a></li>
                                    <li><a href="crm-opportunities.html"> Opportunities </a></li>
                                    <li><a href="crm-leads.html"> Leads </a></li>
                                    <li><a href="crm-customers.html"> Customers </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-shopping-cart"></i>eCommerce</a>
                                <ul class="submenu">
                                    <li><a href="ecommerce-dashboard.html"> Dashboard</a></li>
                                    <li><a href="ecommerce-products.html"> Products</a></li>
                                    <li><a href="ecommerce-product-detail.html"> Product Detail</a></li>
                                    <li><a href="ecommerce-product-edit.html"> Product Edit</a></li>
                                    <li><a href="ecommerce-orders.html"> Orders</a></li>
                                    <li><a href="ecommerce-sellers.html"> Sellers</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu        -->
                    </div>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="page-title">Track Agents</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Agents</a></li>
                            <li class="active">Track Agents</li>
                        </ol>
                    </div>
                </div>
                   <div class="col-md-3">
                <div class="panel-heading">
                    <select class="form-control" style="margin-left: -19px;">
                    <option value="">Select Agent</option>
                                                            <option>shahbaz</option>
                                                            <option>shahbaz</option>
                                                            <option>shahbaz</option>
                                                            <option>shahbaz</option>
                                                            <option>Touqeer</option>
                                                            <option>asdfas</option>
                                                            <option>test</option>
                                                            <option>aaa</option>
                    </select>
                    
                    </div>
                </div>
                

                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title"><b>Markers</b></h4>

                            <div id="gmaps-markers" class="gmaps"></div>
                        </div>
                    </div>
                </div>




               


               



               

                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2016. All rights reserved.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- main file -->
        <script src="assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="assets/pages/jquery.gmaps.js"></script>


    </body>
</html>