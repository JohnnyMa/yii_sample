<?php

Yii::import('zii.widgets.CPortlet');

/**
 * generate social widgets.
 * include:
 * 1. sina weibo
 * 2. qq
 * 3. email
 */
class SocialWidget extends CPortlet {
    public function init() {
        $this -> title = CHtml::encode('On-Line Contact');
        parent::init();
    }

    protected function renderContent() {
        $this -> render('socialWidget');
    }

}
