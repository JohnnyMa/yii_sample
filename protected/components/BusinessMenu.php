<?php

Yii::import('zii.widgets.CPortlet');

class BusinessMenu extends CPortlet {
    private $blockContent;

    public function init() {
        $this -> blockContent = Yii::app() -> params['BusinessMenuContent'];
        parent::init();
    }

    protected function renderContent() {
        if (Yii::app() -> params['displayBusinessMenuBlock'])
            $this -> render('businessMenu');
    }
}
