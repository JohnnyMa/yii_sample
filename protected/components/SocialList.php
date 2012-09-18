<?php

Yii::import('zii.widgets.CPortlet');

class SocialList extends CPortlet
{
    public function init()
    {
        $this->title=CHtml::encode('Find me');
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('socialList');
    }
}

