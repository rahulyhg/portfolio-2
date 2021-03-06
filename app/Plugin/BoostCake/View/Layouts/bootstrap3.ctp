<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		Scott Alexander Portfolio
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<style>
	body {
		padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
	}
	.affix {
		position: fixed;
		top: 60px;
		width: 220px;
	}
	body {
		background-color: white !important;
	}
	.navbar-brand:hover {
	color: #42dca3 !important;
	}
	#debug-kit-toolbar {
display: none;
}
@media (max-width: 767px) {

.page-header {
    padding-bottom: 9px;
    margin: 0px 0 20px;
    border-bottom: 1px solid #eee;
}
.fa-bars {
color: white !important;
}
}

	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->Html->css('grayscale');

	?>
</head>

<body>
 <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
 <a class="navbar-brand page-scroll" href="/">
                    <!--<i class="fa fa-play-circle"></i>-->  <span class="light">Scott</span> Alexander
                </a>


                          </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
	<?php echo $this->Html->link('Home', array(
					'controller' => 'projects',
					'action' => 'home'
				)); ?>

                    </li>
                    <li>
	<?php echo $this->Html->link('Portfolio', array(
					'controller' => 'projects',
					'action' => 'display'
				)); ?>


                    </li>
                    <li>
	<?php echo $this->Html->link('Contact', array(
					'controller' => 'skills',
					'action' => 'display'
				)); ?>


                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="container">

		<?php echo $this->fetch('content'); ?>

	</div><!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<?php echo $this->fetch('script'); ?>

</body>

            <!-- /.row -->
</html>
