@extends('base')
@section('content')
    <!-- Main Section -->
    <div class="content">
        <!-- Remove This Before You Start -->
        <h1>Admin -  DashBoard</h1>
        <!doctype html>
        <html class="fixed">
        <head>
            <!-- Vendor CSS -->
            <link rel="stylesheet" href="assetsOc/vendor/bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="assetsOc/vendor/font-awesome/css/font-awesome.css" />
            <link rel="stylesheet" href="assetsOc/vendor/magnific-popup/magnific-popup.css" />
            <link rel="stylesheet" href="assetsOc/vendor/bootstrap-datepicker/css/datepicker3.css" />

            <!-- Specific Page Vendor CSS -->
            <link rel="stylesheet" href="assetsOc/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
            <link rel="stylesheet" href="assetsOc/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
            <link rel="stylesheet" href="assetsOc/vendor/morris/morris.css" />

            <!-- Theme CSS -->
            <link rel="stylesheet" href="assetsOc/stylesheets/theme.css" />

            <!-- Skin CSS -->
            <link rel="stylesheet" href="assetsOc/stylesheets/skins/default.css" />

            <!-- Theme Custom CSS -->
            <link rel="stylesheet" href="assetsOc/stylesheets/theme-custom.css">

            <!-- Head Libs -->
            <script src="assetsOc/vendor/modernizr/modernizr.js"></script>

        </head>
        <body>
        <div class="inner-wrapper">
            <section role="main" class="content-body">
                <!-- start: page -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-primary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fa fa-life-ring"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Traveller Terdaftar</h4>
                                                    <div class="info">
                                                        <p id="jmlhTraveller"></p>
                                                        <strong class="amount" id="jmlhTraveller"></strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <a class="text-muted text-uppercase">Fly n Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-secondary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-secondary">
                                                    <i class="fa fa-usd"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Penghasilan dari Admin Fee</h4>
                                                    <div class="info">
                                                        <strong class="amount">Rp </strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <a class="text-muted text-uppercase">Fly n Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-tertiary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-tertiary">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Transaksi Hari Ini</h4>
                                                    <div class="info">
                                                        <strong class="amount">38</strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <a class="text-muted text-uppercase">Fly n Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-6">
                                <section class="panel panel-featured-left panel-featured-quartenary">
                                    <div class="panel-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-quartenary">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Jumlah Pengunjung</h4>
                                                    <div class="info">
                                                        <strong class="amount"> </strong>
                                                    </div>
                                                </div>
                                                <div class="summary-footer">
                                                    <a class="text-muted text-uppercase">Fly n Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: page -->
            </section>
        </div>
        <script>
            function getTraveller(){
                var table = new Firebase('https://fly-n-buy.firebaseio.com/traveller');

                table.on('value', function(snapshot) {
                    var count = 0;
                    snapshot.forEach(function() {
                        count++;
                    });
                    //count is now safe to use.
                });
            }
            var x = getTraveller();
            document.getElementById("jmlhTraveller").innerHTML = x;
        </script>

        <!-- Vendor -->
        <script src="assetsOc/vendor/jquery/jquery.js"></script>
        <script src="assetsOc/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="assetsOc/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="assetsOc/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="assetsOc/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assetsOc/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="assetsOc/vendor/jquery-placeholder/jquery.placeholder.js"></script>

        <!-- Specific Page Vendor -->
        <script src="assetsOc/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="assetsOc/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="assetsOc/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="assetsOc/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="assetsOc/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
        <script src="assetsOc/vendor/flot/jquery.flot.js"></script>
        <script src="assetsOc/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
        <script src="assetsOc/vendor/flot/jquery.flot.pie.js"></script>
        <script src="assetsOc/vendor/flot/jquery.flot.categories.js"></script>
        <script src="assetsOc/vendor/flot/jquery.flot.resize.js"></script>
        <script src="assetsOc/vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="assetsOc/vendor/raphael/raphael.js"></script>
        <script src="assetsOc/vendor/morris/morris.js"></script>
        <script src="assetsOc/vendor/gauge/gauge.js"></script>
        <script src="assetsOc/vendor/snap-svg/snap.svg.js"></script>
        <script src="assetsOc/vendor/liquid-meter/liquid.meter.js"></script>
        <script src="assetsOc/vendor/jqvmap/jquery.vmap.js"></script>
        <script src="assetsOc/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="assetsOc/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="assetsOc/javascripts/theme.js"></script>

        <!-- Theme Custom -->
        <script src="assetsOc/javascripts/theme.custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="assetsOc/javascripts/theme.init.js"></script>


        <!-- Examples -->
        <script src="assetsOc/javascripts/dashboard/examples.dashboard.js"></script>
        </body>
        </html>

    </div>
    <!-- /.main-section -->
@endsection
