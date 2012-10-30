<?php

Yii::import('zii.widgets.CPortlet');

class LoginBlock extends CPortlet {
/*
    private $blockContent;

    public function init() {
        $this -> blockContent = Yii::app() -> params['BusinessMenuContent'];
        parent::init();
    }
*/

    protected function renderContent() {
        if (Yii::app() -> params['displayLoginBlock'])
            $this -> render('loginBlock');
    }
}
