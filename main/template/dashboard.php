<?php include 'structure/check_cookies.php'; ?>
<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities."/>
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app"/>
    <meta name="author" content="pixelstrap"/>
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon"/>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/iconly-icon.css"/>
    <link rel="stylesheet" href="../assets/css/bulk-style.css"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/themify.css"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css"/>
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen"/>
  </head>
  <body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 
      <!-- Page header start-->
      <?php include 'structure/header.php'; ?>
      <!-- Page header end-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
        <!-- Page sidebar start-->
        <?php include 'structure/sidebar.php'; ?>
        <!-- Page sidebar end-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Ecommerce dashboard</h2>
                  <p class="mb-0 text-title-gray">"Welcome back! Continue your journey."</p>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Ecommerce</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid dashboard-2">
            <div class="row">
              <div class="col-xxl-5 col-xl-7 col-lg-12 box-col-7">
                <div class="card analytics-card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Sales Analytics</h3>
                      <ul class="simple-wrapper nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#yearly" role="tab" aria-selected="true">Yearly</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-tabs" data-bs-toggle="tab" href="#monthly" role="tab" aria-selected="false">Monthly</a></li>
                        <li class="nav-item"><a class="nav-link active" id="contact-tab" data-bs-toggle="tab" href="#weekly" role="tab" aria-selected="false">Weekly</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body sale-chart-box">
                    <ul class="d-flex">
                      <li class="statistic-icon">
                        <div>
                          <div>
                            <div class="statistic-content"><span class="primary-dot"> </span>Pending</div>
                          </div>
                          <div class="statistic-num ms-auto text-end font-danger d-flex align-items-center">
                            <h5>$4,875</h5>
                            <div><span>28%</span><i class="fa-solid fa-chevron-up ms-1"></i></div>
                          </div>
                        </div>
                      </li>
                      <li class="statistic-icon">
                        <div>
                          <div>
                            <div class="statistic-content"><span class="secondary-dot"> </span>Complete</div>
                          </div>
                          <div class="statistic-num ms-auto text-end font-primary d-flex align-items-center">
                            <h5>$1,320</h5>
                            <div><span>36.28%</span><i class="fa-solid fa-chevron-down ms-1"></i></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div id="chart-school-performance"></div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-5 col-md-7 box-col-5">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>User Status</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0 user-status">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone" id="user-status" style="width:100%">
                        <thead>
                          <tr>
                            <th>Customer</th>
                            <th>country</th>
                            <th class="text-center">Popular</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/01.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>John Deo <span>(14+ Online)</span></h6></a></div>
                              </div>
                            </td>
                            <td>
                              <h3>USA</h3>
                            </td>
                            <td>
                              <div class="progress bg-light-success">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/02.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Smith Lovell <span>(250+ Online)</span></h6></a></div>
                              </div>
                            </td>
                            <td>
                              <h3>Angola</h3>
                            </td>
                            <td>
                              <div class="progress bg-light-warning">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/03.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Jones Brooks <span>(130+ Online)</span></h6></a></div>
                              </div>
                            </td>
                            <td>
                              <h3>America</h3>
                            </td>
                            <td>
                              <div class="progress bg-light-danger">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/04.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Brown Acum <span>(214+ Online)</span></h6></a></div>
                              </div>
                            </td>
                            <td>
                              <h3>England</h3>
                            </td>
                            <td>
                              <div class="progress bg-success">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/05.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Evans Mayo <span>(250+ Online)</span></h6></a></div>
                              </div>
                            </td>
                            <td>
                              <h3>London</h3>
                            </td>
                            <td>
                              <div class="progress bg-light-warning">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/06.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Wilson Pipes <span>(213+ Online)</span></h6></a></div>
                              </div>
                            </td>
                            <td>
                              <h3>Austealia</h3>
                            </td>
                            <td>
                              <div class="progress bg-light-warning">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-md-5 col-sm-6 box-col-4">
                <div class="card sale-card overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <div>
                        <h3>$1500.89K</h3><span>Sales last 5 Months</span>
                      </div>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="current-sale-container order-container">
                      <div class="overview-wrapper" id="orderoverview"> </div>
                      <div class="back-bar-container">
                        <div id="order-bar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-md-7 col-sm-6 box-col-4">
                <div class="card selling-product">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Top Selling Products</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-primary border-light-primary">
                          <svg class="stroke-icon stroke-primary">
                            <use href="../assets/svg/icon-sprite.svg#headphone"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>Headphones JBL JR 310 BT</h6></a>
                          <p>Art.23879088</p>
                        </div>
                        <div class="recent-text">
                          <h5>$260.00</h5>
                          <p>900 Sales</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-warning border-light-warning">
                          <svg class="stroke-icon stroke-warning">
                            <use href="../assets/svg/icon-sprite.svg#samsung-mobile"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>Samsung SM-G99B5</h6></a>
                          <p>Art.72636892</p>
                        </div>
                        <div class="recent-text">
                          <h5>$340.00</h5>
                          <p>20 Sales</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-danger border-light-danger">
                          <svg class="stroke-icon stroke-danger">
                            <use href="../assets/svg/icon-sprite.svg#tv"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>4K UHD TV Samsung</h6></a>
                          <p>Art.63987987</p>
                        </div>
                        <div class="recent-text">
                          <h5>$750.00</h5>
                          <p>300 Sales</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-primary border-light-primary">
                          <svg class="stroke-icon stroke-primary">
                            <use href="../assets/svg/icon-sprite.svg#laptop"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>16.5” Gaming Laptop 29...</h6></a>
                          <p>Art.73497990</p>
                        </div>
                        <div class="recent-text">
                          <h5>$2370.00</h5>
                          <p>300 Sales</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-warning border-light-warning">
                          <svg class="stroke-icon stroke-warning">
                            <use href="../assets/svg/icon-sprite.svg#filmcamera"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>Fujifilm x-s10 Kit 18-55mm</h6></a>
                          <p>Art.37489799</p>
                        </div>
                        <div class="recent-text">
                          <h5>$2370.00</h5>
                          <p>300 Sales</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-danger border-light-danger">
                          <svg class="stroke-icon stroke-danger">
                            <use href="../assets/svg/icon-sprite.svg#smartphone"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>Apple iphone 11 PRO MAX</h6></a>
                          <p>Art.27389799</p>
                        </div>
                        <div class="recent-text">
                          <h5>$2370.00</h5>
                          <p>300 Sales</p>
                        </div>
                      </li>
                      <li class="d-flex align-items-center gap-2">
                        <div class="flex-shrink-0 bg-light-primary border-light-primary">
                          <svg class="stroke-icon stroke-primary">
                            <use href="../assets/svg/icon-sprite.svg#bulb"></use>
                          </svg>
                        </div>
                        <div class="flex-grow-1"><a href="product-page.html">
                            <h6>Phillip Lightbulb</h6></a>
                          <p>Art.74383789</p>
                        </div>
                        <div class="recent-text">
                          <h5>$2370.00</h5>
                          <p>300 Sales</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-md-5 box-col-4">
                <div class="row">
                  <div class="col-sm-6 col-md-12">
                    <div class="card value-chart">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6">
                            <div class="sales-chart" id="sales-chart"></div>
                          </div>
                          <div class="col-6">
                            <div class="valuechart-detail">
                              <div class="text-center">
                                <div class="badge badge-primary">80%</div>
                                <h2>$3,76,793</h2>
                                <p>Our Sale Value</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-12">
                    <div class="card value-chart">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6">
                            <div class="visitor-chart" id="visitor-chart"></div>
                          </div>
                          <div class="col-6">
                            <div class="valuechart-detail">
                              <div class="text-center">
                                <div class="badge badge-secondary">60%</div>
                                <h2>$4,26,876   </h2>
                                <p>Today Stock Value   </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-7 order-xl-1 order-xxl-0 box-col-12">
                <div class="card best-sell">
                  <div class="card-header card-no-border pb-0">
                    <h3>Best Seller</h3>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone mt-0" id="best-sell" style="width:100%">
                        <thead>
                          <tr>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Country</th>
                            <th>Total</th>
                            <th class="text-center">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/07.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Evans Mayo</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td> 05 Aug</td>
                            <td> Cap</td>
                            <td><img class="img-fluid" src="../assets/images/dashboard-2/flag/1.png" alt=""/></td>
                            <td>$5,08,653</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/08.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Smith Lovell</h6></a>
                                  <p>2020</p>
                                </div>
                              </div>
                            </td>
                            <td> 21 March</td>
                            <td> Branded Shoes</td>
                            <td><img class="img-fluid" src="../assets/images/dashboard-2/flag/2.png" alt=""/></td>
                            <td>$37,2870</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/09.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Jones Brooks</h6></a>
                                  <p>2021</p>
                                </div>
                              </div>
                            </td>
                            <td> 09 March</td>
                            <td> Headphone</td>
                            <td><img class="img-fluid" src="../assets/images/dashboard-2/flag/3.png" alt=""/></td>
                            <td>$3,12,233</td>
                            <td class="text-end">
                              <div class="btn bg-light-warning border-light-warning text-warning">Pending</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/10.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Brown Acum</h6></a>
                                  <p>2021</p>
                                </div>
                              </div>
                            </td>
                            <td> 15 Aug</td>
                            <td> Cell Phone</td>
                            <td><img class="img-fluid" src="../assets/images/dashboard-2/flag/4.png" alt=""/></td>
                            <td>$7,48,123</td>
                            <td class="text-end">
                              <div class="btn bg-light-danger border-light-danger text-danger">Canceled</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/11.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Evans Mayo</h6></a>
                                  <p>2022</p>
                                </div>
                              </div>
                            </td>
                            <td>05 Feb</td>
                            <td>Earings</td>
                            <td><img class="img-fluid" src="../assets/images/dashboard-2/flag/5.png" alt=""/></td>
                            <td>$45,8,653</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/12.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Wilson Pipes</h6></a>
                                  <p>2022</p>
                                </div>
                              </div>
                            </td>
                            <td> 12 Jan</td>
                            <td> Iphone 11</td>
                            <td><img class="img-fluid" src="../assets/images/dashboard-2/flag/1.png" alt=""/></td>
                            <td>$5,08,653</td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-4 col-md-12 box-col-12">
                <div class="card radial-card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6 radial-chart">
                        <div class="salesStatsRadialChart" id="salesStatsRadialChart"></div>
                        <div class="content-label">
                          <p class="mb-0 font-primary">As From </p>
                          <h4>25 March</h4>
                        </div>
                      </div>
                      <div class="col-sm-6 radial-text">
                        <div class="radial-content">
                          <div class="text-center">
                            <h4>Total Goal</h4>
                            <h3>$92,000.30</h3>
                            <hr/>
                            <h5 class="progress-widget">Goal Archive : <span>$81,000.000</span></h5>
                            <div class="progress sm-progress-bar progress-animate">
                              <div class="progress-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h5 class="progress-widget">Duration: <span>9 Month</span></h5>
                            <div class="progress sm-progress-bar progress-animate">
                              <div class="progress-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div><a class="btn btn-pill btn-primary" href="general-widget.html" download="">Download Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6">
                <div class="card">
                  <div class="card-body">
                    <div class="items-slider">
                      <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="slider-box bg-light-primary">
                              <div class="header-top">
                                <div class="badge badge-primary rated-product-badge">Hot</div><img class="img-fluid" src="../assets/images/dashboard-2/1.png" alt=""/>
                                <div class="i fa-regular fa-heart"></div>
                              </div>
                            </div>
                            <div class="slider-content text-center">
                              <h4 class="text-primary">Special Offer</h4>
                              <p class="mb-0">Smart Design Watch Multi Color</p>
                              <h6>$26.00<span>&nbsp;$30.00</span></h6>
                              <div class="input-group"> <span class="input-group-text decrement-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#minus"></use>
                                  </svg></span>
                                <input class="form-control bg-light-primary input-touchspin" type="text" value="1"/><span class="input-group-text increment-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#plus"></use>
                                  </svg></span>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="slider-box bg-light-secondary">
                              <div class="header-top">
                                <div class="badge badge-secondary rated-product-badge">Hot</div><img class="img-fluid" src="../assets/images/dashboard-2/5.png" alt=""/>
                                <div class="i fa-regular fa-heart"></div>
                              </div>
                            </div>
                            <div class="slider-content text-center">
                              <h4 class="text-secondary">Weekend Sale</h4>
                              <p class="mb-0">HeadPhone 3rd Generation</p>
                              <h6>$36.00<span>&nbsp;$70.00</span></h6>
                              <div class="input-group"> <span class="input-group-text decrement-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#minus"></use>
                                  </svg></span>
                                <input class="form-control bg-light-secondary input-touchspin" type="text" value="1"/><span class="input-group-text increment-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#plus"></use>
                                  </svg></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-sm-6 box-col-6">
                <div class="card">
                  <div class="card-body">
                    <div class="items-slider">
                      <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="slider-box bg-light-secondary">
                              <div class="header-top">
                                <div class="badge badge-secondary rated-product-badge">Hot</div><img class="img-fluid" src="../assets/images/dashboard-2/2.png" alt=""/>
                                <div class="i fa-regular fa-heart"></div>
                              </div>
                            </div>
                            <div class="slider-content text-center">
                              <h4 class="text-secondary">Weekend Sale</h4>
                              <p class="mb-0">AirPods 3rd Generation Silicone Skin</p>
                              <h6>$16.00<span>&nbsp;$30.00</span></h6>
                              <div class="input-group"> <span class="input-group-text decrement-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#minus"></use>
                                  </svg></span>
                                <input class="form-control bg-light-secondary input-touchspin" type="text" value="1"/><span class="input-group-text increment-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#plus"></use>
                                  </svg></span>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="slider-box bg-light-primary">
                              <div class="header-top">
                                <div class="badge badge-primary rated-product-badge">Hot</div><img class="img-fluid" src="../assets/images/dashboard-2/6.png" alt=""/>
                                <div class="i fa-regular fa-heart"></div>
                              </div>
                            </div>
                            <div class="slider-content text-center">
                              <h4 class="text-primary">Special Offer</h4>
                              <p class="mb-0">Smart Design Phone Multi Color</p>
                              <h6>$86.00<span>&nbsp;$60.00</span></h6>
                              <div class="input-group"> <span class="input-group-text decrement-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#minus"></use>
                                  </svg></span>
                                <input class="form-control bg-light-primary input-touchspin" type="text" value="1"/><span class="input-group-text increment-touchspin">
                                  <svg class="svg-color">
                                    <use href="../assets/svg/iconly-sprite.svg#plus"></use>
                                  </svg></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-5 col-sm-6 box-col-6">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h3>Activity Timeline</h3>
                      <div class="dropdown icon-dropdown">
                        <button class="btn" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body timeline-card">
                    <div class="activity-timeline">
                      <div class="d-flex align-items-start">
                        <div class="activity-line"></div>
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-primary">30-06-2022</span>&nbsp;Today</p><span class="f-w-700">Updated Product</span>
                          <p class="mb-0 activity-text">Quisque a consequat ante sit amet magna at volutapt.</p>
                        </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                      </div>
                      <div class="d-flex align-items-start">
                        <div class="activity-dot-secondary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-secondary">30-06-2022</span>&nbsp;Today</p><span class="f-w-700">Jihan Doe Just like your product</span>
                          <p class="mb-0 activity-text">Vestibulum nec mi suscipit, dapibus purus ane.</p>
                        </div><i class="fa-solid fa-circle circle-dot-secondary pull-right"></i>
                      </div>
                      <div class="d-flex align-items-start">
                        <div class="activity-dot-primary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-primary">25-06-2022</span>&nbsp;Today<span class="badge badge-primary ms-2">New</span></p><span class="f-w-700">James just like your product</span>
                          <p class="mb-0 activity-text">Vestibulum nec mi suscipit, dapibus purus ane.</p>
                          <ul class="img-wrapper">
                            <li><img class="img-fluid" src="../assets/images/dashboard-2/timeline/5.png" alt=""/></li>
                            <li><img class="img-fluid" src="../assets/images/dashboard-2/timeline/6.png" alt=""/></li>
                          </ul>
                        </div><i class="fa-solid fa-circle circle-dot-primary pull-right"></i>
                      </div>
                      <div class="d-flex align-items-start">
                        <div class="activity-dot-secondary"></div>
                        <div class="flex-grow-1">
                          <p class="mt-0 todo-font"><span class="font-secondary">25-06-2022 </span>&nbsp; Tomorrow</p><span class="f-w-700">Today Total Revenue</span>
                          <p class="mb-0 activity-text">Quisque a consequat ante sit amet magna at volutapt.</p>
                        </div><i class="fa-solid fa-circle circle-dot-secondary pull-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-5 order-xl-2 order-xxl-0 col-sm-6 box-col-6">
                <div class="card target-card overflow-hidden">
                  <div class="card-header card-no-border">
                    <ul>
                      <li class="bg-light-primary text-center">
                        <h3>Our Target</h3>
                        <p class="mb-0">Completed</p>
                        <h6 class="font-primary">$638.930</h6>
                      </li>
                      <li class="bg-primary text-center">
                        <h3>We Archieve</h3>
                        <p class="mb-0">Completed 2 Hours</p>
                        <h6>$638.930</h6>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body p-0">
                    <div class="main-img"><img class="img-fluid img-banner" src="../assets/images/dashboard-2/4.png" alt=""/>
                      <ul class="animate-img">
                        <li class="right-1"> <img class="img-fluid" src="../assets/images/dashboard-2/animate/1.png" alt=""/></li>
                        <li class="right-2"> <img class="img-fluid" src="../assets/images/dashboard-2/animate/2.png" alt=""/></li>
                        <li class="right-3"> <img class="img-fluid" src="../assets/images/dashboard-2/animate/3.png" alt=""/></li>
                        <li class="right-4"> <img class="img-fluid" src="../assets/images/dashboard-2/animate/4.png" alt=""/></li>
                        <li class="right-5"> <img class="img-fluid" src="../assets/images/dashboard-2/animate/5.png" alt=""/></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-7 box-col-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Recent Orders</h3>
                  </div>
                  <div class="card-body pt-0 recent-order">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone mt-0" id="recent-order" style="width:100%">
                        <thead>
                          <tr>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>amount</th>
                            <th>vendor</th>
                            <th>status</th>
                            <th class="text-center">rating</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/13.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Alice Goodwin</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td class="f-w-600">Nike Tshirt</td>
                            <td class="font-primary f-w-600">$49.00</td>
                            <td class="f-w-600">Palestine</td>
                            <td>
                              <div class="status-showcase">
                                <p>65%</p>
                                <div class="progress bg-light-success">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6>3.6<span>(45 votes)</span></h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/14.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Herry Venter</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td class="f-w-600">Adidas Hat</td>
                            <td class="font-primary f-w-600">$30.00</td>
                            <td class="f-w-600">Serbia</td>
                            <td>
                              <div class="status-showcase">
                                <p>45%</p>
                                <div class="progress bg-light-warning">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6>2.7<span>(35 votes)</span></h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/15.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Loain Deo</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td class="f-w-600">Wu Sneakers</td>
                            <td class="font-primary f-w-600">$54.00</td>
                            <td class="f-w-600">Islamic</td>
                            <td>
                              <div class="status-showcase">
                                <p>85%</p>
                                <div class="progress bg-light-danger">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6>9.2<span>(62 votes)</span></h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/16.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Horen Hors</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td class="f-w-600">Puma Shorts</td>
                            <td class="font-primary f-w-600">$73.00</td>
                            <td class="f-w-600">Greece</td>
                            <td>
                              <div class="status-showcase">
                                <p>75%</p>
                                <div class="progress bg-light-success">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6>6.6<span>(83 votes)</span></h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/17.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Fenter Jessy</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td class="f-w-600">Nike Glove</td>
                            <td class="font-primary f-w-600">$98.00</td>
                            <td class="f-w-600">Central</td>
                            <td>
                              <div class="status-showcase">
                                <p>65%</p>
                                <div class="progress bg-light-warning">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6>5.0 <span>(12 votes)</span></h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0 comman-round"><img src="../assets/images/dashboard-2/user/18.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Alice Venter</h6></a>
                                  <p>2019</p>
                                </div>
                              </div>
                            </td>
                            <td class="f-w-600">Nike Hat</td>
                            <td class="font-primary f-w-600">$26.00</td>
                            <td class="f-w-600">Palestine</td>
                            <td>
                              <div class="status-showcase">
                                <p>75%</p>
                                <div class="progress bg-light-warning">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <h6>3.0 <span>(86 votes)</span></h6>
                            </td>
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
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2024 © Admiro theme by pixelstrap.</p>
              </div>
              <div class="col-md-6">
                <p class="float-end mb-0">Hand crafted &amp; made with
                  <svg class="svg-color footer-icon">
                    <use href="../assets/svg/iconly-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- config-->
    <script src="../assets/js/config.js"></script>
    <!-- apex-->
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- touchspin -->
    <script src="../assets/js/touchspin_2/custom_touchspin.js"></script>
    <!-- data_table-->
    <script src="../assets/js/js-datatables/datatables/jquery.dataTables.min.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom.js"></script>
    <!-- page_datatable1-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom1.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- swiper-->
    <script src="../assets/js/vendors/swiper/swiper-bundle.min.js"></script>
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- dashboard_2-->
    <script src="../assets/js/dashboard/dashboard_2.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>
</html>