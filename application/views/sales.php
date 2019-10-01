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

        <!-- Bootstrap table css -->
        <link href="assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

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
                    <a href="index.html" class="logo"></i><span><img src="assets/images/logo.png" style="width: 150px; height:61px; "></span></a> 
                    <!-- <div class="logo">
                        <a href="index.html" class="logo"><span>Ub<i
                                class="md md-album"></i>ld</span></a>
                    </div> -->
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
                                <a href="dashboard_2.html"><i class="md md-dashboard"></i>Dashboard</a>

                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-color-lens"></i>Agents</a>
                                <ul class="submenu">
                                    <li><a href="add-agents.html">Add Agents</a></li>
                                    <li><a href="added-agents.html">Added Agents</a></li>
                                    <li><a href="ui-panels.html">Track Agents</a></li>

                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-color-lens"></i>Drivers</a>
                                <ul class="submenu">
                                    <li><a href="add-drivers.html">Add Drivers</a></li>
                                    <li><a href="add-drivers.html">Added Drivers</a></li>
                                    <li><a href="ui-panels.html">Track Drivers</a></li>

                                </ul>
                            </li> 
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

                        <h4 class="page-title">Bootstrap Tables</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Ubold</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li class="active">
                                Bootstrap Tables
                            </li>
                        </ol>
                    </div>
                </div>

                <!--Basic Columns-->
                <!--===================================================-->

               


                <!--Checkbox Select-->
                <!--===================================================-->
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Sales Information</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Sales information are displayed here
                            </p>

                            <table data-toggle="table"
                                   data-page-size="10"
                                   data-pagination="true" class="table-bordered ">
                                <thead>
                                    <tr>
                                        <th data-field="#" data-checkbox="true"></th>
                                        <th data-field="id" data-switchable="false">OrderID</th>
                                        <th data-field="name" data-switchable="false">Customer Name</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="ph">Phone</th>
                                        <th data-field="add">Address</th>
                                        <th data-field="postcode" class="text-center">PostCode</th>
                                        <th data-field="viaagent" data-switchable="false">Via Agent</th>
                                        <th data-field="detail" data-switchable="false">Details</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>123</td>
                                        <td>siqandar</td>
                                        <td>siqandar@gmail.com</td>
                                        <td>01213123123</td>
                                        <td>xyz</td>
                                        <td>54000</td>
                                        <td>johnson</td>
                                        <td><span class="label label-table label-success" >Active</span></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>123</td>
                                        <td>siqandar</td>
                                        <td>siqandar@gmail.com</td>
                                        <td>01213123123</td>
                                        <td>xyz</td>
                                        <td>54000</td>
                                        <td>johnson</td>
                                        <td><span class="label label-table label-success" >Active</span></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>123</td>
                                        <td>siqandar</td>
                                        <td>siqandar@gmail.com</td>
                                        <td>01213123123</td>
                                        <td>xyz</td>
                                        <td>54000</td>
                                        <td>johnson</td>
                                        <td><span class="label label-table label-success" >Active</span></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->


                <!--Radio Select-->
                <!--===================================================-->

