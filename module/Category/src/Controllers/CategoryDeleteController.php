<?php

namespace Category\Controllers;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryDeleteController extends AbstractActionController
{
    public function handleAction()
    {
        return new ViewModel([]);
    }
}