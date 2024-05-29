
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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.13/index.global.min.js"></script>

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
      <div class="content">
      <div class="row gy-3 mb-6 justify-content-between">
        <div data-calendar="{&quot;events&quot;:[{&quot;title&quot;:&quot;Bootcamp&quot;,&quot;start&quot;:&quot;2024-05-07&quot;}]}" class="fc fc-media-screen fc-direction-ltr fc-theme-standard fc-liquid-hack">
          <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
              <div class="fc-toolbar-chunk">
                <div class="fc-button-group"><button type="button" title="Previous Month" aria-pressed="false" class="fc-prev-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-left" role="img"></span></button><button type="button" title="Next Month" aria-pressed="false" class="fc-next-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-right" role="img"></span></button></div>
                <button type="button" title="This Month" disabled="" aria-pressed="false" class="fc-today-button fc-button fc-button-primary">Today</button>
              </div>
              <div class="fc-toolbar-chunk">
                <h2 class="fc-toolbar-title" id="fc-dom-1">May 2024</h2>
              </div>
              <div class="fc-toolbar-chunk">
                <div class="fc-button-group"><button type="button" title="Month view" aria-pressed="true" class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">Month</button><button type="button" title="Week view" aria-pressed="false" class="fc-timeGridWeek-button fc-button fc-button-primary">Week</button><button type="button" title="Day view" aria-pressed="false" class="fc-timeGridDay-button fc-button fc-button-primary">Day</button></div>
              </div>
            </div>
          <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 1137.78px;">
              <div class="fc-dayGridMonth-view fc-view fc-daygrid">
                <table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid">
                    <tbody role="rowgroup">
                      <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                          <th role="presentation">
                            <div class="fc-scroller-harness">
                                <div class="fc-scroller" style="overflow: hidden;">
                                  <table role="presentation" class="fc-col-header " style="width: 1533px;">
                                      <colgroup></colgroup>
                                      <thead role="presentation">
                                        <tr role="row">
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday" class="fc-col-header-cell-cushion">Sun</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Monday" class="fc-col-header-cell-cushion">Mon</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Tuesday" class="fc-col-header-cell-cushion">Tue</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Wednesday" class="fc-col-header-cell-cushion">Wed</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Thursday" class="fc-col-header-cell-cushion">Thu</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Friday" class="fc-col-header-cell-cushion">Fri</a></div>
                                            </th>
                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat">
                                              <div class="fc-scrollgrid-sync-inner"><a aria-label="Saturday" class="fc-col-header-cell-cushion">Sat</a></div>
                                            </th>
                                        </tr>
                                      </thead>
                                  </table>
                                </div>
                            </div>
                          </th>
                      </tr>
                      <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                          <td role="presentation">
                            <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;">
                                  <div class="fc-daygrid-body fc-daygrid-body-unbalanced " style="width: 1533px;">
                                      <table role="presentation" class="fc-scrollgrid-sync-table" style="width: 1533px; height: 1086px;">
                                        <colgroup></colgroup>
                                        <tbody role="presentation">
                                            <tr role="row">
                                              <td aria-labelledby="fc-dom-2" role="gridcell" data-date="2024-04-28" class="fc-day fc-day-sun fc-day-past fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="April 28, 2024" id="fc-dom-2" class="fc-daygrid-day-number">28</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-4" role="gridcell" data-date="2024-04-29" class="fc-day fc-day-mon fc-day-past fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="April 29, 2024" id="fc-dom-4" class="fc-daygrid-day-number">29</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-6" role="gridcell" data-date="2024-04-30" class="fc-day fc-day-tue fc-day-past fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="April 30, 2024" id="fc-dom-6" class="fc-daygrid-day-number">30</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-8" role="gridcell" data-date="2024-05-01" class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 1, 2024" id="fc-dom-8" class="fc-daygrid-day-number">1</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-10" role="gridcell" data-date="2024-05-02" class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 2, 2024" id="fc-dom-10" class="fc-daygrid-day-number">2</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-12" role="gridcell" data-date="2024-05-03" class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 3, 2024" id="fc-dom-12" class="fc-daygrid-day-number">3</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-14" role="gridcell" data-date="2024-05-04" class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 4, 2024" id="fc-dom-14" class="fc-daygrid-day-number">4</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                            </tr>
                                            <tr role="row">
                                              <td aria-labelledby="fc-dom-16" role="gridcell" data-date="2024-05-05" class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 5, 2024" id="fc-dom-16" class="fc-daygrid-day-number">5</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-18" role="gridcell" data-date="2024-05-06" class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 6, 2024" id="fc-dom-18" class="fc-daygrid-day-number">6</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-20" role="gridcell" data-date="2024-05-07" class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 7, 2024" id="fc-dom-20" class="fc-daygrid-day-number">7</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                          <a class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                              <div class="fc-event-main">
                                                                <div class="fc-event-main-frame">
                                                                    <div class="fc-event-title-container">
                                                                      <div class="fc-event-title fc-sticky">Planning</div>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                          </a>
                                                        </div>

                                                        <div class="fc-daygrid-event-harness" style="margin-top: 0px;">
                                                          <a class="fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-daygrid-event fc-daygrid-block-event fc-h-event">
                                                              <div class="fc-event-main">
                                                                <div class="fc-event-main-frame">
                                                                    <div class="fc-event-title-container">
                                                                      <div class="fc-event-title fc-sticky">Planning</div>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                          </a>
                                                        </div>
                                                        
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-22" role="gridcell" data-date="2024-05-08" class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 8, 2024" id="fc-dom-22" class="fc-daygrid-day-number">8</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-24" role="gridcell" data-date="2024-05-09" class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 9, 2024" id="fc-dom-24" class="fc-daygrid-day-number">9</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-26" role="gridcell" data-date="2024-05-10" class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 10, 2024" id="fc-dom-26" class="fc-daygrid-day-number">10</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-28" role="gridcell" data-date="2024-05-11" class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 11, 2024" id="fc-dom-28" class="fc-daygrid-day-number">11</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                            </tr>
                                            <tr role="row">
                                              <td aria-labelledby="fc-dom-30" role="gridcell" data-date="2024-05-12" class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 12, 2024" id="fc-dom-30" class="fc-daygrid-day-number">12</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-32" role="gridcell" data-date="2024-05-13" class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 13, 2024" id="fc-dom-32" class="fc-daygrid-day-number">13</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-34" role="gridcell" data-date="2024-05-14" class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 14, 2024" id="fc-dom-34" class="fc-daygrid-day-number">14</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-36" role="gridcell" data-date="2024-05-15" class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 15, 2024" id="fc-dom-36" class="fc-daygrid-day-number">15</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-38" role="gridcell" data-date="2024-05-16" class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 16, 2024" id="fc-dom-38" class="fc-daygrid-day-number">16</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-40" role="gridcell" data-date="2024-05-17" class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 17, 2024" id="fc-dom-40" class="fc-daygrid-day-number">17</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-42" role="gridcell" data-date="2024-05-18" class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 18, 2024" id="fc-dom-42" class="fc-daygrid-day-number">18</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                            </tr>
                                            <tr role="row">
                                              <td aria-labelledby="fc-dom-44" role="gridcell" data-date="2024-05-19" class="fc-day fc-day-sun fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 19, 2024" id="fc-dom-44" class="fc-daygrid-day-number">19</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-46" role="gridcell" data-date="2024-05-20" class="fc-day fc-day-mon fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 20, 2024" id="fc-dom-46" class="fc-daygrid-day-number">20</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-48" role="gridcell" data-date="2024-05-21" class="fc-day fc-day-tue fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 21, 2024" id="fc-dom-48" class="fc-daygrid-day-number">21</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-50" role="gridcell" data-date="2024-05-22" class="fc-day fc-day-wed fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 22, 2024" id="fc-dom-50" class="fc-daygrid-day-number">22</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-52" role="gridcell" data-date="2024-05-23" class="fc-day fc-day-thu fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 23, 2024" id="fc-dom-52" class="fc-daygrid-day-number">23</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-54" role="gridcell" data-date="2024-05-24" class="fc-day fc-day-fri fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 24, 2024" id="fc-dom-54" class="fc-daygrid-day-number">24</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-56" role="gridcell" data-date="2024-05-25" class="fc-day fc-day-sat fc-day-past fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 25, 2024" id="fc-dom-56" class="fc-daygrid-day-number">25</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                            </tr>
                                            <tr role="row">
                                              <td aria-labelledby="fc-dom-58" role="gridcell" data-date="2024-05-26" class="fc-day fc-day-sun fc-day-today fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 26, 2024" id="fc-dom-58" class="fc-daygrid-day-number">26</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-60" role="gridcell" data-date="2024-05-27" class="fc-day fc-day-mon fc-day-future fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 27, 2024" id="fc-dom-60" class="fc-daygrid-day-number">27</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-62" role="gridcell" data-date="2024-05-28" class="fc-day fc-day-tue fc-day-future fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 28, 2024" id="fc-dom-62" class="fc-daygrid-day-number">28</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-64" role="gridcell" data-date="2024-05-29" class="fc-day fc-day-wed fc-day-future fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 29, 2024" id="fc-dom-64" class="fc-daygrid-day-number">29</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-66" role="gridcell" data-date="2024-05-30" class="fc-day fc-day-thu fc-day-future fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 30, 2024" id="fc-dom-66" class="fc-daygrid-day-number">30</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-68" role="gridcell" data-date="2024-05-31" class="fc-day fc-day-fri fc-day-future fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="May 31, 2024" id="fc-dom-68" class="fc-daygrid-day-number">31</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-70" role="gridcell" data-date="2024-06-01" class="fc-day fc-day-sat fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 1, 2024" id="fc-dom-70" class="fc-daygrid-day-number">1</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                            </tr>
                                            <tr role="row">
                                              <td aria-labelledby="fc-dom-72" role="gridcell" data-date="2024-06-02" class="fc-day fc-day-sun fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 2, 2024" id="fc-dom-72" class="fc-daygrid-day-number">2</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-74" role="gridcell" data-date="2024-06-03" class="fc-day fc-day-mon fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 3, 2024" id="fc-dom-74" class="fc-daygrid-day-number">3</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-76" role="gridcell" data-date="2024-06-04" class="fc-day fc-day-tue fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 4, 2024" id="fc-dom-76" class="fc-daygrid-day-number">4</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-78" role="gridcell" data-date="2024-06-05" class="fc-day fc-day-wed fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 5, 2024" id="fc-dom-78" class="fc-daygrid-day-number">5</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-80" role="gridcell" data-date="2024-06-06" class="fc-day fc-day-thu fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 6, 2024" id="fc-dom-80" class="fc-daygrid-day-number">6</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-82" role="gridcell" data-date="2024-06-07" class="fc-day fc-day-fri fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 7, 2024" id="fc-dom-82" class="fc-daygrid-day-number">7</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                              <td aria-labelledby="fc-dom-84" role="gridcell" data-date="2024-06-08" class="fc-day fc-day-sat fc-day-future fc-day-other fc-daygrid-day">
                                                  <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                    <div class="fc-daygrid-day-top"><a aria-label="June 8, 2024" id="fc-dom-84" class="fc-daygrid-day-number">8</a></div>
                                                    <div class="fc-daygrid-day-events">
                                                        <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                    </div>
                                                    <div class="fc-daygrid-day-bg"></div>
                                                  </div>
                                              </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                  </div>
                                </div>
                            </div>
                          </td>
                      </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <?php include('footer.php')?>
      </div>
    <?php include('mainchat.php')?>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php include('customization.php')?>

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