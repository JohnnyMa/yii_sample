<?php

Yii::import('zii.widgets.CPortlet');

class BannerSlider extends CPortlet
{
	protected function renderContent()
	{
        $currentController = Yii::app()->controller;
        if ('siteHome' == $currentController->id . $currentController->pageTitle) {
            $this->render('bannerSlider');
        }
	}
}
