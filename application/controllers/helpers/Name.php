<?php


class Book_Action_Helper_Name extends Zend_Controller_Action_Helper_Abstract
{
    public function direct()
    {
        $controller =  $this->getActionController();
        return get_class($controller);
    }
}