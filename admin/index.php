<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/fusioncharts.js"></script>
    <script src="js/fusioncharts.charts.js"></script>
    <script src="js/fusioncharts.theme.fint.js"></script>
    <script src="js/pie4.js"></script>
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
    <script type="text/javascript">
      FusionCharts.ready(function() {
        var fusioncharts = new FusionCharts({
          type: 'msline',
          renderAt: 'chart-container-compare',
          width: '500',
          height: '300',
          dataFormat: 'json',
          dataSource: {
            "chart": {
              "caption": "Amount invested by Programs",
              "subCaption": "Program1 vs Program2",
              "captionFontSize": "14",
              "subcaptionFontSize": "14",
              "subcaptionFontBold": "0",
              "paletteColors": "#0075c2,#1aaf5d",
              "bgcolor": "#ffffff",
              "showBorder": "0",
              "showShadow": "0",
              "showCanvasBorder": "0",
              "usePlotGradientColor": "0",
              "legendBorderAlpha": "0",
              "legendShadow": "0",
              "showAxisLines": "0",
              "showAlternateHGridColor": "0",
              "divlineThickness": "1",
              "divLineIsDashed": "1",
              "divLineDashLen": "1",
              "divLineGapLen": "1",
              "xAxisName": "Day",
              "showValues": "0"
            },
            "categories": [{
              "category": [{
                  "label": "Jan"
                }, {
                  "label": "Feb"
                }, {
                  "label": "Mar"
                }, {
                  "label": "Mar"
                }, {
                  "label": "Apr"
                }, {
                  "label": "May"
                }, {
                  "label": "Jun"
                },
                {
                  "label": "Jul"
                },
                {
                  "label": "Aug"
                },
                {
                  "label": "Sep"
                },
                {
                  "label": "Oct"
                },
                {
                  "label": "Nov"
                },
                {
                  "label": "Dec"
                }
              ]
            }],
            "dataset": [{
              "seriesname": "Program1",
              "data": [{
                  "value": "15123"
                }, {
                  "value": "14233"
                }, {
                  "value": "25507"
                }, {
                  "value": "9110"
                }, {
                  "value": "15529"
                }, {
                  "value": "20803"
                }, {
                  "value": "19202"
                },
                {
                  "value": "18202"
                },
                {
                  "value": "17302"
                },
                {
                  "value": "18602"
                },
                {
                  "value": "16202"
                },
                {
                  "value": "14204"
                }
              ]
            }, {
              "seriesname": "Program2",
              "data": [{
                  "value": "25123"
                }, {
                  "value": "24233"
                }, {
                  "value": "17507"
                }, {
                  "value": "19110"
                }, {
                  "value": "35529"
                }, {
                  "value": "10803"
                }, {
                  "value": "16402"
                },
                {
                  "value": "18902"
                },
                {
                  "value": "21302"
                },
                {
                  "value": "16602"
                },
                {
                  "value": "11202"
                },
                {
                  "value": "19204"
                }
              ]
            }],
            "trendlines": [{
              "line": [{
                "startvalue": "17022",
                "color": "#6baa01",
                "valueOnRight": "1",
                "displayvalue": "Average"
              }]
            }]
          }
        });
        fusioncharts.render();
      });

    </script>
  </head>

  <body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
      <div class="loader">
        <div class="preloader">
          <div class="spinner-layer pl-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
        <p>Please wait...</p>
      </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
          <a href="javascript:void(0);" class="bars"></a>
          <a class="navbar-brand" href="index.html">ADMIN</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">

          </ul>
        </div>
      </div>
    </nav>
    <!-- #Top Bar -->
    <section>
      <!-- Left Sidebar -->
      <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
          <div class="image">
            <img src="images/user.png" width="48" height="48" alt="User" />
          </div>
          <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
            <div class="email"><?php echo $_SESSION['email']; ?></div>
            <div class="btn-group user-helper-dropdown">
              <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
              <ul class="dropdown-menu pull-right">
                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                <li><a href="../signout.php"><i class="material-icons">input</i>Sign Out</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
          <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
              <a href="index.php">
                <span>Donor</span>
              </a>
            </li>
            <li>
              <a href="volunteer.php">
                  <span>Volunteers</span>
                </a>
            </li>
            <li>
              <a href="patient.php">
                  <span>Patients</span>
                </a>
            </li>
            <li>
              <a href="PHPMailer_5.2.0/login.php">
                  <span>Send Email</span>
                </a>
            </li>
          </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
          <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">Admin</a>.
          </div>
          <div class="version">
            <b>Version: </b> 1.0.5
          </div>
        </div>
        <!-- #Footer -->
      </aside>
      <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="block-header">
          <h2>DASHBOARD</h2>
        </div>


        <div class="row clearfix">
          <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">

                        <div class="body">
                            <div  id="chart-container-compare" class="table-responsive">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
        </div>

        <div class="row clearfix">
          <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">

                        <div class="body">
                            <div id="chart-container4" class="table-responsive">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
        </div>

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
  </body>

</html>
