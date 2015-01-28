<!DOCTYPE html>
<html>
  <head>
<?
echo $this->Html->css('forms');
echo $this->fetch('framework7');
?>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>My App</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="path/to/framework7.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="path/to/my-app.css">
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <p>Left panel content goes here</p>
      </div>
    </div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We need cool sliding animation on title element, so we have additional "sliding" class -->
            <div class="center sliding">Awesome App</div>
            <div class="right">
              <!-- 
                Right link contains only icon - additional "icon-only" class
                Additional "open-panel" class tells app to open panel when we click on this link
              -->
              <a href="#" class="link icon-only open-panel"><i class="icon icon-bars-blue"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href="about.html">About app</a>
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
	<div class="toolbar tabbar">
	    <div class="toolbar-inner">
		<a href="#tab1" class="tab-link active">
		    <i class="icon demo-icon-1"></i>
		</a>
		<a href="#tab2" class="tab-link">
		    <i class="icon demo-icon-2"></i>
		</a>
		<a href="#tab3" class="tab-link">
		    <i class="icon demo-icon-3"></i>
		</a>
		<a href="#tab4" class="tab-link">
		    <i class="icon demo-icon-4"></i>
		</a>
	    </div>
	</div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="path/to/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="path/to/my-app.js"></script>
  </body>
</html>   