<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/nivo-slider.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this -> pageTitle); ?></title>
</head>

<body>
<div class="container" id="page">
	<div id="header">
		<div id="logo"><a href="<?php echo Yii::app()->getHomeUrl() ?>"><?php echo CHtml::encode(Yii::app() -> name); ?></a></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php
        if (Yii::app() -> params['bannerWidth']) {
            $this -> widget('zii.widgets.CMenu', array('items' => array( array('label' => 'Home', 'url' => array('site/index')), array('label' => 'News', 'url' => array('post/index')), array('label' => 'Contact', 'url' => array('site/contact')), array('label' => 'About', 'url' => array('site/page', 'view' => 'about')), array('label' => 'Logout (' . Yii::app() -> user -> name . ')', 'url' => array('site/logout'), 'visible' => !Yii::app() -> user -> isGuest)), ));
        }
		?>
	</div><!-- mainmenu -->

	<?php $this -> widget('zii.widgets.CBreadcrumbs', array('links' => $this -> breadcrumbs, )); ?><!-- breadcrumbs -->

	<?php echo $content; ?>

	<div id="footer">
	    <!-- 
		Copyright &copy; <?php echo date('Y'); ?> by JohnnyMa.
		-->
		<?php echo Yii::app()->params['copyrightInfo'] ?>
		<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
		<?php echo Yii::authorLink(); ?>
	</div><!-- footer -->

</div><!-- page -->
<script type="text/javascript" src="<?php echo Yii::app() -> request -> baseUrl; ?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app() -> request -> baseUrl; ?>/js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo Yii::app() -> request -> baseUrl; ?>/js/main.js"></script>
</body>
</html>