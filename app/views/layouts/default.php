<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Code by BrainCube.us - Smart solutions for the Web.
 * @author	Max Degterev <max@braincube.us>
 * @copyright (c) 2011 BrainCube
 */

$project = base_url();
?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $layout_company.$layout_title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="BrainCube.us - Smart solutions for the Web">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php echo $project; ?>favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo $project; ?>apple-touch-icon.png">

	<link rel="stylesheet" href="<?php echo $project;?>css/style.001.css">
	<script src="<?php echo $project; ?>js/libs/modernizr-1.7.min.js"></script>
	<?php echo $this->tpl->get_header(); ?>

</head>

<body>

	<header>

	</header>

	<?php echo $layout_content; ?>

	<footer>
		<?php echo $layout_year.' &copy; '.$layout_company; ?>

	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script> -->
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $project; ?>js/libs/jquery-1.6.min.js"%3E%3C/script%3E'))</script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $project; ?>js/libs/jquery-ui-1.8.12.custom.min.js"%3E%3C/script%3E'));</script>

	<!-- scripts concatenated and minified -->
		<!-- <script src="<?php echo $project;?>js/script.001.js"></script> -->
		<script src="<?php echo $project; ?>js/script.js"></script>
	<!-- end concatenated and minified scripts-->
	<?php echo $this->tpl->get_footer(); ?>

	<!--[if lt IE 7 ]>
		<script src="<?php echo $project; ?>js/libs/dd_belatedpng.js"></script>
		<script src="<?php echo $project; ?>js/ie6fix.js"></script>
	<![endif]-->

	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

<!--
	        3
	800        1
	0   8   33
	0 5 5       7
	8    5  !
	5 5 5

-->
</body>
</html>