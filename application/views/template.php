<!DOCTYPE html>
<html lang="en">

<head>
  <title>SISKEWA - Sistem Informasi Surveilans Kesehatan Jiwa</title>
  <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 10]>-->
  <!--    <script src="<?= base_url() ?>/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
  <!--    <script src="<?= base_url() ?>/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
  <!--    <![endif]-->
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Sistem Informasi Surveilans Kesehatan Jiwa" />
  <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
  <meta name="author" content="Monoplustudio" />
  <!--Favicon icon -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>/assets//favikon/apple-icon-57x57.png">

  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>/assets//favikon/apple-icon-60x60.png">

  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>/assets//favikon/apple-icon-72x72.png">

  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets//favikon/apple-icon-76x76.png">

  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>/assets//favikon/apple-icon-114x114.png">

  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>/assets//favikon/apple-icon-120x120.png">

  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>/assets//favikon/apple-icon-144x144.png">

  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>/assets//favikon/apple-icon-152x152.png">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/assets//favikon/apple-icon-180x180.png">

  <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/assets//favikon/android-icon-192x192.png">

  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/assets//favikon/favicon-32x32.png">

  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>/assets//favikon/favicon-96x96.png">

  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets//favikon/favicon-16x16.png">

  <link rel="manifest" href="<?= base_url() ?>/assets//favikon/manifest.json">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

  <meta name="msapplication-TileColor" content="#05b8a3">

  <meta name="msapplication-TileImage" content="<?= base_url() ?>/assets//favikon/ms-icon-144x144.png">

  <meta name="theme-color" content="#05b8a3">

  <!--Google font-->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <!--Required Fremwork -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//plugin/bootstrap/css/bootstrap.min.css">

  <!--waves.css -->

  <link rel="stylesheet" href="<?= base_url() ?>/assets//pages/waves/css/waves.min.css" type="text/css" media="all">

  <!--feather icon -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//icon/feather/css/feather.css">

  <!--themify-icons line icon -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//icon/themify-icons/themify-icons.css">

  <!--ico font -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//icon/icofont/css/icofont.css">

  <!--Font Awesome -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//icon/font-awesome/css/font-awesome.min.css">

  <!--Data Table Css -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//plugin/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//pages/data-table/css/buttons.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//plugin/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">

  <!--Style.css -->

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//css/style.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//css/pages.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets//css/css-new.css">
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/jquery/js/jquery.min.js"></script>

</head>



