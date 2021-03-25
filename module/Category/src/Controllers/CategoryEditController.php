<?php

namespace Category\Controllers;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryEditController extends AbstractActionController
{
    public function handleAction()
    {
        $view = new ViewModel([]);

        $view->setTemplate('category/edit');

        return $view;
    }
}