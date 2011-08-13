<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Code by BrainCube.us - Smart solutions for the Web.
 * @author	Max Degterev <max@braincube.us>
 * @copyright (c) 2011 BrainCube
 */

// In case you run CI from subfolder
$project = base_url();
?><!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $layout_company.$layout_title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="Max Degterev - front-end superhero">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php /* You can pick one of these links if you need specific toush icon
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $project; ?>apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $project; ?>apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $project; ?>apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $project; ?>apple-touch-icon-precomposed.png">
	<link rel="apple-touch-icon" href="<?php echo $project; ?>apple-touch-icon.png"/>
	<link rel="shortcut icon" href="<?php echo $project; ?>favicon.ico"/>
	*/?>
	<meta http-equiv="cleartype" content="on">

	<?php /* Minify script removed for easier development. Remember to turn it on for production! */ ?>
	<link rel="stylesheet" href="<?php echo $project; ?>css/reset.css">
	<link rel="stylesheet" href="<?php echo $project; ?>css/style.css">

	<?php /* You can define what files you want to load in /min/groupsConfig.php */ ?>
	<?php /*	<link rel="stylesheet" href="<?php echo $project; ?>css/style.001.css">*/?>

	<script src="<?php echo $project; ?>js/libs/modernizr-2.0.6.min.js"></script>
	<?php /* Respond is a polyfill for min/max-width CSS3 Media Queries */ ?>
	<?php /*	<script src="<?php echo $project; ?>js/libs/respond.min.js"></script>*/?>
	<?php echo $this->tpl->get_header(); ?>

</head>
<body>

	<header>

	</header>
	<div id="main" role="main">
<?php echo $layout_content; ?>

    </div>

	<footer>
		<?php echo $layout_year.' &copy; '.$layout_company; ?>

	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo $project; ?>js/libs/jquery-1.6.2.min.js"><\/script>')</script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo $project; ?>js/libs/jquery-ui-1.8.15.custom.min.js"><\/script>')</script>

	<?php /* Extend $.animate() to detect CSS transitions for Webkit, Mozilla and Opera and convert animations automatically. */ ?>
	<?php /*	<script src="<?php echo $project; ?>js/libs/jquery.animate-enhanced.min.js"></script>*/?>

	<!-- <script src="<?php echo $project; ?>js/script.001.js"></script> -->
	<script src="<?php echo $project; ?>js/script.js"></script>
	<?php echo $this->tpl->get_footer(); ?>

	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
		load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>

</body>
</html>