<div class="row">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs tabs">
                <li class="active tab">
                    <a href="#home-2" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Client Details</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#profile-2" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Device Details</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#messages-2" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                        <span class="hidden-xs">Problem Details</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                        <span class="hidden-xs">Primary Test</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#assign" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                        <span class="hidden-xs">Assign</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="home-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                
                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th data-field="#" data-checkbox="true"></th>
                                            <th data-field="id" data-switchable="false">OrderID</th>
                                            <th data-field="name" data-switchable="false">Customer Name</th>
                                            <th data-field="email">Email</th>
                                            <th data-field="ph">Phone</th>
                                            <th data-field="add">Address</th>
                                            <th data-field="postcode" class="text-center">PostCode</th>
                                            <th data-field="viaagent" data-switchable="false">Via Agent</th>
                                            <th data-field="detail" data-switchable="false">Details</th>
                                        </tr>
                                    </thead>
    
    
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>siqandar</td>
                                            <td>siqandar@gmail.com</td>
                                            <td>01213123123</td>
                                            <td>xyz</td>
                                            <td>54000</td>
                                            <td>johnson</td>
                                            <td><span class="label label-table label-success" >Active</span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>siqandar</td>
                                            <td>siqandar@gmail.com</td>
                                            <td>01213123123</td>
                                            <td>xyz</td>
                                            <td>54000</td>
                                            <td>johnson</td>
                                            <td><span class="label label-table label-success" >Active</span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>siqandar</td>
                                            <td>siqandar@gmail.com</td>
                                            <td>01213123123</td>
                                            <td>xyz</td>
                                            <td>54000</td>
                                            <td>johnson</td>
                                            <td><span class="label label-table label-success" >Active</span></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                
    
                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th data-field="#" data-checkbox="true"></th>
                                            <th data-field="id" data-switchable="false">OrderID</th>
                                            <th data-field="manufacturer" data-switchable="false">Manufacturer</th>
                                            <th data-field="modelname">Model Name</th>
                                            <th data-field="modelname">Model Number</th>
                                            <th data-field="imei">IMEI</th>
                                            <th data-field="serialnumber" class="text-center">Serial Number</th>
                                            <th data-field="checklist" data-switchable="false">Check List</th>
                                            
                                        </tr>
                                    </thead>
    
    
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>Iphone</td>
                                            <td>7s</td>
                                            <td>01213123123</td>
                                            <td>ad 234234</td>
                                            <td>213234dsfs</td>
                                            <td>sim/cover</td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>samsung</td>
                                            <td>Note8</td>
                                            <td>01213123123</td>
                                            <td>adgsfgg32</td>
                                            <td>asdfef323</td>
                                            <td>battery</td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>siqandar</td>
                                            <td>siqandar@gmail.com</td>
                                            <td>01213123123</td>
                                            <td>xyz</td>
                                            <td>54000</td>
                                            <td>johnson</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane" id="messages-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                
                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th data-field="#" data-checkbox="true"></th>
                                            <th data-field="id" data-switchable="false">OrderID</th>
                                            <th data-field="issues" data-switchable="false">Issues</th>
                                            <th data-field="name" data-switchable="false">Notes</th>
                                            
                                            
                                            <th data-field="add">Order Receieved</th>
                                            <th data-field="postcode" class="text-center">Due Date</th>
                                            <th data-field="discount">Discount</th>
                                            <th data-field="price">Price</th>
                                            <th data-field="viaagent" data-switchable="false">Advance Paid</th>
                                            <th data-field="paymentamount" data-switchable="false">Credit</th>
                                            
                                        </tr>
                                    </thead>
    
    
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>LCD</td>
                                            <td>lcd is broken</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>siqandar</td>
                                            <td>siqandar@gmail.com</td>
                                            <td>01213123123</td>
                                            <td>xyz</td>
                                            <td>54000</td>
                                            <td>johnson</td>
                                            <td></td>
                                            <td></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>siqandar</td>
                                            <td>siqandar@gmail.com</td>
                                            <td>01213123123</td>
                                            <td>xyz</td>
                                            <td>54000</td>
                                            <td>johnson</td>
                                            <td></td>
                                            <td></td>
                                          
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings-2">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                
                                <table data-toggle="table"
                                       data-page-size="10"
                                       data-pagination="true" class="table-bordered ">
                                    <thead>
                                        <tr>
                                            <th data-field="#" data-checkbox="true"></th>
                                            <th data-field="id" data-switchable="false">OrderID</th>
                                            <th data-field="camera" data-switchable="false">Camera Test</th>
                                            <th data-field="charging" data-switchable="false">Charging(on/off)</th>
                                            <th data-field="lcd" data-switchable="false">Lcd Display</th>
                                            <th data-field="touchscreen">Touch Screen</th>
                                            <th data-field="buttoncheck" class="text-center">Button Check</th>
                                            
                                            
                                        </tr>
                                    </thead>
    
    
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            <td>Faulty</td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>Faulty</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>123</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            <td>Faulty</td>
                                            <td>Working</td>
                                            <td>Working</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="assign">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    
                                    <table data-toggle="table"
                                           data-page-size="10"
                                           data-pagination="true" class="table-bordered ">
                                        <thead>
                                            <tr>
                                                <th data-field="#" data-checkbox="true"></th>
                                                <th data-field="id" data-switchable="false">OrderID</th>
                                                <th data-field="manufacturer" data-switchable="false">Manufacturer</th>
                                                <th data-field="modelname">Model Name</th>
                                                <th data-field="modelnumber">Model Number</th>
                                                <th data-field="imei">IMEI</th>
                                                <th data-field="serialnumber" class="text-center">Serial Number</th>
                                                <th data-field="checklist" data-switchable="false">Check List</th>
                                                <th data-field="issues" data-switchable="false">Issues</th>
                                                <th data-field="name" data-switchable="false">Notes</th>                                           
                                               <th data-field="add">Order Receieved</th>
                                               <th data-field="duedate">Due Date</th>
                                                <th data-field="primarytest" data-switchable="false">Primary Test</th>
                                                <th data-field="status" data-switchable="true">Status</th>
                                                </tr>
                                        </thead>
        
        
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>123</td>
                                                <td>Iphone</td>
                                                <td></td>
                                                <td>hekkkk</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span >Camera = Pass</span><br><span > Lcd = Fail </span><br><span> Charging = Pass</span><br></td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                    <td></td>
                                                    <td>123</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                        <td></td>
                                                        <td>123</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        
                                                    </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>

</div>

                <!--Sort & Format Column-->
                <!--===================================================-->

                


                <!--Basic Toolbar-->
                <!--===================================================-->
                


                <!--Custom Toolbar-->
                <!--===================================================-->
                


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

        <!-- Bootstrap plugin js -->
        <script src="assets/plugins/bootstrap-table/js/bootstrap-table.min.js"></script>
        <script src="assets/pages/jquery.bs-table.js"></script>

        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>