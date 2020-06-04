<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hệ hỗ trợ quyết định
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Twh'],['1950', 75.964],['1951', 80.576],['1952', 81.498],['1953', 83.345],
          ['1954', 85.146],['1955', 90.165],['1956', 95.781],['1957', 97.264],['1958', 99.357],
          ['1959', 100.134],['1960', 101.146],['1961', 112.055],['1962', 115.402],['1963', 122.805],
          ['1964', 132.438],['1965', 148.397],['1966', 163.015],['1967', 174.27],['1968', 179.572],
          ['1969', 188.597],['1970', 197.185],['1971', 200.639],['1972', 209.408],['1973', 212.757],
          ['1974', 220.648],['1975', 225.925],['1976', 243.836],['1977', 257.611],['1978', 273.281],
          ['1979', 284.525],['1980', 292.19],['1981', 307.53],['1982', 283.259],['1983', 289.867],
          ['1984', 300.992],['1985', 329.886],['1986', 344.428],['1987', 356.229],['1988', 377.296],
          ['1989', 388.619],['1990', 384.534],['1991', 415.941],['1992', 433.324],['1993', 448.76],
          ['1994', 463.978],['1995', 477.424],['1996', 464.402],['1997', 515.714],['1998', 531.621],
          ['1999', 550.727],['2000', 571.996],['2001', 592.079],['2002', 612.978],['2003', 631.191],
          ['2004', 649.331],['2005', 666.819],['2006', 682.924],['2007', 699.951],['2008', 716.7475],
          ['2009', 733.544],['2010', 750.3405],['2011', 767.137],['2012', 783.9335],['2013', 800.73],
          ['2014', 817.5265],['2015', 834.323],['2016', 851.1195],['2017', 867.916],['2018', 884.7125],['2019', 901.509]
        ]);

        var options = {
          title: 'Mức tiêu thụ điện',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);

      }
    </script>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Forecast Electric
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="dashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Đồ thị</p>
            </a>
          </li>
          <li>
            <a href="map">
              <i class="nc-icon nc-pin-3"></i>
              <p>Biểu đồ</p>
            </a>
          </li>
          <li>
            <a href="icons">
                <i class="nc-icon nc-diamond"></i>
                <p>Dự đoán</p>
              </a>
            </li>
          <li>
            <a href="user">
              <i class="nc-icon nc-single-02"></i>
              <p>Tài khoản</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{url('logout')}}">Đăng xuất</a>

                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Đồ thị biểu diễn tập dữ liệu</h5>
              </div>
                <div id="curve_chart" style="width: 900px; height: 500px"></div>

            </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Đồ thị dự đoán</h5>
              </div>
              <div class="card-body ">
                <img src="output5.png" alt="" style="width:100%">
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Đồ thị hàm mất mát</h5>
              </div>
              <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6" >
                        <img src="output3.png" style="width:100%" alt="">
                    </div>
                    <div class="col-lg-6"  >
                        <img src="output4.png" alt="" style="width:100%">
                    </div >
                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by PHA
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
