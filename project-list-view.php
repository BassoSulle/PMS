
<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileImage" content="images/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src="js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="css/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
        <script>
          var navbarStyle = window.config.config.phoenixNavbarStyle;
          if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
          }
        </script>
    <!-- ===============================================-->
    <!--    Side navigation-->
    <!-- ===============================================-->
        <?php include('side-nav/side_nav.php');?>

        <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="../../index.php">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="images/icons/logo.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
              </div>
            </a>
          </div>
          <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
            <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="images/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="images/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.php">
                      <div class="avatar avatar-l status-online  me-2 text-body">
                        <img class="rounded-circle " src="images/team/40x40/10.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.php">
                      <div class="avatar avatar-l  me-2 text-body">
                        <img class="rounded-circle " src="images/team/40x40/12.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent border-0">
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-body-emphasis position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="images/team/40x40/57.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                      </div>
                      <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top navbar-slim fixed-top navbar-expand" id="topNavSlim" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand navbar-brand" href="../../index.php">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs-9 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs-9 fw-bold">Light</span></label></div>
            </li>
            <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3">
                              <div class="avatar-name rounded-circle"><span>J</span></div>
                            </div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                        <div class="d-flex align-items-center justify-content-between position-relative">
                          <div class="d-flex">
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                            <div class="flex-1 me-sm-3">
                              <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                              <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                              <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent border-0">
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                  <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                  <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                </svg></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                <div class="card bg-body-emphasis position-relative border-0">
                  <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                    <div class="row text-center align-items-center gx-0 gy-0">
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs-10"></span></a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                      </div>
                      <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                    </div>
                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarTop" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../../index.php">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="images/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../index.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/project-management.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/crm.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../apps/social/feed.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/add-product.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/products.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customers.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customer-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/orders.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/order-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/refund.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/homepage.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/products-filter.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/cart.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/checkout.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/shipping-info.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/profile.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/favourite-stores.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/wishlist.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/order-tracking.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/invoice.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/crm/analytics.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deals.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deal-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/leads.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/lead-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/add-contact.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/project-management/create-new.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item active" href="project-list-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-card-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-board-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/todo-list.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/chat.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/email/inbox.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/email-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/compose.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/events/create-an-event.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/events/event-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/kanban/kanban.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/boards.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/create-kanban-board.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/social/profile.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/social/settings.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/calendar.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../pages/starter.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/faq/faq-accordion.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/faq/faq-tab.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/landing/default.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/landing/alternate.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-column.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-grid.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../pages/notifications.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/members.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/timeline.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/errors/404.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/403.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/500.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../demo/vertical-sidenav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/sidenav-collapse.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/darknav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/topnav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/horizontal-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../../modules/forms/basic/form-control.php">Form control</a><a class="dropdown-link" href="../../modules/forms/basic/input-group.php">Input group</a><a class="dropdown-link" href="../../modules/forms/basic/select.php">Select</a><a class="dropdown-link" href="../../modules/forms/basic/checks.php">Checks</a><a class="dropdown-link" href="../../modules/forms/basic/range.php">Range</a><a class="dropdown-link" href="../../modules/forms/basic/floating-labels.php">Floating labels</a><a class="dropdown-link" href="../../modules/forms/basic/layout.php">Layout</a><a class="dropdown-link" href="../../modules/forms/advance/advance-select.php">Advance select</a><a class="dropdown-link" href="../../modules/forms/advance/date-picker.php">Date picker</a><a class="dropdown-link" href="../../modules/forms/advance/editor.php">Editor</a><a class="dropdown-link" href="../../modules/forms/advance/file-uploader.php">File uploader</a><a class="dropdown-link" href="../../modules/forms/advance/rating.php">Rating</a><a class="dropdown-link" href="../../modules/forms/advance/emoji-button.php">Emoji button</a><a class="dropdown-link" href="../../modules/forms/validation.php">Validation</a><a class="dropdown-link" href="../../modules/forms/wizard.php">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../../modules/icons/feather.php">Feather</a><a class="dropdown-link" href="../../modules/icons/font-awesome.php">Font awesome</a><a class="dropdown-link" href="../../modules/icons/unicons.php">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../../modules/echarts/line-charts.php">Line charts</a><a class="dropdown-link" href="../../modules/echarts/bar-charts.php">Bar charts</a><a class="dropdown-link" href="../../modules/echarts/candlestick-charts.php">Candlestick charts</a><a class="dropdown-link" href="../../modules/echarts/geo-map.php">Geo map</a><a class="dropdown-link" href="../../modules/echarts/scatter-charts.php">Scatter charts</a><a class="dropdown-link" href="../../modules/echarts/pie-charts.php">Pie charts</a><a class="dropdown-link" href="../../modules/echarts/gauge-chart.php">Gauge chart</a><a class="dropdown-link" href="../../modules/echarts/radar-charts.php">Radar charts</a><a class="dropdown-link" href="../../modules/echarts/heatmap-charts.php">Heatmap charts</a><a class="dropdown-link" href="../../modules/echarts/how-to-use.php">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../../modules/components/accordion.php">Accordion</a><a class="dropdown-link" href="../../modules/components/avatar.php">Avatar</a><a class="dropdown-link" href="../../modules/components/alerts.php">Alerts</a><a class="dropdown-link" href="../../modules/components/badge.php">Badge</a><a class="dropdown-link" href="../../modules/components/breadcrumb.php">Breadcrumb</a><a class="dropdown-link" href="../../modules/components/button.php">Buttons</a><a class="dropdown-link" href="../../modules/components/calendar.php">Calendar</a><a class="dropdown-link" href="../../modules/components/card.php">Card</a><a class="dropdown-link" href="../../modules/components/carousel/bootstrap.php">Bootstrap</a><a class="dropdown-link" href="../../modules/components/carousel/swiper.php">Swiper</a><a class="dropdown-link" href="../../modules/components/collapse.php">Collapse</a><a class="dropdown-link" href="../../modules/components/dropdown.php">Dropdown</a><a class="dropdown-link" href="../../modules/components/list-group.php">List group</a><a class="dropdown-link" href="../../modules/components/modal.php">Modals</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navs.php">Navs</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navbar.php">Navbar</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/tabs.php">Tabs</a><a class="dropdown-link" href="../../modules/components/offcanvas.php">Offcanvas</a><a class="dropdown-link" href="../../modules/components/progress-bar.php">Progress bar</a><a class="dropdown-link" href="../../modules/components/placeholder.php">Placeholder</a><a class="dropdown-link" href="../../modules/components/pagination.php">Pagination</a><a class="dropdown-link" href="../../modules/components/popovers.php">Popovers</a><a class="dropdown-link" href="../../modules/components/scrollspy.php">Scrollspy</a><a class="dropdown-link" href="../../modules/components/sortable.php">Sortable</a><a class="dropdown-link" href="../../modules/components/spinners.php">Spinners</a><a class="dropdown-link" href="../../modules/components/toast.php">Toast</a><a class="dropdown-link" href="../../modules/components/tooltips.php">Tooltips</a><a class="dropdown-link" href="../../modules/components/chat-widget.php">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../../modules/tables/basic-tables.php">Basic tables</a><a class="dropdown-link" href="../../modules/tables/advance-tables.php">Advance tables</a><a class="dropdown-link" href="../../modules/tables/bulk-select.php">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../../modules/utilities/background.php">Background</a><a class="dropdown-link" href="../../modules/utilities/borders.php">Borders</a><a class="dropdown-link" href="../../modules/utilities/colors.php">Colors</a><a class="dropdown-link" href="../../modules/utilities/display.php">Display</a><a class="dropdown-link" href="../../modules/utilities/flex.php">Flex</a><a class="dropdown-link" href="../../modules/utilities/stacks.php">Stacks</a><a class="dropdown-link" href="../../modules/utilities/float.php">Float</a><a class="dropdown-link" href="../../modules/utilities/grid.php">Grid</a><a class="dropdown-link" href="../../modules/utilities/interactions.php">Interactions</a><a class="dropdown-link" href="../../modules/utilities/opacity.php">Opacity</a><a class="dropdown-link" href="../../modules/utilities/overflow.php">Overflow</a><a class="dropdown-link" href="../../modules/utilities/position.php">Position</a><a class="dropdown-link" href="../../modules/utilities/shadows.php">Shadows</a><a class="dropdown-link" href="../../modules/utilities/sizing.php">Sizing</a><a class="dropdown-link" href="../../modules/utilities/spacing.php">Spacing</a><a class="dropdown-link" href="../../modules/utilities/typography.php">Typography</a><a class="dropdown-link" href="../../modules/utilities/vertical-align.php">Vertical align</a><a class="dropdown-link" href="../../modules/utilities/visibility.php">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../documentation/getting-started.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/customization/configuration.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/styling.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/color.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/plugin.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/layouts/vertical-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/horizontal-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/combo-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../documentation/gulp.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../documentation/design-file.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../changelog.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../showcase.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="images/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand navbar-brand" href="../../index.php">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../index.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/project-management.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/crm.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../apps/social/feed.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/add-product.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/products.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customers.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customer-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/orders.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/order-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/refund.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/homepage.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/products-filter.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/cart.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/checkout.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/shipping-info.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/profile.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/favourite-stores.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/wishlist.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/order-tracking.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/invoice.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/crm/analytics.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deals.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deal-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/leads.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/lead-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/add-contact.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/project-management/create-new.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item active" href="../../apps/project-management/project-list-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-card-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-board-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/todo-list.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/chat.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/email/inbox.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/email-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/compose.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/events/create-an-event.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/events/event-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/kanban/kanban.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/boards.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/create-kanban-board.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/social/profile.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/social/settings.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/calendar.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../pages/starter.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/faq/faq-accordion.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/faq/faq-tab.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/landing/default.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/landing/alternate.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-column.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-grid.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../pages/notifications.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/members.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/timeline.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/errors/404.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/403.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/500.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../demo/vertical-sidenav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/sidenav-collapse.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/darknav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/topnav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/horizontal-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../../modules/forms/basic/form-control.php">Form control</a><a class="dropdown-link" href="../../modules/forms/basic/input-group.php">Input group</a><a class="dropdown-link" href="../../modules/forms/basic/select.php">Select</a><a class="dropdown-link" href="../../modules/forms/basic/checks.php">Checks</a><a class="dropdown-link" href="../../modules/forms/basic/range.php">Range</a><a class="dropdown-link" href="../../modules/forms/basic/floating-labels.php">Floating labels</a><a class="dropdown-link" href="../../modules/forms/basic/layout.php">Layout</a><a class="dropdown-link" href="../../modules/forms/advance/advance-select.php">Advance select</a><a class="dropdown-link" href="../../modules/forms/advance/date-picker.php">Date picker</a><a class="dropdown-link" href="../../modules/forms/advance/editor.php">Editor</a><a class="dropdown-link" href="../../modules/forms/advance/file-uploader.php">File uploader</a><a class="dropdown-link" href="../../modules/forms/advance/rating.php">Rating</a><a class="dropdown-link" href="../../modules/forms/advance/emoji-button.php">Emoji button</a><a class="dropdown-link" href="../../modules/forms/validation.php">Validation</a><a class="dropdown-link" href="../../modules/forms/wizard.php">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../../modules/icons/feather.php">Feather</a><a class="dropdown-link" href="../../modules/icons/font-awesome.php">Font awesome</a><a class="dropdown-link" href="../../modules/icons/unicons.php">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../../modules/echarts/line-charts.php">Line charts</a><a class="dropdown-link" href="../../modules/echarts/bar-charts.php">Bar charts</a><a class="dropdown-link" href="../../modules/echarts/candlestick-charts.php">Candlestick charts</a><a class="dropdown-link" href="../../modules/echarts/geo-map.php">Geo map</a><a class="dropdown-link" href="../../modules/echarts/scatter-charts.php">Scatter charts</a><a class="dropdown-link" href="../../modules/echarts/pie-charts.php">Pie charts</a><a class="dropdown-link" href="../../modules/echarts/gauge-chart.php">Gauge chart</a><a class="dropdown-link" href="../../modules/echarts/radar-charts.php">Radar charts</a><a class="dropdown-link" href="../../modules/echarts/heatmap-charts.php">Heatmap charts</a><a class="dropdown-link" href="../../modules/echarts/how-to-use.php">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../../modules/components/accordion.php">Accordion</a><a class="dropdown-link" href="../../modules/components/avatar.php">Avatar</a><a class="dropdown-link" href="../../modules/components/alerts.php">Alerts</a><a class="dropdown-link" href="../../modules/components/badge.php">Badge</a><a class="dropdown-link" href="../../modules/components/breadcrumb.php">Breadcrumb</a><a class="dropdown-link" href="../../modules/components/button.php">Buttons</a><a class="dropdown-link" href="../../modules/components/calendar.php">Calendar</a><a class="dropdown-link" href="../../modules/components/card.php">Card</a><a class="dropdown-link" href="../../modules/components/carousel/bootstrap.php">Bootstrap</a><a class="dropdown-link" href="../../modules/components/carousel/swiper.php">Swiper</a><a class="dropdown-link" href="../../modules/components/collapse.php">Collapse</a><a class="dropdown-link" href="../../modules/components/dropdown.php">Dropdown</a><a class="dropdown-link" href="../../modules/components/list-group.php">List group</a><a class="dropdown-link" href="../../modules/components/modal.php">Modals</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navs.php">Navs</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navbar.php">Navbar</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/tabs.php">Tabs</a><a class="dropdown-link" href="../../modules/components/offcanvas.php">Offcanvas</a><a class="dropdown-link" href="../../modules/components/progress-bar.php">Progress bar</a><a class="dropdown-link" href="../../modules/components/placeholder.php">Placeholder</a><a class="dropdown-link" href="../../modules/components/pagination.php">Pagination</a><a class="dropdown-link" href="../../modules/components/popovers.php">Popovers</a><a class="dropdown-link" href="../../modules/components/scrollspy.php">Scrollspy</a><a class="dropdown-link" href="../../modules/components/sortable.php">Sortable</a><a class="dropdown-link" href="../../modules/components/spinners.php">Spinners</a><a class="dropdown-link" href="../../modules/components/toast.php">Toast</a><a class="dropdown-link" href="../../modules/components/tooltips.php">Tooltips</a><a class="dropdown-link" href="../../modules/components/chat-widget.php">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../../modules/tables/basic-tables.php">Basic tables</a><a class="dropdown-link" href="../../modules/tables/advance-tables.php">Advance tables</a><a class="dropdown-link" href="../../modules/tables/bulk-select.php">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../../modules/utilities/background.php">Background</a><a class="dropdown-link" href="../../modules/utilities/borders.php">Borders</a><a class="dropdown-link" href="../../modules/utilities/colors.php">Colors</a><a class="dropdown-link" href="../../modules/utilities/display.php">Display</a><a class="dropdown-link" href="../../modules/utilities/flex.php">Flex</a><a class="dropdown-link" href="../../modules/utilities/stacks.php">Stacks</a><a class="dropdown-link" href="../../modules/utilities/float.php">Float</a><a class="dropdown-link" href="../../modules/utilities/grid.php">Grid</a><a class="dropdown-link" href="../../modules/utilities/interactions.php">Interactions</a><a class="dropdown-link" href="../../modules/utilities/opacity.php">Opacity</a><a class="dropdown-link" href="../../modules/utilities/overflow.php">Overflow</a><a class="dropdown-link" href="../../modules/utilities/position.php">Position</a><a class="dropdown-link" href="../../modules/utilities/shadows.php">Shadows</a><a class="dropdown-link" href="../../modules/utilities/sizing.php">Sizing</a><a class="dropdown-link" href="../../modules/utilities/spacing.php">Spacing</a><a class="dropdown-link" href="../../modules/utilities/typography.php">Typography</a><a class="dropdown-link" href="../../modules/utilities/vertical-align.php">Vertical align</a><a class="dropdown-link" href="../../modules/utilities/visibility.php">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../documentation/getting-started.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/customization/configuration.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/styling.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/color.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/plugin.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/layouts/vertical-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/horizontal-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/combo-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../documentation/gulp.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../documentation/design-file.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../changelog.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../showcase.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs-9 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs-9 fw-bold">Light</span></label></div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs-10"></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="navbarCombo" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="../../index.php">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="images/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../index.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/project-management.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/crm.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../apps/social/feed.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/add-product.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/products.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customers.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customer-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/orders.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/order-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/refund.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/homepage.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/products-filter.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/cart.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/checkout.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/shipping-info.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/profile.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/favourite-stores.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/wishlist.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/order-tracking.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/invoice.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/crm/analytics.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deals.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deal-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/leads.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/lead-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/add-contact.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/project-management/create-new.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item active" href="../../apps/project-management/project-list-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-card-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-board-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/todo-list.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/chat.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/email/inbox.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/email-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/compose.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/events/create-an-event.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/events/event-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/kanban/kanban.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/boards.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/create-kanban-board.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/social/profile.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/social/settings.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/calendar.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../pages/starter.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/faq/faq-accordion.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/faq/faq-tab.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/landing/default.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/landing/alternate.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-column.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-grid.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../pages/notifications.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/members.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/timeline.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/errors/404.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/403.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/500.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../demo/vertical-sidenav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/sidenav-collapse.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/darknav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/topnav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/horizontal-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../../modules/forms/basic/form-control.php">Form control</a><a class="dropdown-link" href="../../modules/forms/basic/input-group.php">Input group</a><a class="dropdown-link" href="../../modules/forms/basic/select.php">Select</a><a class="dropdown-link" href="../../modules/forms/basic/checks.php">Checks</a><a class="dropdown-link" href="../../modules/forms/basic/range.php">Range</a><a class="dropdown-link" href="../../modules/forms/basic/floating-labels.php">Floating labels</a><a class="dropdown-link" href="../../modules/forms/basic/layout.php">Layout</a><a class="dropdown-link" href="../../modules/forms/advance/advance-select.php">Advance select</a><a class="dropdown-link" href="../../modules/forms/advance/date-picker.php">Date picker</a><a class="dropdown-link" href="../../modules/forms/advance/editor.php">Editor</a><a class="dropdown-link" href="../../modules/forms/advance/file-uploader.php">File uploader</a><a class="dropdown-link" href="../../modules/forms/advance/rating.php">Rating</a><a class="dropdown-link" href="../../modules/forms/advance/emoji-button.php">Emoji button</a><a class="dropdown-link" href="../../modules/forms/validation.php">Validation</a><a class="dropdown-link" href="../../modules/forms/wizard.php">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../../modules/icons/feather.php">Feather</a><a class="dropdown-link" href="../../modules/icons/font-awesome.php">Font awesome</a><a class="dropdown-link" href="../../modules/icons/unicons.php">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../../modules/echarts/line-charts.php">Line charts</a><a class="dropdown-link" href="../../modules/echarts/bar-charts.php">Bar charts</a><a class="dropdown-link" href="../../modules/echarts/candlestick-charts.php">Candlestick charts</a><a class="dropdown-link" href="../../modules/echarts/geo-map.php">Geo map</a><a class="dropdown-link" href="../../modules/echarts/scatter-charts.php">Scatter charts</a><a class="dropdown-link" href="../../modules/echarts/pie-charts.php">Pie charts</a><a class="dropdown-link" href="../../modules/echarts/gauge-chart.php">Gauge chart</a><a class="dropdown-link" href="../../modules/echarts/radar-charts.php">Radar charts</a><a class="dropdown-link" href="../../modules/echarts/heatmap-charts.php">Heatmap charts</a><a class="dropdown-link" href="../../modules/echarts/how-to-use.php">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../../modules/components/accordion.php">Accordion</a><a class="dropdown-link" href="../../modules/components/avatar.php">Avatar</a><a class="dropdown-link" href="../../modules/components/alerts.php">Alerts</a><a class="dropdown-link" href="../../modules/components/badge.php">Badge</a><a class="dropdown-link" href="../../modules/components/breadcrumb.php">Breadcrumb</a><a class="dropdown-link" href="../../modules/components/button.php">Buttons</a><a class="dropdown-link" href="../../modules/components/calendar.php">Calendar</a><a class="dropdown-link" href="../../modules/components/card.php">Card</a><a class="dropdown-link" href="../../modules/components/carousel/bootstrap.php">Bootstrap</a><a class="dropdown-link" href="../../modules/components/carousel/swiper.php">Swiper</a><a class="dropdown-link" href="../../modules/components/collapse.php">Collapse</a><a class="dropdown-link" href="../../modules/components/dropdown.php">Dropdown</a><a class="dropdown-link" href="../../modules/components/list-group.php">List group</a><a class="dropdown-link" href="../../modules/components/modal.php">Modals</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navs.php">Navs</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navbar.php">Navbar</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/tabs.php">Tabs</a><a class="dropdown-link" href="../../modules/components/offcanvas.php">Offcanvas</a><a class="dropdown-link" href="../../modules/components/progress-bar.php">Progress bar</a><a class="dropdown-link" href="../../modules/components/placeholder.php">Placeholder</a><a class="dropdown-link" href="../../modules/components/pagination.php">Pagination</a><a class="dropdown-link" href="../../modules/components/popovers.php">Popovers</a><a class="dropdown-link" href="../../modules/components/scrollspy.php">Scrollspy</a><a class="dropdown-link" href="../../modules/components/sortable.php">Sortable</a><a class="dropdown-link" href="../../modules/components/spinners.php">Spinners</a><a class="dropdown-link" href="../../modules/components/toast.php">Toast</a><a class="dropdown-link" href="../../modules/components/tooltips.php">Tooltips</a><a class="dropdown-link" href="../../modules/components/chat-widget.php">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../../modules/tables/basic-tables.php">Basic tables</a><a class="dropdown-link" href="../../modules/tables/advance-tables.php">Advance tables</a><a class="dropdown-link" href="../../modules/tables/bulk-select.php">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../../modules/utilities/background.php">Background</a><a class="dropdown-link" href="../../modules/utilities/borders.php">Borders</a><a class="dropdown-link" href="../../modules/utilities/colors.php">Colors</a><a class="dropdown-link" href="../../modules/utilities/display.php">Display</a><a class="dropdown-link" href="../../modules/utilities/flex.php">Flex</a><a class="dropdown-link" href="../../modules/utilities/stacks.php">Stacks</a><a class="dropdown-link" href="../../modules/utilities/float.php">Float</a><a class="dropdown-link" href="../../modules/utilities/grid.php">Grid</a><a class="dropdown-link" href="../../modules/utilities/interactions.php">Interactions</a><a class="dropdown-link" href="../../modules/utilities/opacity.php">Opacity</a><a class="dropdown-link" href="../../modules/utilities/overflow.php">Overflow</a><a class="dropdown-link" href="../../modules/utilities/position.php">Position</a><a class="dropdown-link" href="../../modules/utilities/shadows.php">Shadows</a><a class="dropdown-link" href="../../modules/utilities/sizing.php">Sizing</a><a class="dropdown-link" href="../../modules/utilities/spacing.php">Spacing</a><a class="dropdown-link" href="../../modules/utilities/typography.php">Typography</a><a class="dropdown-link" href="../../modules/utilities/vertical-align.php">Vertical align</a><a class="dropdown-link" href="../../modules/utilities/visibility.php">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../documentation/getting-started.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/customization/configuration.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/styling.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/color.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/plugin.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/layouts/vertical-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/horizontal-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/combo-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../documentation/gulp.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../documentation/design-file.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../changelog.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../showcase.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
          </li>
          <li class="nav-item"><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:19px;width:19px;margin-bottom: 2px;"></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="images/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav" style="display:none;">
        <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand navbar-brand" href="../../index.php">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../index.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/project-management.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../dashboard/crm.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../apps/social/feed.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/add-product.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/products.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customers.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customer-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/orders.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/order-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/admin/refund.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/homepage.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/products-filter.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/cart.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/checkout.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/shipping-info.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/profile.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/favourite-stores.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/wishlist.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/order-tracking.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../apps/e-commerce/landing/invoice.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/crm/analytics.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deals.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/deal-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/leads.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/lead-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/reports-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/crm/add-contact.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/project-management/create-new.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item active" href="../../apps/project-management/project-list-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-card-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-board-view.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/todo-list.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/project-management/project-details.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/chat.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/email/inbox.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/email-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/email/compose.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/events/create-an-event.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/events/event-detail.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/kanban/kanban.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/boards.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/kanban/create-kanban-board.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../apps/social/profile.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../apps/social/settings.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../apps/calendar.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../pages/starter.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/faq/faq-accordion.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/faq/faq-tab.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/landing/default.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/landing/alternate.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-column.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/pricing/pricing-grid.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../pages/notifications.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/members.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../pages/timeline.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../pages/errors/404.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/403.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../pages/errors/500.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/simple/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/split/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-in.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-up.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/sign-out.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/forgot-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/reset-password.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/lock-screen.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../../pages/authentication/card/2FA.php">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../demo/vertical-sidenav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/sidenav-collapse.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/darknav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/topnav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/navbar-top.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/horizontal-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/combo-nav-slim.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../demo/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
              <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                <div class="border-0 scrollbar" style="max-height: 60vh;">
                  <div class="px-3 pt-4 pb-3 img-dropdown">
                    <div class="row gx-4 gy-5">
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Forms</h6>
                        </div><a class="dropdown-link" href="../../modules/forms/basic/form-control.php">Form control</a><a class="dropdown-link" href="../../modules/forms/basic/input-group.php">Input group</a><a class="dropdown-link" href="../../modules/forms/basic/select.php">Select</a><a class="dropdown-link" href="../../modules/forms/basic/checks.php">Checks</a><a class="dropdown-link" href="../../modules/forms/basic/range.php">Range</a><a class="dropdown-link" href="../../modules/forms/basic/floating-labels.php">Floating labels</a><a class="dropdown-link" href="../../modules/forms/basic/layout.php">Layout</a><a class="dropdown-link" href="../../modules/forms/advance/advance-select.php">Advance select</a><a class="dropdown-link" href="../../modules/forms/advance/date-picker.php">Date picker</a><a class="dropdown-link" href="../../modules/forms/advance/editor.php">Editor</a><a class="dropdown-link" href="../../modules/forms/advance/file-uploader.php">File uploader</a><a class="dropdown-link" href="../../modules/forms/advance/rating.php">Rating</a><a class="dropdown-link" href="../../modules/forms/advance/emoji-button.php">Emoji button</a><a class="dropdown-link" href="../../modules/forms/validation.php">Validation</a><a class="dropdown-link" href="../../modules/forms/wizard.php">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../../modules/icons/feather.php">Feather</a><a class="dropdown-link" href="../../modules/icons/font-awesome.php">Font awesome</a><a class="dropdown-link" href="../../modules/icons/unicons.php">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../../modules/echarts/line-charts.php">Line charts</a><a class="dropdown-link" href="../../modules/echarts/bar-charts.php">Bar charts</a><a class="dropdown-link" href="../../modules/echarts/candlestick-charts.php">Candlestick charts</a><a class="dropdown-link" href="../../modules/echarts/geo-map.php">Geo map</a><a class="dropdown-link" href="../../modules/echarts/scatter-charts.php">Scatter charts</a><a class="dropdown-link" href="../../modules/echarts/pie-charts.php">Pie charts</a><a class="dropdown-link" href="../../modules/echarts/gauge-chart.php">Gauge chart</a><a class="dropdown-link" href="../../modules/echarts/radar-charts.php">Radar charts</a><a class="dropdown-link" href="../../modules/echarts/heatmap-charts.php">Heatmap charts</a><a class="dropdown-link" href="../../modules/echarts/how-to-use.php">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../../modules/components/accordion.php">Accordion</a><a class="dropdown-link" href="../../modules/components/avatar.php">Avatar</a><a class="dropdown-link" href="../../modules/components/alerts.php">Alerts</a><a class="dropdown-link" href="../../modules/components/badge.php">Badge</a><a class="dropdown-link" href="../../modules/components/breadcrumb.php">Breadcrumb</a><a class="dropdown-link" href="../../modules/components/button.php">Buttons</a><a class="dropdown-link" href="../../modules/components/calendar.php">Calendar</a><a class="dropdown-link" href="../../modules/components/card.php">Card</a><a class="dropdown-link" href="../../modules/components/carousel/bootstrap.php">Bootstrap</a><a class="dropdown-link" href="../../modules/components/carousel/swiper.php">Swiper</a><a class="dropdown-link" href="../../modules/components/collapse.php">Collapse</a><a class="dropdown-link" href="../../modules/components/dropdown.php">Dropdown</a><a class="dropdown-link" href="../../modules/components/list-group.php">List group</a><a class="dropdown-link" href="../../modules/components/modal.php">Modals</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navs.php">Navs</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navbar.php">Navbar</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/tabs.php">Tabs</a><a class="dropdown-link" href="../../modules/components/offcanvas.php">Offcanvas</a><a class="dropdown-link" href="../../modules/components/progress-bar.php">Progress bar</a><a class="dropdown-link" href="../../modules/components/placeholder.php">Placeholder</a><a class="dropdown-link" href="../../modules/components/pagination.php">Pagination</a><a class="dropdown-link" href="../../modules/components/popovers.php">Popovers</a><a class="dropdown-link" href="../../modules/components/scrollspy.php">Scrollspy</a><a class="dropdown-link" href="../../modules/components/sortable.php">Sortable</a><a class="dropdown-link" href="../../modules/components/spinners.php">Spinners</a><a class="dropdown-link" href="../../modules/components/toast.php">Toast</a><a class="dropdown-link" href="../../modules/components/tooltips.php">Tooltips</a><a class="dropdown-link" href="../../modules/components/chat-widget.php">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../../modules/tables/basic-tables.php">Basic tables</a><a class="dropdown-link" href="../../modules/tables/advance-tables.php">Advance tables</a><a class="dropdown-link" href="../../modules/tables/bulk-select.php">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../../modules/utilities/background.php">Background</a><a class="dropdown-link" href="../../modules/utilities/borders.php">Borders</a><a class="dropdown-link" href="../../modules/utilities/colors.php">Colors</a><a class="dropdown-link" href="../../modules/utilities/display.php">Display</a><a class="dropdown-link" href="../../modules/utilities/flex.php">Flex</a><a class="dropdown-link" href="../../modules/utilities/stacks.php">Stacks</a><a class="dropdown-link" href="../../modules/utilities/float.php">Float</a><a class="dropdown-link" href="../../modules/utilities/grid.php">Grid</a><a class="dropdown-link" href="../../modules/utilities/interactions.php">Interactions</a><a class="dropdown-link" href="../../modules/utilities/opacity.php">Opacity</a><a class="dropdown-link" href="../../modules/utilities/overflow.php">Overflow</a><a class="dropdown-link" href="../../modules/utilities/position.php">Position</a><a class="dropdown-link" href="../../modules/utilities/shadows.php">Shadows</a><a class="dropdown-link" href="../../modules/utilities/sizing.php">Sizing</a><a class="dropdown-link" href="../../modules/utilities/spacing.php">Spacing</a><a class="dropdown-link" href="../../modules/utilities/typography.php">Typography</a><a class="dropdown-link" href="../../modules/utilities/vertical-align.php">Vertical align</a><a class="dropdown-link" href="../../modules/utilities/visibility.php">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../../documentation/getting-started.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/customization/configuration.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/styling.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/color.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/dark-mode.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/customization/plugin.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../../documentation/layouts/vertical-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/horizontal-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/combo-navbar.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../../documentation/layouts/dual-nav.php">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../../documentation/gulp.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../documentation/design-file.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../changelog.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../../showcase.php">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs-9 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs-9 fw-bold">Light</span></label></div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search" style="height:12px;width:12px;"></span></a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
                    <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3">
                            <div class="avatar-name rounded-circle"><span>J</span></div>
                          </div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                      <div class="d-flex align-items-center justify-content-between position-relative">
                        <div class="d-flex">
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                          <div class="flex-1 me-sm-3">
                            <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                            <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                            <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                          </div>
                        </div>
                        <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer p-0 border-top border-translucent border-0">
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
              </svg></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
              <div class="card bg-body-emphasis position-relative border-0">
                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                  <div class="row text-center align-items-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs-10"></span></a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                    </div>
                    <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                  </div>
                  <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                </div>
                <div class="overflow-auto scrollbar" style="height: 10rem;">
                  <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                  </ul>
                </div>
                <div class="card-footer p-0 border-top border-translucent">
                  <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                  </ul>
                  <hr />
                  <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                  <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand-lg" id="dualNav" style="display:none;">
        <div class="w-100">
          <div class="d-flex flex-between-center dual-nav-first-layer">
            <div class="navbar-logo">
              <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
              <a class="navbar-brand me-1 me-sm-3" href="../../index.php">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center"><img src="images/icons/logo.png" alt="phoenix" width="27" />
                    <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
              <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                    <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="images/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="images/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.php">
                        <div class="avatar avatar-l status-online  me-2 text-body">
                          <img class="rounded-circle " src="images/team/40x40/10.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.php">
                        <div class="avatar avatar-l  me-2 text-body">
                          <img class="rounded-circle " src="images/team/40x40/12.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                    <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="text-center">
                    <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                  </div>
                </div>
              </div>
            </div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                  <div class="card position-relative border-0">
                    <div class="card-header p-2">
                      <div class="d-flex justify-content-between">
                        <h5 class="text-body-emphasis mb-0">Notificatons</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="scrollbar-overlay" style="height: 27rem;">
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/30.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3">
                                <div class="avatar-name rounded-circle"><span>J</span></div>
                              </div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="images/team/40x40/avatar.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/57.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/59.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="images/team/40x40/58.webp" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="d-none d-sm-block"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent border-0">
                      <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../../pages/notifications.php">Notification history</a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-body-emphasis position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/behance.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-cloud.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/slack.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/gitlab.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/bitbucket.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-drive.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/trello.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/figma.webp" alt="" width="20" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/twitter.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/pinterest.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/ln.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-maps.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/google-photos.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="images/nav-icons/spotify.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="images/team/40x40/57.webp" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                  <div class="card position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle " src="images/team/72x72/57.webp" alt="" />
                        </div>
                        <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-body" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr />
                      <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse navbar-top-collapse justify-content-center" id="navbarTopCollapse">
            <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../../index.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../dashboard/project-management.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../dashboard/crm.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../apps/social/feed.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Social feed</div>
                    </a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Apps</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="e-commerce" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="admin" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Admin</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/add-product.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/products.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customers.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/customer-details.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/orders.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/order-details.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/admin/refund.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/homepage.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/products-filter.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/cart.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/checkout.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/shipping-info.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/profile.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/favourite-stores.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/wishlist.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/order-tracking.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../apps/e-commerce/landing/invoice.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Invoice</div>
                            </a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="CRM" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="phone"></span>CRM</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../apps/crm/analytics.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/deals.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/deal-details.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/leads.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/lead-details.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/reports.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/reports-details.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/crm/add-contact.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../apps/project-management/create-new.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                        </a></li>
                      <li><a class="dropdown-item active" href="../../apps/project-management/project-list-view.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/project-management/project-card-view.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/project-management/project-board-view.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/project-management/todo-list.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/project-management/project-details.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../../apps/chat.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../apps/email/inbox.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/email/email-detail.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/email/compose.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../apps/events/create-an-event.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/events/event-detail.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../apps/kanban/kanban.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/kanban/boards.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/kanban/create-kanban-board.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../apps/social/profile.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../apps/social/settings.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../../apps/calendar.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                    </a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../../pages/starter.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../pages/faq/faq-accordion.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../pages/faq/faq-tab.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../pages/landing/default.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../pages/landing/alternate.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../pages/pricing/pricing-column.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../pages/pricing/pricing-grid.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../../pages/notifications.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../pages/members.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../pages/timeline.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../pages/errors/404.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../pages/errors/403.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../pages/errors/500.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>500</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Authentication</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Simple</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-in.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-up.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/sign-out.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/forgot-password.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/reset-password.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/lock-screen.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/simple/2FA.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../../pages/authentication/split/sign-in.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/split/sign-up.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/split/sign-out.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/split/forgot-password.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/split/reset-password.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/split/lock-screen.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/split/2FA.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../../pages/authentication/card/sign-in.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/card/sign-up.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/card/sign-out.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/card/forgot-password.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/card/reset-password.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/card/lock-screen.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../../pages/authentication/card/2FA.php">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Layouts</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../demo/vertical-sidenav.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/dark-mode.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/sidenav-collapse.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/darknav.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/topnav-slim.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/navbar-top-slim.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/navbar-top.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/horizontal-slim.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/combo-nav.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/combo-nav-slim.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../demo/dual-nav.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                        </a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Modules</a>
                <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
                  <div class="border-0 scrollbar" style="max-height: 60vh;">
                    <div class="px-3 pt-4 pb-3 img-dropdown">
                      <div class="row gx-4 gy-5">
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Forms</h6>
                          </div><a class="dropdown-link" href="../../modules/forms/basic/form-control.php">Form control</a><a class="dropdown-link" href="../../modules/forms/basic/input-group.php">Input group</a><a class="dropdown-link" href="../../modules/forms/basic/select.php">Select</a><a class="dropdown-link" href="../../modules/forms/basic/checks.php">Checks</a><a class="dropdown-link" href="../../modules/forms/basic/range.php">Range</a><a class="dropdown-link" href="../../modules/forms/basic/floating-labels.php">Floating labels</a><a class="dropdown-link" href="../../modules/forms/basic/layout.php">Layout</a><a class="dropdown-link" href="../../modules/forms/advance/advance-select.php">Advance select</a><a class="dropdown-link" href="../../modules/forms/advance/date-picker.php">Date picker</a><a class="dropdown-link" href="../../modules/forms/advance/editor.php">Editor</a><a class="dropdown-link" href="../../modules/forms/advance/file-uploader.php">File uploader</a><a class="dropdown-link" href="../../modules/forms/advance/rating.php">Rating</a><a class="dropdown-link" href="../../modules/forms/advance/emoji-button.php">Emoji button</a><a class="dropdown-link" href="../../modules/forms/validation.php">Validation</a><a class="dropdown-link" href="../../modules/forms/wizard.php">Wizard</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Icons</h6>
                          </div><a class="dropdown-link" href="../../modules/icons/feather.php">Feather</a><a class="dropdown-link" href="../../modules/icons/font-awesome.php">Font awesome</a><a class="dropdown-link" href="../../modules/icons/unicons.php">Unicons</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">ECharts</h6>
                          </div><a class="dropdown-link" href="../../modules/echarts/line-charts.php">Line charts</a><a class="dropdown-link" href="../../modules/echarts/bar-charts.php">Bar charts</a><a class="dropdown-link" href="../../modules/echarts/candlestick-charts.php">Candlestick charts</a><a class="dropdown-link" href="../../modules/echarts/geo-map.php">Geo map</a><a class="dropdown-link" href="../../modules/echarts/scatter-charts.php">Scatter charts</a><a class="dropdown-link" href="../../modules/echarts/pie-charts.php">Pie charts</a><a class="dropdown-link" href="../../modules/echarts/gauge-chart.php">Gauge chart</a><a class="dropdown-link" href="../../modules/echarts/radar-charts.php">Radar charts</a><a class="dropdown-link" href="../../modules/echarts/heatmap-charts.php">Heatmap charts</a><a class="dropdown-link" href="../../modules/echarts/how-to-use.php">How to use</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Components</h6>
                          </div><a class="dropdown-link" href="../../modules/components/accordion.php">Accordion</a><a class="dropdown-link" href="../../modules/components/avatar.php">Avatar</a><a class="dropdown-link" href="../../modules/components/alerts.php">Alerts</a><a class="dropdown-link" href="../../modules/components/badge.php">Badge</a><a class="dropdown-link" href="../../modules/components/breadcrumb.php">Breadcrumb</a><a class="dropdown-link" href="../../modules/components/button.php">Buttons</a><a class="dropdown-link" href="../../modules/components/calendar.php">Calendar</a><a class="dropdown-link" href="../../modules/components/card.php">Card</a><a class="dropdown-link" href="../../modules/components/carousel/bootstrap.php">Bootstrap</a><a class="dropdown-link" href="../../modules/components/carousel/swiper.php">Swiper</a><a class="dropdown-link" href="../../modules/components/collapse.php">Collapse</a><a class="dropdown-link" href="../../modules/components/dropdown.php">Dropdown</a><a class="dropdown-link" href="../../modules/components/list-group.php">List group</a><a class="dropdown-link" href="../../modules/components/modal.php">Modals</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navs.php">Navs</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/navbar.php">Navbar</a><a class="dropdown-link" href="../../modules/components/navs-and-tabs/tabs.php">Tabs</a><a class="dropdown-link" href="../../modules/components/offcanvas.php">Offcanvas</a><a class="dropdown-link" href="../../modules/components/progress-bar.php">Progress bar</a><a class="dropdown-link" href="../../modules/components/placeholder.php">Placeholder</a><a class="dropdown-link" href="../../modules/components/pagination.php">Pagination</a><a class="dropdown-link" href="../../modules/components/popovers.php">Popovers</a><a class="dropdown-link" href="../../modules/components/scrollspy.php">Scrollspy</a><a class="dropdown-link" href="../../modules/components/sortable.php">Sortable</a><a class="dropdown-link" href="../../modules/components/spinners.php">Spinners</a><a class="dropdown-link" href="../../modules/components/toast.php">Toast</a><a class="dropdown-link" href="../../modules/components/tooltips.php">Tooltips</a><a class="dropdown-link" href="../../modules/components/chat-widget.php">Chat widget</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Tables</h6>
                          </div><a class="dropdown-link" href="../../modules/tables/basic-tables.php">Basic tables</a><a class="dropdown-link" href="../../modules/tables/advance-tables.php">Advance tables</a><a class="dropdown-link" href="../../modules/tables/bulk-select.php">Bulk Select</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Utilities</h6>
                          </div><a class="dropdown-link" href="../../modules/utilities/background.php">Background</a><a class="dropdown-link" href="../../modules/utilities/borders.php">Borders</a><a class="dropdown-link" href="../../modules/utilities/colors.php">Colors</a><a class="dropdown-link" href="../../modules/utilities/display.php">Display</a><a class="dropdown-link" href="../../modules/utilities/flex.php">Flex</a><a class="dropdown-link" href="../../modules/utilities/stacks.php">Stacks</a><a class="dropdown-link" href="../../modules/utilities/float.php">Float</a><a class="dropdown-link" href="../../modules/utilities/grid.php">Grid</a><a class="dropdown-link" href="../../modules/utilities/interactions.php">Interactions</a><a class="dropdown-link" href="../../modules/utilities/opacity.php">Opacity</a><a class="dropdown-link" href="../../modules/utilities/overflow.php">Overflow</a><a class="dropdown-link" href="../../modules/utilities/position.php">Position</a><a class="dropdown-link" href="../../modules/utilities/shadows.php">Shadows</a><a class="dropdown-link" href="../../modules/utilities/sizing.php">Sizing</a><a class="dropdown-link" href="../../modules/utilities/spacing.php">Spacing</a><a class="dropdown-link" href="../../modules/utilities/typography.php">Typography</a><a class="dropdown-link" href="../../modules/utilities/vertical-align.php">Vertical align</a><a class="dropdown-link" href="../../modules/utilities/visibility.php">Visibility</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../../documentation/getting-started.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                    </a></li>
                  <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../documentation/customization/configuration.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/customization/styling.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/customization/color.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/customization/dark-mode.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/customization/plugin.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../../documentation/layouts/vertical-navbar.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/layouts/horizontal-navbar.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/layouts/combo-navbar.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../../documentation/layouts/dual-nav.php">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../../documentation/gulp.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../documentation/design-file.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../changelog.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../../showcase.php">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Showcase</div>
                    </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
        <div class="modal-dialog">
          <div class="modal-content mt-15 rounded-pill">
            <div class="modal-body p-0">
              <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
                <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
                <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                  <div class="scrollbar-overlay" style="max-height: 30rem;">
                    <div class="list pb-3">
                      <h6 class="dropdown-header text-body-highlight fs-10 py-2">24 <span class="text-body-quaternary">results</span></h6>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Recently Searched </h6>
                      <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="images/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="images/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.php">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="images/team/40x40/10.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../../pages/members.php">
                          <div class="avatar avatar-l  me-2 text-body">
                            <img class="rounded-circle " src="images/team/40x40/12.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                      <div class="py-2"><a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../../apps/e-commerce/landing/product-details.php">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-brands fa-chrome text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="text-center">
                      <p class="fallback fw-bold fs-7 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        var navbarPosition = window.config.config.phoenixNavbarPosition;
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTop = document.querySelector('#navbarTop');
        var topNavSlim = document.querySelector('#topNavSlim');
        var navbarTopSlim = document.querySelector('#navbarTopSlim');
        var navbarCombo = document.querySelector('#navbarCombo');
        var navbarComboSlim = document.querySelector('#navbarComboSlim');
        var dualNav = document.querySelector('#dualNav');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarPosition === 'dual-nav') {
          topNavSlim.remove();
          navbarTop.remove();
          navbarVertical.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarDefault.remove();
          dualNav.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'dual');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          topNavSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          navbarVertical.remove();
          navbarTop.remove();
          topNavSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarTopSlim.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
          navbarDefault.remove();
          navbarTop.remove();
          topNavSlim.remove();
          navbarCombo.remove();
          navbarTopSlim.remove();
          navbarComboSlim.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault.remove();
          topNavSlim.remove();
          navbarVertical.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarTop.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'horizontal');
        } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
          topNavSlim.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarDefault.remove();
          navbarComboSlim.remove();
          navbarCombo.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'combo');


        } else {
          topNavSlim.remove();
          navbarTop.remove();
          navbarTopSlim.remove();
          navbarCombo.remove();
          navbarComboSlim.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
      </script>
      <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="mb-9">
          <div id="projectSummary" data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
            <div class="row mb-4 gx-6 gy-3 align-items-center">
              <div class="col-auto">
                <h2 class="mb-0">Projects<span class="fw-normal text-body-tertiary ms-3">(32)</span></h2>
              </div>
              <div class="col-auto"><a class="btn btn-primary px-5" href="create-new.php"><i class="fa-solid fa-plus me-2"></i>Add new project</a></div>
            </div>
            <div class="row g-3 justify-content-between align-items-end mb-4">
              <div class="col-12 col-sm-auto">
                <ul class="nav nav-links mx-n2">
                  <li class="nav-item"><a class="nav-link px-2 py-1 active" aria-current="page" href="#"><span>All</span><span class="text-body-tertiary fw-semibold">(32)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Ongoing</span><span class="text-body-tertiary fw-semibold">(14)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Cancelled</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Finished</span><span class="text-body-tertiary fw-semibold">(14)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Postponed</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-auto">
                <div class="d-flex align-items-center">
                  <div class="search-box me-3">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div><a class="btn btn-phoenix-primary px-3 me-1 border-0 text-body" href="../../apps/project-management/project-list-view.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="List view"><span class="fa-solid fa-list fs-10"></span></a><a class="btn btn-phoenix-primary px-3 me-1" href="../../apps/project-management/project-board-view.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Board view"><svg width="9" height="9" viewbox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0.5C0 0.223857 0.223858 0 0.5 0H1.83333C2.10948 0 2.33333 0.223858 2.33333 0.5V1.83333C2.33333 2.10948 2.10948 2.33333 1.83333 2.33333H0.5C0.223857 2.33333 0 2.10948 0 1.83333V0.5Z" fill="currentColor"></path>
                      <path d="M3.33333 0.5C3.33333 0.223857 3.55719 0 3.83333 0H5.16667C5.44281 0 5.66667 0.223858 5.66667 0.5V1.83333C5.66667 2.10948 5.44281 2.33333 5.16667 2.33333H3.83333C3.55719 2.33333 3.33333 2.10948 3.33333 1.83333V0.5Z" fill="currentColor"></path>
                      <path d="M6.66667 0.5C6.66667 0.223857 6.89052 0 7.16667 0H8.5C8.77614 0 9 0.223858 9 0.5V1.83333C9 2.10948 8.77614 2.33333 8.5 2.33333H7.16667C6.89052 2.33333 6.66667 2.10948 6.66667 1.83333V0.5Z" fill="currentColor"></path>
                      <path d="M0 3.83333C0 3.55719 0.223858 3.33333 0.5 3.33333H1.83333C2.10948 3.33333 2.33333 3.55719 2.33333 3.83333V5.16667C2.33333 5.44281 2.10948 5.66667 1.83333 5.66667H0.5C0.223857 5.66667 0 5.44281 0 5.16667V3.83333Z" fill="currentColor"></path>
                      <path d="M3.33333 3.83333C3.33333 3.55719 3.55719 3.33333 3.83333 3.33333H5.16667C5.44281 3.33333 5.66667 3.55719 5.66667 3.83333V5.16667C5.66667 5.44281 5.44281 5.66667 5.16667 5.66667H3.83333C3.55719 5.66667 3.33333 5.44281 3.33333 5.16667V3.83333Z" fill="currentColor"></path>
                      <path d="M6.66667 3.83333C6.66667 3.55719 6.89052 3.33333 7.16667 3.33333H8.5C8.77614 3.33333 9 3.55719 9 3.83333V5.16667C9 5.44281 8.77614 5.66667 8.5 5.66667H7.16667C6.89052 5.66667 6.66667 5.44281 6.66667 5.16667V3.83333Z" fill="currentColor"></path>
                      <path d="M0 7.16667C0 6.89052 0.223858 6.66667 0.5 6.66667H1.83333C2.10948 6.66667 2.33333 6.89052 2.33333 7.16667V8.5C2.33333 8.77614 2.10948 9 1.83333 9H0.5C0.223857 9 0 8.77614 0 8.5V7.16667Z" fill="currentColor"></path>
                      <path d="M3.33333 7.16667C3.33333 6.89052 3.55719 6.66667 3.83333 6.66667H5.16667C5.44281 6.66667 5.66667 6.89052 5.66667 7.16667V8.5C5.66667 8.77614 5.44281 9 5.16667 9H3.83333C3.55719 9 3.33333 8.77614 3.33333 8.5V7.16667Z" fill="currentColor"></path>
                      <path d="M6.66667 7.16667C6.66667 6.89052 6.89052 6.66667 7.16667 6.66667H8.5C8.77614 6.66667 9 6.89052 9 7.16667V8.5C9 8.77614 8.77614 9 8.5 9H7.16667C6.89052 9 6.66667 8.77614 6.66667 8.5V7.16667Z" fill="currentColor"></path>
                    </svg></a><a class="btn btn-phoenix-primary px-3" href="../../apps/project-management/project-card-view.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view"><svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z" fill="currentColor"></path>
                      <path d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z" fill="currentColor"></path>
                      <path d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z" fill="currentColor"></path>
                      <path d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z" fill="currentColor"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="table-responsive scrollbar">
              <table class="table fs-9 mb-0 border-top border-translucent">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="projectName" style="width:30%;">PROJECT NAME</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">ASSIGNESS</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">PROGRESS</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="statuses" style="width:10%;">STATUS</th>
                    <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                  </tr>
                </thead>
                <tbody class="list" id="project-list-table-body">
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Project Doughnut Dungeon</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/34.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/34.webp" alt="" /></div>
                                <h6 class="text-white">Jean Renoir</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/59.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/59.webp" alt="" /></div>
                                <h6 class="text-white">Katerina Karenin</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/35.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/35.webp" alt="" /></div>
                                <h6 class="text-white">Stanly Drinkwater</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/58.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/58.webp" alt="" /></div>
                                <h6 class="text-white">Igor Borvibson</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+2</span></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">May 21, 2028</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">287</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">145 / 145</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-success">completed</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Water resistant mosquito killer gun</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/1.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/1.webp" alt="" /></div>
                                <h6 class="text-white">Ricky Antony</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/2.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/2.webp" alt="" /></div>
                                <h6 class="text-white">Raymond Mims</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Mar 08, 2021</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Sep 15, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">125</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">148 / 223</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 66.3677130044843%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">inactive</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Execution of Micky the foul mouse</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/20.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/20.webp" alt="" /></div>
                                <h6 class="text-white">Emma Watson</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s">
                            <div class="avatar-name rounded-circle"><span>R</span></div>
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2">
                                  <div class="avatar-name rounded-circle"><span>R</span></div>
                                </div>
                                <h6 class="text-white">Raymond Mims</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/35.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/35.webp" alt="" /></div>
                                <h6 class="text-white">Stanly Drinkwater</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/58.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/58.webp" alt="" /></div>
                                <h6 class="text-white">Igor Borvibson</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Nov 17, 2020</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Sep 23, 2026</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">72</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">277 / 539</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 51.39146567717996%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-primary">ongoing</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Harnessing stupidity from Jerry</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/11.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/11.webp" alt="" /></div>
                                <h6 class="text-white">Roy Anderson</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/12.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/12.webp" alt="" /></div>
                                <h6 class="text-white">Luis Bunuel</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/13.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/13.webp" alt="" /></div>
                                <h6 class="text-white">Raymond Mims</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Jan 01, 2016</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Apr 04, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">91</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">169 / 394</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 42.89340101522843%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Critical</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Making the Butterflies shoot each other dead</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/14.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/14.webp" alt="" /></div>
                                <h6 class="text-white">Martina scorcese</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/16.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/16.webp" alt="" /></div>
                                <h6 class="text-white">Katerina Karenin</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/18.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/18.webp" alt="" /></div>
                                <h6 class="text-white">Martina scorcese</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/20.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/20.webp" alt="" /></div>
                                <h6 class="text-white">Emma Watson</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+3</span></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Dec 24, 2019</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Jan 15, 2024</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">134</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-primary">ongoing</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">The chewing gum attack</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/31.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/31.webp" alt="" /></div>
                                <h6 class="text-white">Martina scorcese</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/33.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/33.webp" alt="" /></div>
                                <h6 class="text-white">Luis Bunuel</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Aug 4, 2018</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Oct 22, 2023</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">24</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">600 / 600</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">Cancelled</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-8" href="#">Olga Dies Dreaming by Xóchitl González</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense"><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/11.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/11.webp" alt="" /></div>
                                <h6 class="text-white">Roy Anderson</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/12.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/12.webp" alt="" /></div>
                                <h6 class="text-white">Luis Bunuel</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div><a class="dropdown-toggle dropdown-caret-none d-inline-block" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                          <div class="avatar avatar-s  rounded-circle">
                            <img class="rounded-circle " src="images/team/13.webp" alt="" />
                          </div>
                        </a>
                        <div class="dropdown-menu avatar-dropdown-menu p-0 overflow-hidden" style="width: 320px;">
                          <div class="position-relative">
                            <div class="bg-holder z-n1" style="background-image:url(images/bg/bg-32.png);background-size: auto;"></div>
                            <!--/.bg-holder-->
                            <div class="p-3">
                              <div class="text-end"><button class="btn p-0 me-2"><span class="fa-solid fa-user-plus text-white"></span></button><button class="btn p-0"><span class="fa-solid fa-ellipsis text-white"></span></button></div>
                              <div class="text-center">
                                <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2 mb-2"><img class="rounded-circle border border-light-subtle" src="images/team/13.webp" alt="" /></div>
                                <h6 class="text-white">Raymond Mims</h6>
                                <p class="text-light text-opacity-50 fw-semibold fs-10 mb-2">@tyrion222</p>
                                <div class="d-flex flex-center mb-3">
                                  <h6 class="text-white mb-0">224 <span class="fw-normal text-light text-opacity-75">connections</span></h6><span class="fa-solid fa-circle text-body-tertiary mx-1" data-fa-transform="shrink-10 up-2"></span>
                                  <h6 class="text-white mb-0">23 <span class="fw-normal text-light text-opacity-75">mutual</span></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-body-emphasis">
                            <div class="p-3 border-bottom border-translucent">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex"><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-phone"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg me-2"><span class="fa-solid fa-message"></span></button><button class="btn btn-phoenix-secondary btn-icon btn-icon-lg"><span class="fa-solid fa-video"></span></button></div><button class="btn btn-phoenix-primary"><span class="fa-solid fa-envelope me-2"></span>Send Email</button>
                              </div>
                            </div>
                            <ul class="nav d-flex flex-column py-3 border-bottom">
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body d-inline-block" data-feather="clipboard"></span><span class="text-body-highlight flex-1">Assigned Projects</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                              <li class="nav-item"><a class="nav-link px-3 d-flex flex-between-center" href="#!"> <span class="me-2 text-body" data-feather="pie-chart"></span><span class="text-body-highlight flex-1">View activiy</span><span class="fa-solid fa-chevron-right fs-11"></span></a></li>
                            </ul>
                          </div>
                          <div class="p-3 d-flex justify-content-between"><a class="btn btn-link p-0 text-decoration-none" href="#!">Details </a><a class="btn btn-link p-0 text-decoration-none text-danger" href="#!">Unassign </a></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Jan 01, 2018</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs-9 text-body">Jan 04, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-body fs-9 mb-0">80</p>
                    </td>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-body-secondary fs-10 mb-0">150 / 294</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 51.02040816326531%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span class="badge badge-phoenix fs-10 badge-phoenix-danger">Critical</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs-9 border-bottom border-translucent">
              <div class="d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              </div>
              <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-body-tertiary text-opacity-85">v1.14.0</p>
            </div>
          </div>
        </footer>
      </div>
      <div class="support-chat-container">
        <div class="container-fluid support-chat">
          <div class="card bg-body-emphasis">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom border-translucent">
              <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs-11"></span></h5>
              <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-body"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
              </div>
            </div>
            <div class="card-body chat p-0">
              <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a><a class="false d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                    <p class="mb-0 fw-semibold fs-9">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                  </a></div>
                <div class="text-center mt-auto">
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="images/team/30.webp" alt="" /></div>
                  <h5 class="mt-2 mb-3">Eric</h5>
                  <p class="text-center text-body-emphasis mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top border-translucent ps-3 pe-4 py-3">
              <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs-9 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs-9"></span></button>
            </div>
          </div>
        </div><button class="btn p-0 border border-translucent btn-support-chat"><span class="fs-8 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs-9 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-7"></span></button>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
            <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
      </div>
      <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
          <h5 class="setting-panel-item-title">Color Scheme</h5>
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="images/default-light.png" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="images/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="images/auto.png" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">RTL </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Change text direction</p>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Toggle support chat</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Navigation Type</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="images/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="images/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="images/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="images/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="images/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="images/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="images/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="images/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="images/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="images/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="images/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="images/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="images/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="images/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="images/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="images/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="images/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="images/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="images/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="images/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    


  <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/anchor.min.js"></script>
    <script src="js/is.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="js/list.min.js"></script>
    <script src="js/feather.min.js"></script>
    <script src="js/dayjs.min.js"></script>
    <script src="js/phoenix.js"></script>


  </body>

  
</html>