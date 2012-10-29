<?php

Yii::import('zii.widgets.CPortlet');

class BannerSlider extends CPortlet {
    protected function renderContent() {
        $currentController = Yii::app() -> controller;
        if (Yii::app() -> params['displayBanner'] && 'siteHome' == $currentController -> id . $currentController -> pageTitle) {
            $this -> render('bannerSlider');
        }
    }

}
