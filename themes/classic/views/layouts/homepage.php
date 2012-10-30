<?php $this -> beginContent('/layouts/main'); ?>
<div id="content-container" class="container">
    <div id="banner">
        <?php $this -> widget('BannerSlider'); ?>
    </div>
    <div class="businessMenu">
        <?php $this -> widget('BusinessMenu'); ?>
    </div>
    
    <div id="login-block">
        <?php $this -> widget('LoginBlock'); ?>
    </div>

    <div id="content">
        <div class="news_list"><?php echo $content; ?></div>
        <div id="calendar"><?php //$this -> widget('SocialWidget'); ?></div>
    </div><!-- content -->
</div>
<?php $this -> endContent(); ?>