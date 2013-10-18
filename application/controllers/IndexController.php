<?php

class IndexController extends Zend_Controller_Action
{
    public function preDispatch()
    {
        $this->view->headTitle('Predispatch example');
        $session = new Zend_Session_Namespace('Fronted');
        $session->hello = 'The session says hello!';
    }

    public function init()
    {

    }

    public function indexAction()
    {
        // action body
    }

    public function helloAction()
    {
        $session = new Zend_Session_Namespace('Fronted');
        $this->view->hello = $session->hello;
    }

    public function productsAction()
    {
        $vars = array(
            'products' => array('orange', 'kiwi'),
        );

        $this->view->assign($vars);
    }

    public function nameAction()
    {
        $this->view->controllerName = $this->_helper->Name();
    }

    public function exceptionAction()
    {
        throw new \Exception("This is a ZF 1 mock exception for testing exceptions.");
    }

    public function partialAction()
    {

    }
}
