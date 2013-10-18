<?php

class FormController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $form = new Zend_Form('person');
        $form->setAction($this->view->url());
        $form->addElement('text','firstname', array('label' => 'First name'));
        $form->addElement('text','lastname', array('label' => 'Last name'));
        $form->addElement('submit', 'save', array('label' => 'Send'));
        $this->view->form = $form;
    }
}
