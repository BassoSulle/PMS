
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
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>
    <script src="../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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
            <a class="navbar-brand me-1 me-sm-3" href="../index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
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
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-body">
                        <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                      <div class="avatar avatar-l  me-2 text-body">
                        <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                        <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                      </div>
                    </a>
                  </div>
                  <hr class="my-0" />
                  <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
            <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                            <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                    <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                          <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                        </a></div>
                      <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
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
                        <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
          <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
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
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
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
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item active" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
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
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
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
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
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
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
          <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
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
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
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
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item active" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
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
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
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
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
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
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
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
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
          <a class="navbar-brand me-1 me-sm-3" href="../index.html">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
              </div>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
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
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
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
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item active" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
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
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
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
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
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
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l ">
                <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
              <div class="card position-relative border-0">
                <div class="card-body p-0">
                  <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
          <a class="navbar-brand navbar-brand" href="../index.html">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
        </div>
        <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
          <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/project-management.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                  </a></li>
                <li><a class="dropdown-item" href="../dashboard/crm.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                  </a></li>
                <li><a class="dropdown-item" href="../apps/social/feed.html">
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
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
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
                    <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deals.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/leads.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item active" href="../apps/chat.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/email/inbox.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/email/compose.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../apps/social/profile.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../apps/social/settings.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../apps/calendar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                  </a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../pages/starter.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/landing/default.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../pages/notifications.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/members.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                  </a></li>
                <li><a class="dropdown-item" href="../pages/timeline.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                  </a></li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../pages/errors/404.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/403.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../pages/errors/500.html">
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
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                          </a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                          </a></li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
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
                    <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/darknav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/navbar-top.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../demo/dual-nav.html">
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
                        </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Icons</h6>
                        </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">ECharts</h6>
                        </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Components</h6>
                        </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                        <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Tables</h6>
                        </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                        <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                          <h6 class="dropdown-item-title">Utilities</h6>
                        </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
              <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../documentation/getting-started.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                  </a></li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/color.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                      </a></li>
                  </ul>
                </li>
                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                      </a></li>
                    <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                      </a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="../documentation/gulp.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                  </a></li>
                <li><a class="dropdown-item" href="../documentation/design-file.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                  </a></li>
                <li><a class="dropdown-item" href="../changelog.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                  </a></li>
                <li><a class="dropdown-item" href="../showcase.html">
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                          <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                  <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                        <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                      </a></div>
                    <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
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
                      <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
              <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="27" />
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
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                        <div class="avatar avatar-l status-online  me-2 text-body">
                          <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                        <div class="avatar avatar-l  me-2 text-body">
                          <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                          <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                        </div>
                      </a>
                    </div>
                    <hr class="my-0" />
                    <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                    <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
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
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/30.webp" alt="" /></div>
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
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/40x40/avatar.webp" alt="" /></div>
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
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/57.webp" alt="" /></div>
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
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/59.webp" alt="" /></div>
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
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../assets/img/team/40x40/58.webp" alt="" /></div>
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
                      <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
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
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/behance.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-cloud.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/slack.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/gitlab.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/bitbucket.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-drive.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/trello.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/figma.webp" alt="" width="20" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/twitter.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/ln.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="../assets/img/nav-icons/spotify.webp" alt="" width="30" />
                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l ">
                    <img class="rounded-circle " src="../assets/img/team/40x40/57.webp" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                  <div class="card position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle " src="../assets/img/team/72x72/57.webp" alt="" />
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
                  <li><a class="dropdown-item" href="../index.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>E commerce</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../dashboard/project-management.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clipboard"></span>Project management</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../dashboard/crm.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="phone"></span>CRM</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../apps/social/feed.html">
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
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/add-product.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add product</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/products.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/customers.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customers</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/customer-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Customer details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/orders.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Orders</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/order-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/admin/refund.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Refund</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="customer" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Customer</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/homepage.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Homepage</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Product details</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/products-filter.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Products filter</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/cart.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Cart</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/checkout.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Checkout</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/shipping-info.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Shipping info</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/profile.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/favourite-stores.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Favourite stores</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/wishlist.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Wishlist</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/order-tracking.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Order tracking</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../apps/e-commerce/landing/invoice.html">
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
                      <li><a class="dropdown-item" href="../apps/crm/analytics.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Analytics</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/deals.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deals</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/deal-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Deal details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/leads.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Leads</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/lead-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lead details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/reports.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/reports-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reports details</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/crm/add-contact.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Add contact</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="project-management" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="clipboard"></span>Project management</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/project-management/create-new.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create new</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-list-view.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project list view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-card-view.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project card view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-board-view.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project board view</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/todo-list.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Todo list</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/project-management/project-details.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Project details</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item active" href="../apps/chat.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="message-square"></span>Chat</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="email" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="mail"></span>Email</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/email/inbox.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Inbox</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/email/email-detail.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Email detail</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/email/compose.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Compose</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="events" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="bookmark"></span>Events</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/events/create-an-event.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create an event</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/events/event-detail.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Event detail</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="kanban" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="trello"></span>Kanban</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/kanban/kanban.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Kanban</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/kanban/boards.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Boards</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/kanban/create-kanban-board.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Create board</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="social" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="share-2"></span>Social</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../apps/social/profile.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Profile</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../apps/social/settings.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Settings</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../apps/calendar.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="calendar"></span>Calendar</div>
                    </a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Pages</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../pages/starter.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Starter</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Faq</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq accordion</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Faq tab</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Landing</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/landing/default.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Pricing</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing column</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing grid</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../pages/notifications.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="bell"></span>Notifications</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../pages/members.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="users"></span>Members</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../pages/timeline.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Timeline</div>
                    </a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="alert-triangle"></span>Errors</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../pages/errors/404.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>404</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/errors/403.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>403</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../pages/errors/500.html">
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
                          <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Split</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA</div>
                            </a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                          <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Card</span></div>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                              <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen</div>
                            </a></li>
                          <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
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
                      <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical sidenav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/dark-mode.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sidenav collapse</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/darknav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Darknav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/topnav-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Topnav slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/navbar-top-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/navbar-top.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Navbar top</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/horizontal-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/combo-nav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/combo-nav-slim.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo nav slim</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../demo/dual-nav.html">
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
                          </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Icons</h6>
                          </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">ECharts</h6>
                          </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Components</h6>
                          </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                          <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Tables</h6>
                          </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                          <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                            <h6 class="dropdown-item-title">Utilities</h6>
                          </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Documentation</a>
                <ul class="dropdown-menu navbar-dropdown-caret">
                  <li><a class="dropdown-item" href="../documentation/getting-started.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Getting started</div>
                    </a></li>
                  <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Customization</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Configuration</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/styling.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Styling</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/color.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Color</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/dark-mode.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dark mode</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/customization/plugin.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Plugin</div>
                        </a></li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                      <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Layouts doc</span></div>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Vertical navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Horizontal navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/layouts/combo-navbar.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Combo navbar</div>
                        </a></li>
                      <li><a class="dropdown-item" href="../documentation/layouts/dual-nav.html">
                          <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Dual nav</div>
                        </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="../documentation/gulp.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Gulp</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../documentation/design-file.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="figma"></span>Design file</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../changelog.html">
                      <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="git-merge"></span>Changelog</div>
                    </a></li>
                  <li><a class="dropdown-item" href="../showcase.html">
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
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Products</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                          <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../assets/img/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Air - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../apps/e-commerce/landing/product-details.html">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="../assets/img/products/60x60/3.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">MacBook Pro - 13″</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Quick Links</h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-link text-body" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Files</h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-solid fa-file-zipper text-body" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-file-lines text-body" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"> <span class="fa-solid fa-image text-body" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Members</h6>
                      <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                          <div class="avatar avatar-l status-online  me-2 text-body">
                            <img class="rounded-circle " src="../assets/img/team/40x40/10.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">Carry Anna</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">anna@technext.it</p>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 d-flex align-items-center" href="../pages/members.html">
                          <div class="avatar avatar-l  me-2 text-body">
                            <img class="rounded-circle " src="../assets/img/team/40x40/12.webp" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 text-body-highlight title">John Smith</h6>
                            <p class="fs-10 mb-0 d-flex text-body-tertiary">smith@technext.it</p>
                          </div>
                        </a>
                      </div>
                      <hr class="my-0" />
                      <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Related Searches</h6>
                      <div class="py-2"><a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
                          <div class="d-flex align-items-center">
                            <div class="fw-normal text-body-highlight title"><span class="fa-brands fa-firefox-browser text-body" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                          </div>
                        </a>
                        <a class="dropdown-item" href="../apps/e-commerce/landing/product-details.html">
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
        <div class="chat d-flex phoenix-offcanvas-container pt-1 mt-n1 mb-9">
          <div class="card p-3 p-xl-1 mt-xl-n1 chat-sidebar me-3 phoenix-offcanvas phoenix-offcanvas-start" id="chat-sidebar"><button class="btn d-none d-sm-block d-xl-none mb-2" data-bs-toggle="modal" data-bs-target="#chatSearchBoxModal"><span class="fa-solid fa-magnifying-glass text-body-tertiary text-opacity-85 fs-7"></span></button>
            <div class="d-none d-sm-block d-xl-none mb-5"><button class="btn w-100 mx-auto" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-bars text-body-tertiary text-opacity-85 fs-7"></span></button>
              <ul class="dropdown-menu dropdown-menu-end p-0">
                <li><a class="dropdown-item" href="#!">All</a></li>
                <li><a class="dropdown-item" href="#!">Read</a></li>
                <li><a class="dropdown-item" href="#!">Unread</a></li>
              </ul>
            </div>
            <div class="form-icon-container mb-4 d-sm-none d-xl-block"><input class="form-control form-icon-input" type="text" placeholder="People, Groups and Messages" /><span class="fas fa-user text-body fs-9 form-icon"></span></div>
            <ul class="nav nav-phoenix-pills mb-5 d-sm-none d-xl-flex" id="contactListTab" data-chat-thread-tab="data-chat-thread-tab" role="tablist">
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer active" data-bs-toggle="tab" data-chat-thread-list="all" role="tab" aria-selected="true">All</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer" data-bs-toggle="tab" role="tab" data-chat-thread-list="read" aria-selected="false">Read</a></li>
              <li class="nav-item" role="presentation"><a class="nav-link cursor-pointer" data-bs-toggle="tab" role="tab" data-chat-thread-list="unread" aria-selected="false">Unread</a></li>
            </ul>
            <div class="scrollbar">
              <div class="tab-content" id="contactListTabContent">
                <div data-chat-thread-tab-content="data-chat-thread-tab-content">
                  <ul class="nav chat-thread-tab flex-column list">
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  active" data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-1" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/20.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Sharuka Nijibum</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Just now</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">This is a message from you</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-2" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/29.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Urito Nisemuno</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 11 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Say Hi to your new friend now</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-3" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Xiang Ledepisipang</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">We can also discuss prese....</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item unread" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2 unread " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-4" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/25.webp" alt="" /><span class="bg-primary rounded-circle top-0 end-0 position-absolute text-white d-flex flex-center fs-10 fw-semibold d-none d-sm-flex d-xl-none lh-1" style="height: 1rem; width: 1rem;">3</span></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Abshini Thipano</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">WHAT!</p><span class="badge badge-phoenix badge-phoenix-primary px-1 unread-badge">3+</span>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-5" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/15.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Nenko Nimitanip</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 9 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Nenko sent an attachment</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item unread" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2 unread " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-6" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/59.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Shanito Bistroglini</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 1 PM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">https://youtu.be/dQw4w9WgXcQ</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-7" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Misthoni Trepalnano</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 11 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">You shared an album</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-8" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/1.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Zogidi Lishang</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Reacted ❤️ to your photo</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-9" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/6.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Nonteporano Lepat</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-10" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/60.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Jessica Ball</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a></li>
                    <li class="nav-item read" role="presentation"><a class="nav-link d-flex align-items-center justify-content-center p-2  " data-bs-toggle="tab" data-chat-thread="data-chat-thread" href="#tab-thread-11" role="tab" aria-selected="true">
                        <div class="avatar avatar-xl status-online position-relative me-2 me-sm-0 me-xl-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/57.webp" alt="" /></div>
                        <div class="flex-1 d-sm-none d-xl-block">
                          <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-body fw-normal name text-nowrap">Harley Brown</h5>
                            <p class="fs-10 text-body-tertiary text-opacity-85 mb-0 text-nowrap">Yesterday, 10 AM</p>
                          </div>
                          <div class="d-flex justify-content-between">
                            <p class="fs-9 mb-0 line-clamp-1 text-body-tertiary text-opacity-85 message">Thanks for understanding. I will forever be in debt</p>
                          </div>
                        </div>
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-content tab-content flex-1">
            <div class="tab-pane h-100 fade active show" id="tab-thread-1" role="tabpanel" aria-labelledby="tab-thread-1">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-0"><span class="line-clamp-1">Sharuka Nijibum</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">I have got a date at a quarter to eight; I’ll see you at the gate, so don’t be late.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">This is a message from you</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">You know New York, you need New York, you know you need a unique New York.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Willie’s really weary.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Eddie edited it.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2 w-min-content">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Yes, in an organization stature</p><a href="../assets/img/chat/1.png" data-gallery="gallery-undefined"><img class="rounded-2 fit-cover mt-1" src="../assets/img/chat/1.png" alt="" style="max-width: 200px;" /></a>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">If Peter Piper picked a peck of pickled peppers, where’s the peck of pickled peppers Peter Piper picked?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/20.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Peter Piper picked a peck of pickled peppers. A peck of pickled peppers Peter Piper picked.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-0"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-0" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-0"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-0" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-0">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/20.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Sharuka Nijibum</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-2" role="tabpanel" aria-labelledby="tab-thread-2">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-1"><span class="line-clamp-1">Urito Nisemuno</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">However, the shot Shott shot shot not Shott, but Nott.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/29.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">But if the shot Shott shot shot Shott, then Shott was shot, not Nott.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">If the shot Shott shot shot Nott, Nott was shot.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/29.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">But Shott says he shot Nott. Either the shot Shott shot at Nott was not shot, Or Nott was shot.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Some say Nott was not shot. But Shott says he shot Nott.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content gallery" data-bs-theme="light">
                              <p class="mb-0"></p>
                              <div class="row g-2 mt-0">
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/13.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/13.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/2.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/2.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/3.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/3.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/4.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/4.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/5.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/5.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/6.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/6.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/7.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/7.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/8.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/8.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/9.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/9.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/10.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/10.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/11.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/11.png" alt="" /></a></div>
                                <div class="col-6 col-md-4 ol-xl-2 col-xl-3"><a href="../assets/img/chat/12.png" data-gallery="gallery-undefined"> <img class="rounded-2 fit-cover img-fluid" src="../assets/img/chat/12.png" alt="" /></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/29.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Ned Nott was shot and Sam Shott was not. So it is better to be Shott than Nott.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-1"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-1" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-1"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-1" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-1">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/29.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Urito Nisemuno</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-3" role="tabpanel" aria-labelledby="tab-thread-3">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-2"><span class="line-clamp-1">Xiang Ledepisipang</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/30.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">A tree-toad loved a she-toad who lived up in a tree. He was a two-toed tree-toad, but a three-toed toad was she. The two-toed tree-toad tried to win the three-toed she-toad’s heart, for the two-toed tree-toad loved the ground that the three-toed tree-toad trod. But the two-toed tree-toad tried in vain; he couldn’t please her whim. From her tree-toad bower, with her three-toed power, the she-toad vetoed him.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-2"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-2" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-2"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-2" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-2">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Xiang Ledepisipang</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-4" role="tabpanel" aria-labelledby="tab-thread-4">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-3"><span class="line-clamp-1">Abshini Thipano</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">An anchor, right?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">A cold. But what do you throw out when you want to use it but take in when you don’t want to use it?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Well tell me what I am if I can never be thrown but I can be caught. Ways to lose me are always being sought.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">A coin, or what?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">A river. But I have a head and a tail that will never meet. Having too many of me is always a treat. What am I?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">What runs, but never walks. Murmurs, but never talks. Has a bed, but never sleeps. And has a mouth, but never eats?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/25.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Hello, I’m Doctor Triple A! How can I help?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-3"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-3" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-3"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-3" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-3">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/25.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Abshini Thipano</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-5" role="tabpanel" aria-labelledby="tab-thread-5">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-4"><span class="line-clamp-1">Nenko Nimitanip</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">When a doctor doctors a doctor, does the doctor doing the doctoring doctor as the doctor being doctored wants to be doctored or does the doctor doing the doctoring doctor as he wants to doctor?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-4"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-4" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-4"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-4" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-4">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/15.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Nenko Nimitanip</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-6" role="tabpanel" aria-labelledby="tab-thread-6">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-5"><span class="line-clamp-1">Shanito Bistroglini</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/59.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Well… check the attached file for answer, man!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">When a doctor doctors a doctor, does the doctor doing the doctoring doctor as the doctor being doctored wants to be doctored or does the doctor doing the doctoring doctor as he wants to doctor?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-5"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-5" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-5"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-5" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-5">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/59.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Shanito Bistroglini</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-7" role="tabpanel" aria-labelledby="tab-thread-7">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-6"><span class="line-clamp-1">Misthoni Trepalnano</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">So See’s saw sawed Soar’s seesaw. But it was sad to see Soar so sore just because See’s saw sawed Soar’s seesaw.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Had Soar seen See’s saw before See sawed Soar’s seesaw, See’s saw would not have sawed Soar’s seesaw.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Mr. See owned a saw. And Mr. Soar owned a seesaw. Now, See’s saw sawed Soar’s seesaw before Soar saw See, which made Soar sore.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-6"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-6" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-6"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-6" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-6">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle avatar-placeholder" src="../assets/img/team/avatar.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Misthoni Trepalnano</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-8" role="tabpanel" aria-labelledby="tab-thread-8">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-7"><span class="line-clamp-1">Zogidi Lishang</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/1.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Brisk brave brigadiers brandished broad bright blades, blunderbusses, and bludgeons—balancing them badly.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Ingenious iguanas improvising an intricate impromptu on impossibly-impractical instruments.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Green glass globes glow greenly.</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/1.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">I slit the sheet, the sheet I slit, and on the slitted sheet I sit.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Perspicacious Polly Perkins purchased Peter’s product and peddled pickles to produce a pretty profit!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-7"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-7" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-7"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-7" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-7">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/1.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Zogidi Lishang</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-9" role="tabpanel" aria-labelledby="tab-thread-9">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-8"><span class="line-clamp-1">Nonteporano Lepat</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">The longest book title is made up of 3,777 words. I don’t wanna write it down for you, go find it!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/6.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Well…no?</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Well… I know a uniquely long title. Do you know which has it?</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/6.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Victor Hugo’s &quot;Les Miserables&quot; contains an 823 word sentence, and hopefully no one elese will write longer to break the record.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0"> I dunno! Guess ‘tis not easy to read and count the words!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/6.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">which book do you remember to have the longest possible sentence? </p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-8"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-8" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-8"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-8" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-8">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/6.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Nonteporano Lepat</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-10" role="tabpanel" aria-labelledby="tab-thread-10">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-9"><span class="line-clamp-1">Jessica Ball</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/60.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Cows kill more people than sharks!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Whaat?!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/60.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Hard to believe, but true. Sharks kill an average of 5 people per year while cows kill an average of 22 people per year.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">But in fact, humans are more deadly to sharks than they are to humans. Humans kill about 100 million sharks per year!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/60.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Also, what?!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-9"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-9" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-9"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-9" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-9">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/60.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Jessica Ball</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane h-100 fade" id="tab-thread-11" role="tabpanel" aria-labelledby="tab-thread-11">
              <div class="card flex-1 h-100 phoenix-offcanvas-container">
                <div class="card-header p-3 p-md-4 d-flex flex-between-center">
                  <div class="d-flex align-items-center"><button class="btn ps-0 pe-2 text-body-tertiary d-sm-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#chat-sidebar"><span class="fa-solid fa-chevron-left"></span></button>
                    <div class="d-flex flex-column flex-md-row align-items-md-center"><button class="btn fs-7 fw-semibold text-body-emphasis d-flex align-items-center p-0 me-3 text-start" data-phoenix-toggle="offcanvas" data-phoenix-target="#thread-details-10"><span class="line-clamp-1">Harley Brown</span><span class="fa-solid fa-chevron-down ms-2 fs-10"></span></button>
                      <p class="fs-9 mb-0 me-2"> <span class="fa-solid fa-circle text-success fs-11 me-2"></span>Active now</p>
                    </div>
                  </div>
                  <div class="d-flex"><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-phone"></span></button><button class="btn btn-icon btn-primary me-1"><span class="fa-solid fa-video"></span></button><button class="btn btn-icon btn-phoenix-primary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis-vertical"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                      <li><a class="dropdown-item" href="#!">Add to favourites</a></li>
                      <li><a class="dropdown-item" href="#!">View profile</a></li>
                      <li><a class="dropdown-item" href="#!">Report</a></li>
                      <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-3 p-sm-4 scrollbar">
                  <!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">OMG! I should leave my dietitian and ask for some advice from the Sun God then!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">And the Sun loses a billion kilos per second.</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">And know what I heard? Neptune has only completed one orbit around the Sun since its discovery!</p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Oh yeah! It contains enough alcohol to supply every person on the planet with 300,000 pints of beer per day for the next billion years!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div><!-- need to check chat message content-->
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 justify-content-end flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex flex-end-center hover-actions-trigger">
                          <div class="d-sm-none hover-actions align-self-center me-2 start-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-pen-to-square text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                          <div class="chat-message-content me-2">
                            <div class="mb-1 sent-message-content bg-primary rounded-2 p-3 text-white" data-bs-theme="light">
                              <p class="mb-0">Really?! </p>
                            </div>
                          </div>
                        </div>
                        <div class="text-end">
                          <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold">Yesterday, 10 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex chat-message">
                    <div class="d-flex mb-2 flex-1">
                      <div class="w-100 w-xxl-75">
                        <div class="d-flex hover-actions-trigger">
                          <div class="avatar avatar-m me-3 flex-shrink-0"><img class="rounded-circle" src="../assets/img/team/57.webp" alt="" /></div>
                          <div class="chat-message-content received me-2">
                            <div class="mb-1 received-message-content border rounded-2 p-3">
                              <p class="mb-0">Clouds at the centre of the Milky Way smell of rum, taste of raspberries and are packed with booze!</p>
                            </div>
                          </div>
                          <div class="d-none d-sm-flex">
                            <div class="hover-actions position-relative align-self-center me-2"><button class="btn p-2 fs-10"><span class="fa-solid fa-reply"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-trash"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-share"></span></button><button class="btn p-2 fs-10"><span class="fa-solid fa-face-smile"></span></button></div>
                          </div>
                          <div class="d-sm-none hover-actions align-self-center me-2 end-0">
                            <div class="bg-body-emphasis rounded-pill d-flex align-items-center border px-2 actions"><button class="btn p-2" type="button"><span class="fa-solid fa-reply text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-trash text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-share text-primary"></span></button><button class="btn p-2" type="button"><span class="fa-solid fa-face-smile text-primary"></span></button></div>
                          </div>
                        </div>
                        <p class="mb-0 fs-10 text-body-tertiary text-opacity-85 fw-semibold ms-7">Yesterday, 10 AM</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="chat-textarea outline-none scrollbar mb-1" contenteditable="true"></div>
                  <div class="d-flex justify-content-between align-items-end">
                    <div><button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo"><span class="fa-regular fa-face-smile"></span></button><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-10"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="chatPhotos-10" /><label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-10"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="chatAttachment-10" /><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-microphone"></span></button><button class="btn btn-link py-0 px-2 text-body fs-9"><span class="fa-solid fa-ellipsis"></span></button></div>
                    <div><button class="btn btn-primary fs-10" type="button">Send<span class="fa-solid fa-paper-plane ms-1"></span></button></div>
                  </div>
                </div>
                <div class="phoenix-offcanvas phoenix-offcanvas-top h-100 w-100 bg-body-emphasis scrollbar z-index-0 rounded" id="thread-details-10">
                  <div class="border-bottom border-translucent p-4">
                    <div class="d-flex flex-between-center"><button class="btn p-0" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-chevron-left text-body-tertiary"></span></button><button class="btn p-0 btn-reveal dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-v text-body-tertiary"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center">
                      <div class="avatar avatar-4xl mb-2"><img class="rounded-circle border border-2 border-light-subtle" src="../assets/img/team/57.webp" alt="" /></div>
                      <h4 class="fw-semibold mb-3">Harley Brown</h4>
                      <div class="d-flex"><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-phone"></span></button><button class="btn btn-primary btn-icon fs-10 me-1"><span class="fas fa-video"></span></button><button class="btn btn-phoenix-secondary btn-icon fs-10"><span class="fas fa-search"></span></button></div>
                    </div>
                  </div>
                  <div class="p-4 px-sm-5 scrollbar"><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-user-pen me-3"></span>Nickname</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-palette me-3"></span>Change Color</button><button class="btn d-block p-0 fw-semibold mb-5"><span class="fa-solid fa-user-plus me-3"></span>Create Group Chat</button>
                    <div class="d-flex mb-5"><span class="fa-solid fa-photo-film me-3 fs-9"></span>
                      <div>
                        <h6 class="fw-semibold mb-2">Shared Media</h6>
                        <div class="row g-2">
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/3.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/3.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/4.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/4.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/5.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/5.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/6.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/6.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/7.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/7.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/8.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/8.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/9.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/9.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/10.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/10.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/11.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/11.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/12.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/12.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/13.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/13.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/14.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/14.png" alt="" height="100" width="100" /></a></div>
                          <div class="col-auto"><a href="../assets/img/chat/2.png" data-gallery="gallery"> <img class="fit-cover rounded-2 bg-body-secondary-hover" src="../assets/img/chat/2.png" alt="" height="100" width="100" /></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-5">
                      <div class="d-flex"><span class="fa-solid fa-folder me-3 fs-9"></span>
                        <div class="flex-1">
                          <h6 class="fw-semibold border-bottom border-translucent pb-2 mb-0">Shared Files</h6>
                          <div class="mb-2">
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-zipper"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">zip</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Federico_godarf_design.zip</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">53.34 MB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 8, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-code"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">bat</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Restart_lyf.bat</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-lines"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">txt</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Fake lorem ipsum fr fr.txt</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                            <div class="border-bottom border-translucent d-flex align-items-center justify-content-between"><a class="text-decoration-none d-flex align-items-center py-3" href="#!">
                                <div class="btn-icon btn-icon-lg border rounded-3 text-body-quaternary flex-column me-2"><span class="fs-8 mb-1 fa-solid fa-file-circle-exclamation"></span>
                                  <p class="mb-0 fs-10 fw-bold lh-1">mad</p>
                                </div>
                                <div class="flex-1">
                                  <h6 class="text-body line-clamp-1">Unsupported file format.mad</h6>
                                  <div class="d-flex align-items-center lh-1">
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">11.13 KB</p><span class="fa-solid fa-circle text-body-quaternary fs-10" data-fa-transform="shrink-12"></span>
                                    <p class="fs-10 mb-0 text-body-tertiary fw-semibold">Dec 2, 2011</p>
                                  </div>
                                </div>
                              </a><button class="btn p-0"><span class="fa-regular fa-arrow-alt-circle-down fs-8 text-body-tertiary"></span></button></div>
                          </div><a class="btn btn-link fs-10 p-0" href="#!">See 19 more <span class="fa-solid fa-chevron-down ms-1"></span></a>
                        </div>
                      </div>
                    </div><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-bell-slash me-3"></span>Mute Conversation</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-gear me-3"></span>Manage Settings</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-hand-holding-heart me-3"></span>Get help</button><button class="btn d-block p-0 fw-semibold mb-3"><span class="fa-solid fa-flag me-3"></span>Report Account</button><button class="btn d-block p-0 fw-semibold"><span class="fa-solid fa-ban me-3"></span>Block Account</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop="data-phoenix-backdrop" style="top: 0;"></div>
          <div class="modal fade" id="chatSearchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
              <div class="modal-content mt-15">
                <div class="modal-body p-0">
                  <div class="chat-search-box">
                    <div class="form-icon-container"><input class="form-control py-3 form-icon-input rounded-1" type="text" autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span class="fa-solid fa-magnifying-glass fs-9 form-icon"></span></div>
                  </div>
                </div>
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
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-light-subtle" src="../assets/img/team/30.webp" alt="" /></div>
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
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../assets/img/generic/auto.png" alt=""/></span><span class="label-text"> Auto</span></label></div>
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
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
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
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../vendors/feather-icons/feather.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/glightbox/glightbox.min.js"></script>
    <script src="https://unpkg.com/picmo@5.7.6/dist/umd/index.js"></script>
    <script src="https://unpkg.com/@picmo/popup-picker@5.7.6/dist/umd/index.js"></script>
    <script src="../vendors/lottie/lottie.min.js"></script>
    <script src="../assets/js/phoenix.js"></script>
  </body>

</html>