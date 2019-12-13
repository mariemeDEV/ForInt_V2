
<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AdminDesigns - A Responsive HTML5 Admin UI Framework</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Required Plugin CSS -->
  <link rel="stylesheet" type="text/css" href="vendor/plugins/tagmanager/tagmanager.css">
  <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">
  <link rel="stylesheet" type="text/css" href="vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- Select2 Plugin CSS  -->
  <link rel="stylesheet" type="text/css" href="vendor/plugins/select2/css/core.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="form-plugins-page">

  <!-- Start: Theme Preview Pane -->
  <div id="skin-toolbox">
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
        <span class="panel-title"> Theme Options</span>
      </div>
      <div class="panel-body pn">
        <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
          <li class="active">
            <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
          </li>
          <li>
            <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
          </li>
          <li>
            <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
          </li>
        </ul>
        <div class="tab-content p20 ptn pb15">
          <div role="tabpanel" class="tab-pane active" id="toolbox-header">
            <form id="toolbox-header-skin">
              <h4 class="mv20">Header Skins</h4>
              <div class="skin-toolbox-swatches">
                <div class="checkbox-custom checkbox-disabled fill mb5">
                  <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                  <label for="headerSkin8">Light</label>
                </div>
                <div class="checkbox-custom fill checkbox-primary mb5">
                  <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                  <label for="headerSkin1">Primary</label>
                </div>
                <div class="checkbox-custom fill checkbox-info mb5">
                  <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                  <label for="headerSkin3">Info</label>
                </div>
                <div class="checkbox-custom fill checkbox-warning mb5">
                  <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                  <label for="headerSkin4">Warning</label>
                </div>
                <div class="checkbox-custom fill checkbox-danger mb5">
                  <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                  <label for="headerSkin5">Danger</label>
                </div>
                <div class="checkbox-custom fill checkbox-alert mb5">
                  <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                  <label for="headerSkin6">Alert</label>
                </div>
                <div class="checkbox-custom fill checkbox-system mb5">
                  <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                  <label for="headerSkin7">System</label>
                </div>
                <div class="checkbox-custom fill checkbox-success mb5">
                  <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                  <label for="headerSkin2">Success</label>
                </div>
                <div class="checkbox-custom fill mb5">
                  <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                  <label for="headerSkin9">Dark</label>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
            <form id="toolbox-sidebar-skin">
              <h4 class="mv20">Sidebar Skins</h4>
              <div class="skin-toolbox-swatches">
                <div class="checkbox-custom fill mb5">
                  <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                  <label for="sidebarSkin3">Dark</label>
                </div>
                <div class="checkbox-custom fill checkbox-disabled mb5">
                  <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                  <label for="sidebarSkin1">Light</label>
                </div>
                <div class="checkbox-custom fill checkbox-light mb5">
                  <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                  <label for="sidebarSkin2">Lighter</label>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="toolbox-settings">
            <form id="toolbox-settings-misc">
              <h4 class="mv20 mtn">Layout Options</h4>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" checked="" id="header-option">
                  <label for="header-option">Fixed Header</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" checked="" id="sidebar-option">
                  <label for="sidebar-option">Fixed Sidebar</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" id="breadcrumb-option">
                  <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" id="breadcrumb-hidden">
                  <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                </div>
              </div>
              <h4 class="mv20">Layout Options</h4>
              <div class="form-group">
                <div class="radio-custom mb5">
                  <input type="radio" id="fullwidth-option" checked name="layout-option">
                  <label for="fullwidth-option">Fullwidth Layout</label>
                </div>
              </div>
              <div class="form-group mb20">
                <div class="radio-custom radio-disabled mb5">
                  <input type="radio" id="boxed-option" name="layout-option" disabled>
                  <label for="boxed-option">Boxed Layout
                    <b class="text-muted">(Coming Soon)</b>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="form-group mn br-t p15">
          <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Theme Preview Pane -->

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>Admin</b>Designs
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li>
          <a class="sidebar-menu-toggle" href="#">
            <span class="ad ad-ruby fs18"></span>
          </a>
        </li>
        <li>
          <a class="topbar-menu-toggle" href="#">
            <span class="ad ad-wand fs16"></span>
          </a>
        </li>
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left navbar-search" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="ad ad-radio-tower fs18"></span>
          </a>
          <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
            <li class="dropdown-header">
              <span class="dropdown-title"> Notifications</span>
              <span class="label label-warning">12</span>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5">Article
                  <small> - 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
            <li class="media">
              <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="flag-xs flag-us"></span> US
          </a>
          <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-in mr10"></span> Hindu </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-es mr10"></span> Spanish </a>
            </li>
          </ul>
        </li>
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15"> John.Smith
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>

            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Account Settings </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-power-off"></span> Logout </a>
            </li>
          </ul>
        </li>
      </ul>

    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Menu (Slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Author (hidden)  -->
          <div class="sidebar-widget author-widget hidden">
            <div class="media">
              <a class="media-left" href="#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                </div>
                <div class="media-author">Michael Richards</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Menu</li>
          <li>
            <a href="pages_calendar.html">
              <span class="fa fa-calendar"></span>
              <span class="sidebar-title">Calendar</span>
              <span class="sidebar-title-tray">
                <span class="label label-xs bg-primary">New</span>
              </span>
            </a>
          </li>
          <li>
            <a href="../README/index.html">
              <span class="glyphicon glyphicon-book"></span>
              <span class="sidebar-title">Documentation</span>
            </a>
          </li>
          <li class="active">
            <a href="dashboard.html">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-label pt15">Exclusive Tools</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-columns"></span>
              <span class="sidebar-title">Layout Templates</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa fa-arrows-h"></span>
                  Sidebars
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_sidebar-left-static.html">
                      Left Static </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-fixed.html">
                      Left Fixed </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-widgets.html">
                      Left Widgets </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-minified.html">
                      Left Minified </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-light.html">
                      Left White </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-static.html">
                      Right Static </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-fixed.html">
                      Right Fixed </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-menu.html">
                      Right w/Menu </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-arrows-v"></span>
                  Navbar
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_navbar-static.html">
                      Navbar Static </a>
                  </li>
                  <li>
                    <a href="layout_navbar-fixed.html">
                      Navbar Fixed </a>
                  </li>
                  <li>
                    <a href="layout_navbar-menus.html">
                      Navbar Menus </a>
                  </li>
                  <li>
                    <a href="layout_navbar-contextual.html">
                      Contextual Example </a>
                  </li>
                  <li>
                    <a href="layout_navbar-search-alt.html">
                      Search Alt Style </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-hand-o-up"></span>
                  Topbar
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_topbar.html">
                      Default Style </a>
                  </li> 
                  <li>
                    <a href="layout_topbar-menu.html">
                      Default w/Menu </a>
                  </li>  
                  <li>
                    <a href="layout_topbar-alt.html">
                      Alternate Style </a>
                  </li>  
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-arrows-v"></span>
                  Content Body
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_content-blank.html">
                      Blank Starter </a>
                  </li>
                  <li>
                    <a href="layout_content-fixed.html">
                      Fixed Window </a>
                  </li>
                  <li>
                    <a href="layout_content-heading.html">
                      Content Heading </a>
                  </li>
                  <li>
                    <a href="layout_content-tabs.html">
                      Content Tabs </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-pause"></span>
                  Content Trays
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_tray-left.html">
                      Tray Left Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-left-fixed.html">
                      Tray Left Fixed </a>
                  </li> 
                  <li>
                    <a href="layout_tray-right.html">
                      Tray Right Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-right-fixed.html">
                      Tray Right Fixed </a>
                  </li> 
                  <li>
                    <a href="layout_tray-both.html">
                      Left + Right Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-both-fixed.html">
                      Left + Right Fixed </a>
                  </li> 
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-plus-square-o"></span>
                  Boxed Layout
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_boxed.html">
                      Default </a>
                  </li>
                  <li>
                    <a href="layout_boxed-horizontal.html">
                      Horizontal Menu </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-arrow-circle-o-up"></span>
                  Horizontal Menu
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_horizontal-sm.html">
                      Small Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-md.html">
                      Medium Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-lg.html">
                      Large Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-light.html">
                      Light Skin</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-topbar.html">
                      With Topbar</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-topbar-alt.html">
                      With Alt Topbar</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-collapsed.html">
                      Collapsed onLoad</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-boxed.html">
                      In Boxed Layout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">Admin Plugins</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_plugins-panels.html">
                  <span class="glyphicon glyphicon-book"></span> Admin Panels </a>
              </li>
              <li>
                <a href="admin_plugins-modals.html">
                  <span class="glyphicon glyphicon-modal-window"></span> Admin Modals </a>
              </li>
              <li>
                <a href="admin_plugins-dock.html">
                  <span class="glyphicon glyphicon-equalizer"></span> Admin Dock </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title">Admin Forms</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_forms-elements.html">
                  <span class="glyphicon glyphicon-edit"></span> Admin Elements </a>
              </li>
              <li>
                <a href="admin_forms-widgets.html">
                  <span class="glyphicon glyphicon-calendar"></span> Admin Widgets </a>
              </li>
              <li>
                <a href="admin_forms-validation.html">
                  <span class="glyphicon glyphicon-check"></span> Admin Validation </a>
              </li>
              <li>
                <a href="admin_forms-layouts.html">
                  <span class="fa fa-desktop"></span> Admin Layouts </a>
              </li>
              <li>
                <a href="admin_forms-wizard.html">
                  <span class="fa fa-clipboard"></span> Admin Wizard </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-label pt20">Systems</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-diamond"></span>
              <span class="sidebar-title">Widget Packages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="widgets_tile.html">
                  <span class="fa fa-cube"></span> Tile Widgets</a>
              </li>
              <li>
                <a href="widgets_panel.html">
                  <span class="fa fa-desktop"></span> Panel Widgets </a>
              </li>
              <li>
                <a href="widgets_scroller.html">
                  <span class="fa fa-columns"></span> Scroller Widgets </a>
              </li>
              <li>
                <a href="widgets_data.html">
                  <span class="fa fa-dot-circle-o"></span> Admin Widgets </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="sidebar-title">Ecommerce</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="ecommerce_dashboard.html">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Dashboard
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="ecommerce_products.html">
                  <span class="glyphicon glyphicon-tags"></span> Products </a>
              </li>
              <li>
                <a href="ecommerce_orders.html">
                  <span class="fa fa-money"></span> Orders </a>
              </li>
              <li>
                <a href="ecommerce_customers.html">
                  <span class="fa fa-users"></span> Customers </a>
              </li>
              <li>
                <a href="ecommerce_settings.html">
                  <span class="fa fa-gears"></span> Store Settings </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="email_templates.html">
              <span class="fa fa-envelope-o"></span>
              <span class="sidebar-title">Email Templates</span>
            </a>
          </li>

          <!-- sidebar resources -->
          <li class="sidebar-label pt20">Elements</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-bell"></span>
              <span class="sidebar-title">UI Elements</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="ui_alerts.html">
                  <span class="fa fa-warning"></span> Alerts </a>
              </li>
              <li>
                <a href="ui_animations.html">
                  <span class="fa fa-spinner"></span> Animations </a>
              </li>
              <li>
                <a href="ui_buttons.html">
                  <span class="fa fa-plus-square-o"></span> Buttons </a>
              </li>
              <li>
                <a href="ui_typography.html">
                  <span class="fa fa-text-width"></span> Typography </a>
              </li>
              <li>
                <a href="ui_portlets.html">
                  <span class="fa fa-archive"></span> Portlets </a>
              </li>
              <li>
                <a href="ui_progress-bars.html">
                  <span class="fa fa-bars"></span> Progress Bars </a>
              </li>
              <li>
                <a href="ui_tabs.html">
                  <span class="fa fa-toggle-off"></span> Tabs </a>
              </li>
              <li>
                <a href="ui_icons.html">
                  <span class="fa fa-hand-o-right"></span> Icons </a>
              </li>
              <li>
                <a href="ui_grid.html">
                  <span class="fa fa-th-large"></span> Grid </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle menu-open" href="#">
              <span class="glyphicon glyphicon-hdd"></span>
              <span class="sidebar-title">Form Elements</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="form_inputs.html">
                  <span class="fa fa-magic"></span> Basic Inputs </a>
              </li>
              <li class="active">
                <a href="form_plugins.html">
                  <span class="fa fa-bell-o"></span> Plugin Inputs
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="form_editors.html">
                  <span class="fa fa-clipboard"></span> Editors </a>
              </li>
              <li>
                <a href="form_treeview.html">
                  <span class="fa fa-tree"></span> Treeview </a>
              </li>
              <li>
                <a href="form_nestable.html">
                  <span class="fa fa-tasks"></span> Nestable </a>
              </li>
              <li>
                <a href="form_image-tools.html">
                  <span class="fa fa-cloud-upload"></span> Image Tools
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="form_uploaders.html">
                  <span class="fa fa-cloud-upload"></span> Uploaders </a>
              </li>
              <li>
                <a href="form_notifications.html">
                  <span class="fa fa-bell-o"></span> Notifications </a>
              </li>
              <li>
                <a href="form_content-sliders.html">
                  <span class="fa fa-exchange"></span> Content Sliders </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-tower"></span>
              <span class="sidebar-title">Plugins</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-globe"></span> Maps
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="maps_advanced.html">Admin Maps</a>
                  </li>
                  <li>
                    <a href="maps_basic.html">Basic Maps</a>
                  </li>
                  <li>
                    <a href="maps_vector.html">Vector Maps</a>
                  </li>
                  <li>
                    <a href="maps_full.html">Full Map</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-area-chart"></span> Charts
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="charts_highcharts.html">Highcharts</a>
                  </li>
                  <li>
                    <a href="charts_d3.html">D3 Charts</a>
                  </li>
                  <li>
                    <a href="charts_flot.html">Flot Charts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-table"></span> Tables
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="tables_basic.html"> Basic Tables</a>
                  </li>
                  <li>
                    <a href="tables_datatables.html"> DataTables </a>
                  </li>
                  <li>
                    <a href="tables_datatables-editor.html"> Editable Tables </a>
                  </li>
                  <li>
                    <a href="tables_footable.html"> FooTables </a>
                  </li>
                  <li>
                    <a href="tables_pricing.html"> Pricing Tables </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-flask"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="misc_tour.html"> Site Tour</a>
                  </li>
                  <li>
                    <a href="misc_timeout.html"> Session Timeout</a>
                  </li>
                  <li>
                    <a href="misc_nprogress.html"> Page Progress Loader </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-duplicate"></span>
              <span class="sidebar-title">Pages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-gears"></span> Utility
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="landing-page/landing1/index.html" target="_blank"> Landing Page </a>
                  </li>
                  <li>
                    <a href="pages_confirmation.html" target="_blank"> Confirmation
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_login.html" target="_blank"> Login </a>
                  </li>
                  <li>
                    <a href="pages_login(alt).html" target="_blank"> Login Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_register.html" target="_blank"> Register </a>
                  </li>
                  <li>
                    <a href="pages_register(alt).html" target="_blank"> Register Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_screenlock.html" target="_blank"> Screenlock </a>
                  </li>
                  <li>
                    <a href="pages_screenlock(alt).html" target="_blank"> Screenlock Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw.html" target="_blank"> Forgot Password </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw(alt).html" target="_blank"> Forgot Password Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_coming-soon.html" target="_blank"> Coming Soon
                    </a>
                  </li>
                  <li>
                    <a href="pages_404.html"> 404 Error </a>
                  </li>
                  <li>
                    <a href="pages_500.html"> 500 Error </a>
                  </li>
                  <li>
                    <a href="pages_404(alt).html"> 404 Error Alt </a>
                  </li>
                  <li>
                    <a href="pages_500(alt).html"> 500 Error Alt </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-desktop"></span> Basic
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_search-results.html">Search Results
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_profile.html"> Profile </a>
                  </li>
                  <li>
                    <a href="pages_timeline.html"> Timeline Split </a>
                  </li>
                  <li>
                    <a href="pages_timeline-single.html"> Timeline Single </a>
                  </li>
                  <li>
                    <a href="pages_faq.html"> FAQ Page </a>
                  </li>
                  <li>
                    <a href="pages_calendar.html"> Calendar </a>
                  </li>
                  <li>
                    <a href="pages_messages.html"> Messages </a>
                  </li>
                  <li>
                    <a href="pages_messages(alt).html"> Messages Alt </a>
                  </li>
                  <li>
                    <a href="pages_gallery.html"> Gallery </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-usd"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_invoice.html"> Printable Invoice </a>
                  </li>
                  <li>
                    <a href="pages_blank.html"> Blank </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- sidebar bullets -->
          <li class="sidebar-label pt20">Projects</li>
          <li class="sidebar-proj">
            <a href="#projectOne">
              <span class="fa fa-dot-circle-o text-primary"></span>
              <span class="sidebar-title">Website Redesign</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="#projectTwo">
              <span class="fa fa-dot-circle-o text-info"></span>
              <span class="sidebar-title">Ecommerce Panel</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="#projectTwo">
              <span class="fa fa-dot-circle-o text-danger"></span>
              <span class="sidebar-title">Adobe Mockup</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="#projectThree">
              <span class="fa fa-dot-circle-o text-warning"></span>
              <span class="sidebar-title">SSD Upgrades</span>
            </a>
          </li>

          <!-- sidebar progress bars -->
          <li class="sidebar-label pt25 pb10">User Stats</li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-inbox text-info"></span>
              <span class="sidebar-title text-muted">Email Storage</span>
              <span class="pull-right mr20 text-muted">35%</span>
              <div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-dropbox text-warning"></span>
              <span class="sidebar-title text-muted">Bandwidth</span>
              <span class="pull-right mr20 text-muted">58%</span>
              <div class="progress progress-bar-xs mh20">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                  <span class="sr-only">58% Complete</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      <div id="topbar-dropmenu">
        <div class="topbar-menu row">
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-inbox"></span>
              <p class="metro-title">Messages</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-user"></span>
              <p class="metro-title">Users</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-headphones"></span>
              <p class="metro-title">Support</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon fa fa-gears"></span>
              <p class="metro-title">Settings</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-facetime-video"></span>
              <p class="metro-title">Videos</p>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile">
              <span class="metro-icon glyphicon glyphicon-picture"></span>
              <p class="metro-title">Pictures</p>
            </a>
          </div>
        </div>
      </div>
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <header id="topbar">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="crumb-trail">Dashboard</li>
          </ol>
        </div>
        <div class="topbar-right">
          <div class="ib topbar-dropdown">
            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
            <select id="topbar-multiple" class="hidden">
              <optgroup label="Filter By:">
                <option value="1-1">Last 30 Days</option>
                <option value="1-2" selected="selected">Last 60 Days</option>
                <option value="1-3">Last Year</option>
              </optgroup>
            </select>
          </div>
          <div class="ml15 ib va-m" id="toggle_sidemenu_r">
            <a href="#" class="pl5">
              <i class="fa fa-sign-in fs22 text-primary"></i>
              <span class="badge badge-hero badge-danger">3</span>
            </a>
          </div>
        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <div id="content" class="animated fadeIn">
        <div class="row">

          <div class="col-md-6">

            <!-- Plugin: Bootstrap Multiselect -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Bootstrap Multiselect</span>
              </div>
              <div class="panel-body">

                <div class="row">
                  <div class="col-sm-7">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="multiselect1" class="col-md-4 control-label">Single</label>
                        <div class="col-md-8">
                          <select id="multiselect1">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella" selected>Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="multiselect2" class="col-md-4 control-label">Multiple</label>
                        <div class="col-md-8">
                          <select id="multiselect2" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="multiselect3" class="col-md-4 control-label">With Labels</label>
                        <div class="col-md-8">
                          <select id="multiselect3" class="multiselect-withlabels" multiple="multiple">
                            <optgroup label="Mathematics">
                              <option value="analysis">Analysis</option>
                              <option value="discrete">Discrete Mathematics</option>
                              <option value="probability">Probability Theory</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                              <option value="programming">Introduction to Programming</option>
                              <option value="automata">Automata Theory</option>
                              <option value="complexity">Complexity Theory</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="multiselect4" class="col-md-4 control-label">With Sorting</label>
                        <div class="col-md-8">
                          <select id="multiselect4" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-sm-5">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <div class="col-md-12">
                          <select id="multiselect5">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella" selected>Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <select id="multiselect6" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <select id="multiselect7" class="multiselect-withlabels" multiple="multiple">
                            <optgroup label="Mathematics">
                              <option value="analysis">Analysis</option>
                              <option value="discrete">Discrete Mathematics</option>
                              <option value="probability">Probability Theory</option>
                            </optgroup>
                            <optgroup label="Computer Science">
                              <option value="programming">Introduction to Programming</option>
                              <option value="automata">Automata Theory</option>
                              <option value="complexity">Complexity Theory</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <select id="multiselect8" multiple="multiple">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>


            <!-- Plugin: Dual Select List -->
            <div class="panel">
              <form id="demoform" class="hide-list-label" action="#" method="post">
                <div class="panel-heading">
                  <span class="panel-title"> Dual Select Listbox </span>
                </div>
                <div class="panel-body p25">
                  <select class="demo1" multiple="multiple" size="10" name="demo1">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <option value="option4">Option 4</option>
                    <option value="option5">Option 5</option>
                    <option value="option6">Option 6</option>
                    <option value="option7">Option 7</option>
                    <option value="option8">Option 8</option>
                    <option value="option9">Option 9</option>
                    <option value="option10">Option 10</option>
                    <option value="option11">Option 11</option>
                    <option value="option12">Option 12</option>
                  </select>
                </div>
                <div class="panel-footer text-right">
                  <button type="submit" class="btn btn-default ph25">Submit Data</button>
                </div>
              </form>
            </div>

            <!-- Plugin: Field Maxlength -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title"> Input Field Maxlength</span>
              </div>
              <div class="panel-body p25">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Input MaxLength</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" maxlength="15" placeholder="Maxlength of 15 characters..">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Plugin: Typeahead Input -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title"> Typeahead Inputs</span>
              </div>
              <div class="panel-body p25">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Try Me</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control typeahead" id="test-field" placeholder="States of USA">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Plugin: Spinner Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Spinner Fields</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="spinner1" class="col-lg-2 control-label">Default</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-level-up"></i>
                        </span>
                        <input id="spinner1" class="form-control ui-spinner-input" name="spinner" value="15" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="spinner2" class="col-lg-2 control-label">Currency</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-usd"></i>
                        </span>
                        <input id="spinner2" class="form-control ui-spinner-input" name="spinner" value="35" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="spinner3" class="col-lg-2 control-label">Decimal</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-signal"></i>
                        </span>
                        <input id="spinner3" class="form-control ui-spinner-input" name="spinner" value="13.5" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="spinner4" class="col-lg-2 control-label">Time</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </span>
                        <input id="spinner4" class="form-control ui-spinner-input" name="spinner" value="08:30 PM" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Plugin: Masked Fields -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Masked Input Fields</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="maskedDate" class="col-lg-2 control-label">Date</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" id="maskedDate" class="form-control date" maxlength="10" autocomplete="off" placeholder="11/11/1111">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedTime" class="col-lg-2 control-label">Time</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </span>
                        <input type="text" id="maskedTime" class="form-control time" maxlength="10" autocomplete="off" placeholder="00:00:00">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedMultiple" class="col-lg-2 control-label">Date and Time</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </span>
                        <input type="text" id="maskedMultiple" class="form-control date_time" maxlength="10" autocomplete="off" placeholder="99/99/9999 00:00:00">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedZip" class="col-lg-2 control-label">Zip Code</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-bolt"></i>
                        </span>
                        <input type="text" id="maskedZip" class="form-control zip" maxlength="10" autocomplete="off" placeholder="99999-999">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedPhone" class="col-lg-2 control-label">Phone</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" id="maskedPhone" class="form-control phone" maxlength="10" autocomplete="off" placeholder="(999) 999-9999">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedExt" class="col-lg-2 control-label">Phone + Ext</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" id="maskedExt" class="form-control phoneext" maxlength="10" autocomplete="off" placeholder="9999-9999">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedMoney" class="col-lg-2 control-label">Money</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-usd"></i>
                        </span>
                        <input type="text" id="maskedMoney" class="form-control money" maxlength="10" autocomplete="off" placeholder="000.000.000.000">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedKey" class="col-lg-2 control-label">Product Key</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-key"></i>
                        </span>
                        <input type="text" id="maskedKey" class="form-control product" maxlength="10" autocomplete="off" placeholder="000.000.000.000,00">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedID" class="col-lg-2 control-label">Tax ID</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-gavel"></i>
                        </span>
                        <input type="text" id="maskedID" class="form-control tin" maxlength="10" autocomplete="off" placeholder="99999-999">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedSSN" class="col-lg-2 control-label">SSN</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-exclamation"></i>
                        </span>
                        <input type="text" id="maskedSSN" class="form-control ssn" maxlength="10" autocomplete="off" placeholder="999-99-9999">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedScript" class="col-lg-2 control-label">Eye Script</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-eye"></i>
                        </span>
                        <input type="text" id="maskedScript" class="form-control eyescript" maxlength="10" autocomplete="off" placeholder="0ZZ.0ZZ.0ZZ.0ZZ">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="maskedCustom" class="col-lg-2 control-label">Custom</label>
                    <div class="col-lg-9">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-flask"></i>
                        </span>
                        <input type="text" id="maskedCustom" class="form-control custom" maxlength="10" autocomplete="off" placeholder="1-22-333-4444">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>


          </div>

          <div class="col-md-6">


            <!-- Plugin: Select2 Multiselect -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title"> Select2 Multiselect</span>
              </div>
              <div class="panel-body p25 pb10">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Single Select</label>
                    <div class="col-md-8">
                      <select class="select2-single form-control">
                        <option value="CA">California</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Multiple Select</label>
                    <div class="col-md-8">
                      <select class="select2-multiple form-control select-primary" multiple="multiple">
                        <option value="CA">California</option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </div>
                  </div>

                  </form>

                  <hr class="alt short">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
        
                          <select class="select2-primary form-control">
                            <option value="CA">California</option>
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                          </select>
                  
                      </div>
                      <div class="form-group">
                  
                          <select class="select2-info form-control">
                            <option value="CA">California</option>
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                          </select>
                  
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
              
                          <select class="select2-success form-control">
                            <option value="CA">California</option>
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                          </select>
                 
                      </div>
                      <div class="form-group">
                   
                          <select class="select2-warning form-control">
                            <option value="CA">California</option>
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                          </select>
                  
                      </div>
                    </div>

                  </div>
                  



          
              </div>
            </div>

            <!-- Plugin: Tag Manager -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Tag manager</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group mbn">
                    <label for="tagmanager" class="col-md-2 control-label">Tag Field</label>
                    <div class="col-md-10">
                      <input type="text" id="tagmanager" class="form-control tm-input" placeholder="Create a new tag..">
                      <div class="tag-container tags"></div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="panel-footer">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="tagmanager2" class="col-md-2 control-label pt20">Tag Options</label>
                    <div class="col-md-10">
                      <div class="mt15">
                        <span class="tm-tag tm-tag-primary">
                          <span>Primary Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-success">
                          <span>Success Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-info">
                          <span>Info Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-warning">
                          <span>Warning Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-danger">
                          <span>Danger Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-alert">
                          <span>Alert Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-system">
                          <span>System Tag</span>
                        </span>
                        <span class="tm-tag tm-tag-inverse">
                          <span>Inverse Tag</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Plugin: Color Picker -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Color Picker</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label pt5" for="cp1">Static</label>
                    <div class="col-lg-9">
                      <a href="#" class="btn btn-sm btn-default demo form-control-static ib" id="demo_apidemo" data-color="#5384ce">Click to open me!</a>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="cp2">Default Field</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control demo demo-1 demo-auto" value="#5367ce" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="cp3">Component Field</label>
                    <div class="col-md-8">
                      <div class="input-group colorpicker-component demo demo-auto cursor">
                        <span class="input-group-addon">
                          <i></i>
                        </span>
                        <input type="text" value="" class="form-control" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="panel-footer pt25">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Inline</label>
                    <div class="col-md-10">
                      <div class="demo demo-auto ib ml15 mr30" data-container="true" data-color="#5384ce" data-inline="true"></div>
                      <div id="demo_cont" class="demo demo-auto ib" data-container="#demo_cont" data-color="rgba(83,167,206,1)" data-inline="true"></div>
                    </div>
                  </div>
                </form>
                <div class="clearfix"></div>
              </div>
            </div>

            <!-- Plugin: Daterange Picker -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Date Range Picker</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="daterangepicker1">Default Field</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control pull-right" name="daterange" id="daterangepicker1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="daterangepicker2">Component Field</label>
                    <div class="col-md-8">
                      <div class="input-group date pull-right" id="daterangepicker2">
                        <input type="text" class="form-control">
                        <span class="input-group-addon cursor">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Plugin: Datetime Picker -->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Date/Time Picker</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group mt10">
                    <label class="col-md-3 control-label" for="datetimepicker1">Default Field</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="datetimepicker1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="datetimepicker2">Component Field</label>
                    <div class="col-md-8">
                      <div class="input-group date" id="datetimepicker2">
                        <span class="input-group-addon cursor">
                          <i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="panel-footer pt25">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Inline Picker</label>
                    <div class="col-md-8">
                      <div id="datetimepicker3">
                        <input type="text" class="form-control" style="max-width: 250px;">
                      </div>
                    </div>
                  </div>
                </form>

                <div class="clearfix"></div>
              </div>
            </div>

            <!-- Plugin: Time Picker-->
            <div class="panel">
              <div class="panel-heading">
                <span class="panel-title">Time Picker</span>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group mt10">
                    <label class="col-md-3 control-label" for="datetimepicker5">Default Field</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control" id="datetimepicker5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="datetimepicker6">Component Field</label>
                    <div class="col-md-8">
                      <div class="input-group date" id="datetimepicker6">
                        <span class="input-group-addon cursor">
                          <i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="panel-footer pt25">
                <form class="form-horizontal" role="form">
                  <div class="form-group mt10">
                    <label class="col-md-3 control-label" for="datetimepicker7">Inline Time</label>
                    <div class="col-md-8">
                      <div class="timepicker-sm" id="datetimepicker7">
                        <input type="text" class="form-control" style="max-width: 250px;">
                      </div>
                    </div>
                  </div>
                </form>
                <div class="clearfix"></div>
              </div>
            </div>


          </div>
        </div>

      </div>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano affix">

      <!-- Start: Sidebar Right Content -->
      <div class="sidebar-right-content nano-content p15">
          <h5 class="title-divider text-muted mb20"> Server Statistics
            <span class="pull-right"> 2013
              <i class="fa fa-caret-down ml5"></i>
            </span>
          </h5>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
              <span class="fs11">DB Request</span>
            </div>
          </div>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
              <span class="fs11 text-left">Server Load</span>
            </div>
          </div>
          <div class="progress mh5">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
              <span class="fs11 text-left">Server Connections</span>
            </div>
          </div>
          <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">132</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-success-dark mn">
                <i class="fa fa-caret-up"></i> 13.2% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">212</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-success-dark mn">
                <i class="fa fa-caret-up"></i> 25.6% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
          <div class="row">
            <div class="col-xs-5">
              <h3 class="text-primary mn pl5">82.5</h3>
            </div>
            <div class="col-xs-7 text-right">
              <h3 class="text-danger mn">
                <i class="fa fa-caret-down"></i> 17.9% </h3>
            </div>
          </div>
          <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
            <span class="pull-right text-primary fw600">USA</span>
          </h5>
        </div>
        
    </aside>
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->


  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Time/Date Plugin Dependencies -->
  <script src="vendor/plugins/globalize/globalize.min.js"></script>
  <script src="vendor/plugins/moment/moment.min.js"></script>

  <!-- BS Dual Listbox Plugin -->
  <script src="vendor/plugins/duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

  <!-- Bootstrap Maxlength plugin -->
  <script src="vendor/plugins/maxlength/bootstrap-maxlength.min.js"></script>

  <!-- Select2 Plugin Plugin -->
  <script src="vendor/plugins/select2/select2.min.js"></script>

  <!-- Typeahead Plugin -->
  <script src="vendor/plugins/typeahead/typeahead.bundle.min.js"></script>

  <!-- DateRange Plugin -->
  <script src="vendor/plugins/daterange/daterangepicker.js"></script>

  <!-- DateTime Plugin -->
  <script src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>

  <!-- BS Colorpicker Plugin -->
  <script src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>

  <!-- MaskedInput Plugin -->
  <script src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>

  <!-- TagManager Plugin -->
  <script src="vendor/plugins/tagmanager/tagmanager.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS    
    Demo.init();


    // Init Select2 - Basic Single
    $(".select2-single").select2();

    // Init Select2 - Basic Multiple
    $(".select2-multiple").select2({
      placeholder: "Select a state",
       allowClear: true
    });

    // Init Select2 - Contextuals (via html classes)
    $(".select2-primary").select2(); // select2 contextual - primary
    $(".select2-success").select2(); // select2 contextual - success
    $(".select2-info").select2();    // select2 contextual - info
    $(".select2-warning").select2(); // select2 contextual - warning  

    // Init Bootstrap Maxlength Plugin
    $('input[maxlength]').maxlength({
      threshold: 15,
      placement: "right"
    });

    // Dual List Plugin Init
    var demo1 = $('.demo1').bootstrapDualListbox({
      nonSelectedListLabel: 'Options',
      selectedListLabel: 'Selected',
      preserveSelectionOnMove: 'moved',
      moveOnSelect: true,
      nonSelectedFilter: 'ion ([7-9]|[1][0-2])'
    });

    $("#demoform").submit(function() {
      alert("Options Selected: " + $('.demo1').val());
      return false;
    });

    // Init Twitter Typeahead.js
    var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            // the typeahead jQuery plugin expects suggestions to a
            // JavaScript object, refer to typeahead docs for more info
            matches.push({
              value: str
            });
          }
        });

        cb(matches);
      };
    };

    var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
      'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
      'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
      'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
      'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
      'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
      'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
      'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
      'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
    ];

    // Init Typeahead Plugin with state aray
    $('.typeahead').typeahead({
      hint: true,
      highlight: true,
      minLength: 1
    }, {
      name: 'states',
      displayKey: 'value',
      source: substringMatcher(states)
    });

    // DateRange plugin options
    var rangeOptions = {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
        'Last 7 Days': [moment().subtract('days', 6), moment()],
        'Last 30 Days': [moment().subtract('days', 29), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
      },
      startDate: moment().subtract('days', 29),
      endDate: moment()
    }

    // Init DateRange plugin
    $('#daterangepicker1').daterangepicker();

    // Init DateRange plugin
    $('#daterangepicker2').daterangepicker(
      rangeOptions,
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    );

    // Init DateRange plugin
    $('#inline-daterange').daterangepicker(
      rangeOptions,
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    );

    // Init DateTimepicker - fields
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker();

    // Init DateTimepicker - inline + range detection
    $('#datetimepicker3').datetimepicker({
      defaultDate: "9/4/2014",
      inline: true,
    });

    // Init DateTimepicker - fields + Date disabled (only time picker)
    $('#datetimepicker5').datetimepicker({
      defaultDate: "9/25/2014",
      pickDate: false,
    });
    // Init DateTimepicker - fields + Date disabled (only time picker)
    $('#datetimepicker6').datetimepicker({
      defaultDate: "9/25/2014",
      pickDate: false,
    });
    // Init DateTimepicker - inline + Date disabled (only time picker)
    $('#datetimepicker7').datetimepicker({
      defaultDate: "9/25/2014",
      pickDate: false,
      inline: true
    });

    // Init Colorpicker plugin
    $('#demo_apidemo').colorpicker({
      color: bgPrimary
    });
    $('.demo-auto').colorpicker();

    // Init jQuery Tags Manager 
    $(".tm-input").tagsManager({
      tagsContainer: '.tags',
      prefilled: ["Miley Cyrus", "Apple", "A Long Tag", "Na uh"],
      tagClass: 'tm-tag-info',
    });

    // Init Boostrap Multiselects
    $('#multiselect1').multiselect();
    $('#multiselect2').multiselect({
      includeSelectAllOption: true
    });
    $('#multiselect3').multiselect();
    $('#multiselect4').multiselect({
      enableFiltering: true,
    });
    $('#multiselect5').multiselect({
      buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
    });
    $('#multiselect6').multiselect({
      buttonClass: 'multiselect dropdown-toggle btn btn-default btn-info'
    });
    $('#multiselect7').multiselect({
      buttonClass: 'multiselect dropdown-toggle btn btn-default btn-success'
    });
    $('#multiselect8').multiselect({
      buttonClass: 'multiselect dropdown-toggle btn btn-default btn-warning'
    });

    // Init jQuery spinner init - default
    $("#spinner1").spinner();

    // Init jQuery spinner init - currency 
    $("#spinner2").spinner({
      min: 5,
      max: 2500,
      step: 25,
      start: 1000,
      //numberFormat: "C"
    });

    // Init jQuery spinner init - decimal  
    $("#spinner3").spinner({
      step: 0.01,
      numberFormat: "n"
    });

    // jQuery Time Spinner settings
    $.widget("ui.timespinner", $.ui.spinner, {
      options: {
        // seconds
        step: 60 * 1000,
        // hours
        page: 60
      },
      _parse: function(value) {
        if (typeof value === "string") {
          // already a timestamp
          if (Number(value) == value) {
            return Number(value);
          }
          return +Globalize.parseDate(value);
        }
        return value;
      },

      _format: function(value) {
        return Globalize.format(new Date(value), "t");
      }
    });

    // Init jQuery Time Spinner
    $("#spinner4").timespinner();

    // Init jQuery Masked inputs
    $('.date').mask('99/99/9999');
    $('.time').mask('99:99:99');
    $('.date_time').mask('99/99/9999 99:99:99');
    $('.zip').mask('99999-999');
    $('.phone').mask('(999) 999-9999');
    $('.phoneext').mask("(999) 999-9999 x99999");
    $(".money").mask("999,999,999.999");
    $(".product").mask("999.999.999.999");
    $(".tin").mask("99-9999999");
    $(".ssn").mask("999-99-9999");
    $(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
    $(".eyescript").mask("~9.99 ~9.99 999");
    $(".custom").mask("9.99.999.9999");

  });
  </script>
</body>

</html>
