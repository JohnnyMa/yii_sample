<?php
class StockController extends CController
{
    public function actions()
    {
        return array(
                'quote' => array(
                    'class' => 'CWebServiceAction',
                ),
        );
    }

    /**
     * @param string the name of the stock
     * @return float the price of the stock
     * @soap
     */
    public function getPrice($symbol)
    {
        $price = array('IBM' => 500, 'Google' => 1000);

        return isset($price[$symbol]) ? $price[$symbol] : 0;
    }
}

