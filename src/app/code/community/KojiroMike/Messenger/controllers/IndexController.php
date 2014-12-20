<?php

/**
 * Class KojiroMike_Messenger_IndexController
 */
class KojiroMike_Messenger_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction()
    {
        $this->_redirectUrl('https://google.com');
        return;
    }
}