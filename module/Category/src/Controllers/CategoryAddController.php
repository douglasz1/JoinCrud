<?php

namespace Category\Controllers;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryAddController extends AbstractActionController
{
    public function handleAction()
    {
        $view = new ViewModel([]);

        $view->setTemplate('category/add');

        return $view;
    }
}