<body>

  <!--[ Pre-loader ] start -->

  <div class="loader-bg">

    <div class="loader-bar"></div>

  </div>

  <!--[ Pre-loader ] end -->

  <div id="pcoded" class="pcoded">

    <div class="pcoded-overlay-box"></div>

    <div class="pcoded-container navbar-wrapper">

      <!--[ Header ] start -->

      <nav class="navbar header-navbar pcoded-header">

        <div class="navbar-wrapper">

          <div class="navbar-logo">

            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">

              <i class="feather icon-toggle-right"></i>

            </a>

            <a href="dashboard.php">

              <img class="img-fluid" src="<?= base_url() ?>/assets/images/siskewa-logo-02.png" alt="Theme-Logo" style="height:40px;" />

            </a>

            <a class="mobile-options waves-effect waves-light">

              <i class="feather icon-more-horizontal"></i>

            </a>

          </div>

          <div class="navbar-container container-fluid">

            <ul class="nav-left">

              <li>

                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">

                  <i class="full-screen feather icon-maximize"></i>

                </a>

              </li>

            </ul>

            <ul class="nav-right">

              <li class="user-profile header-notification">

                <div class="dropdown-primary dropdown">

                  <div class="dropdown-toggle" data-toggle="dropdown">

                    <img src="<?= base_url() ?>/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">

                    <span>John Doe</span>

                    <i class="feather icon-chevron-down"></i>

                  </div>

                  <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                    <li>

                      <a href="#!">

                        <i class="feather icon-settings"></i> Settings

                      </a>

                    </li>

                    <li>

                      <a href="user-profile.php">

                        <i class="feather icon-user"></i> Profile

                      </a>

                    </li>

                    <li>

                      <a href="index.php">

                        <i class="feather icon-log-out"></i> Logout

                      </a>

                    </li>

                  </ul>

                </div>

              </li>

            </ul>

          </div>

        </div>

      </nav>


      <!-- [ Header ] end -->

      <div class="pcoded-main-container">

        <div class="pcoded-wrapper">

          <!-- [ navigation menu ] start -->
          <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
              <ul class="pcoded-item pcoded-left-item">
                <li class="" style="padding-top:30px;">
                  <a href="dashboard.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                  </a>
                </li>
              </ul>
              <div class="pcoded-navigation-label">Data Puskesmas</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="data-puskesmas.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      <i class="fa fa-hospital-o"></i>
                    </span>
                    <span class="pcoded-mtext">Lokasi Puskesmas</span>
                  </a>
                </li>
                <li class="active">
                  <a href="data-pasien.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      <i class="fa fa-user"></i>
                    </span>
                    <span class="pcoded-mtext">Data Pasien</span>
                  </a>


                <li class="">
                  <a href="tambah-pasien.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      &nbsp;&nbsp;&nbsp;<i class="fa fa-download"></i>
                    </span>
                    &nbsp;&nbsp;&nbsp;<span class="pcoded-mtext">Tambah data</span>
                  </a>
                </li>
                <li class="">
                  <a href="import-data-pasien.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      &nbsp;&nbsp;&nbsp;<i class="fa fa-upload"></i>
                    </span>
                    &nbsp;&nbsp;&nbsp;<span class="pcoded-mtext">Import Puskesmas</span>
                  </a>
                </li>
                <li class="">
                  <a href="export-data-pasien.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      &nbsp;&nbsp;&nbsp;<i class="fa fa-cloud-download"></i>
                    </span>
                    &nbsp;&nbsp;&nbsp;<span class="pcoded-mtext">Export Puskesmas</span>
                  </a>
                </li>



                </li>
              </ul>
              <div class="pcoded-navigation-label">Laporan Puskesmas</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="lap-rawat-jalan.php" style="height: 60px;" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      <i class="feather icon-clipboard"></i>
                    </span>
                    <span class="pcoded-mtext">Pencatatan harian<br>(Form A)</span>
                  </a>
                </li>
                <li class="">
                  <a href="lap-rawat-inap.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">
                      <i class="feather icon-clipboard"></i>
                    </span>
                    <span class="pcoded-mtext">Rawat Inap</span>
                  </a>
                </li>
                <!-- <li class="">
                                <a href="lap-harian.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon">
                                        <i class="feather icon-clipboard"></i>
                                    </span>
                                    <span class="pcoded-mtext">Laporan Harian</span>
                                </a>
                            </li> -->
              </ul>
              <div class="pcoded-navigation-label">Penyuluhan</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="penyuluhan-individu.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Penyuluhan Individu</span>
                  </a>
                </li>
                <li class="">
                  <a href="penyuluhan-kelompok.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Penyuluhan Kelompok</span>
                  </a>
                </li>
                <li class="">
                  <a href="kunjungan-rumah.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Kunjungan Rumah</span>
                  </a>
                </li>
              </ul>
              <div class="pcoded-navigation-label">Laporan Pusat</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">

                  <a href="lap-bulanan-pesakitan.php" style="height: 60px;" class="waves-effect waves-dark">

                    <span class="pcoded-micon">

                      <i class="feather icon-clipboard"></i>

                    </span>

                    <span class="pcoded-mtext">Laporan Bulanan Data Kesakitan (Form B)</span>

                  </a>

                </li>
                <li class="">
                  <a href="lap-bulanan-ukme.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon">

                      <i class="feather icon-clipboard"></i>

                    </span>

                    <span class="pcoded-mtext">UKME</span>

                  </a>

                </li>

                <li class="">

                  <a href="lap-bulanan-sp2tp.php" class="waves-effect waves-dark">

                    <span class="pcoded-micon">

                      <i class="feather icon-clipboard"></i>

                    </span>

                    <span class="pcoded-mtext">SP2TP</span>

                  </a>

                </li>

                <li class="">

                  <a href="lap-bulanan-ukp2.php" class="waves-effect waves-dark">

                    <span class="pcoded-micon">

                      <i class="feather icon-clipboard"></i>

                    </span>

                    <span class="pcoded-mtext">UKP2</span>

                  </a>

                </li>

                <li class="">

                  <a href="lap-kasus-pasung.php" class="waves-effect waves-dark">

                    <span class="pcoded-micon">

                      <i class="feather icon-clipboard"></i>

                    </span>

                    <span class="pcoded-mtext">Pasung</span>

                  </a>

                </li>

              </ul>

            </div>

          </nav>
          <!-- [ navigation menu ] end -->

          <div class="pcoded-content">

            <!-- [ breadcrumb ] start -->

            <div class="page-header">

              <div class="page-block">

                <div class="row align-items-center">

                  <div class="col-md-8">

                    <div class="page-header-title">

                      <h4 class="m-b-10">Data Pasien</h4>

                    </div>

                    <ul class="breadcrumb">

                      <li class="breadcrumb-item">

                        <a href="index.php">

                          <i class="feather icon-home"></i>

                        </a>

                      </li>

                      <li class="breadcrumb-item"><a href="data-puskesmas.php"> Data Puskesmas</a>

                      </li>

                      <li class="breadcrumb-item"><a href="data-pasien.php">Data Pasien</a></li>
                    </ul>

                  </div>

                </div>

              </div>

            </div>

            <!-- [ breadcrumb ] end -->



            <div class="pcoded-inner-content">

              <div class="main-body">

                <div class="page-wrapper">

                  <div class="page-body">
                    <!-- Config. table start -->
                    <?= $contents ?>
                    <!-- Config. table end -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Required Jquery -->
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/jquery/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/jquery-ui/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/popper.js/js/popper.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
  <!-- waves js -->
  <script src="<?= base_url() ?>/assets/pages/waves/js/waves.min.js"></script>
  <!-- jquery slimscroll js -->
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/jquery-slimscroll/js/jquery.slimscroll.js"></script>
  <!-- modernizr js -->
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/modernizr/js/modernizr.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/plugin/modernizr/js/css-scrollbars.js"></script>
  <!-- data-table js -->
  <script src="<?= base_url() ?>/assets/pages/data-table/js/jszip.min.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/js/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/js/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>

  <script src="<?= base_url() ?>/assets/plugin/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugin/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugin/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugin/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugin/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugin/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/assets/plugin/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
  <!-- Custom js -->
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/responsive/js/responsive-custom.js"></script>
  <script src="<?= base_url() ?>/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
  <script src="<?= base_url() ?>/assets/js/pcoded.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/dark-light/vertical-layout.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/script.js"></script>

</body>

</html>