
<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Project Management System</title>

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
    <link href="css/choices.min.css" rel="stylesheet">
    <link href="css/dhtmlxgantt.css" rel="stylesheet">
    <link href="css/flatpickr.min.css" rel="stylesheet">
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
     <?php include('top-nav/top-nav.php');?>
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
<!--start Content of The report  -->
        <div class="content">

        <div class="row g-4">
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Number of Project </h4>
                        <p class="card-text">1</p>
                    </div>
                    </div>
            </div>  
            
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Completed Projects </h4>
                        <p class="card-text">1</p>
                    </div>
                    </div>
            </div>  

            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Continuinig Projects </h4>
                        <p class="card-text">0</p>
                    </div>
                    </div>
            </div>  

            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Stopped Project </h4>
                        <p class="card-text">0</p>
                    </div>
                    </div>
            </div>  
            
            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Start Date </h4>
                        <p class="card-text">26 May 2023</p>
                    </div>
                    </div>
            </div>  

            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Estimated End Date </h4>
                        <p class="card-text">26 May 2024</p>
                    </div>
                    </div>
            </div>  

            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Estimated project duration </h4>
                        <p class="card-text">1 Year</p>
                    </div>
                    </div>
            </div>  

            <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-dark bg-light">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Estimated budget</h4>
                        <p class="card-text">0</p>
                    </div>
                    </div>
            </div>  
            
        
         </div>
         <?php include('footer.php')?>     
        </div>
<!--end Content of The report  -->
    <?php include('mainchat.php')?>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


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
    <script src="js/choices.min.js"></script>
    <script src="js/echarts.min.js"></script>
    <script src="js/dhtmlxgantt.js"></script>
    <script src="js/flatpickr.min.js"></script>
    <script src="js/phoenix.js"></script>
    <script src="js/projectmanagement-dashboard.js"></script>

  </body>
  
</html>