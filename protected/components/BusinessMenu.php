<?php

Yii::import('zii.widgets.CPortlet');

class BusinessMenu extends CPortlet {
    private $blockContent;

    public function init() {
        $this -> blockContent = Yii::app() -> params['BusinessMenuContent'];
        parent::init();
    }

    protected function renderContent() {
        var_dump($this -> blockContent);
        die ;

        if (Yii::app() -> params['displayBusinessMenuBlock'])
            $this -> render('businessMenu');
    }

}
