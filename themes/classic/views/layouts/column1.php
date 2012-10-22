<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
    <div id="banner">
        <?php $this -> widget('BannerSlider'); ?>
    </div>
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>