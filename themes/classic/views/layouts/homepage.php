<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
    <?php if(Yii::app()->params['displayBanner']) : ?>
    <div id="banner">
        <?php $this -> widget('BannerSlider'); ?>
    </div>
    <?php endif; ?>
	<div id="content">
	    <div class="news_list"><?php echo $content; ?></div>
		<div id="calendar"><?php //$this -> widget('SocialWidget'); ?></div>
	</div><!-- content -->
</div>
<?php $this -> endContent(); ?>