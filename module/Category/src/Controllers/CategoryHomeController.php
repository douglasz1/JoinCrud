<?php

namespace Category\Controllers;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryHomeController extends AbstractActionController
{
    public function handleAction()
    {
        $view = new ViewModel([
            'name' => 'Douglas',
            'lastName' => 'Santana',
            'xpto' => 'aaaaaaa',
            'categories' => [
                ['id' => 1, 'name' => 'A'],
                ['id' => 2, 'name' => 'B'],
                ['id' => 3, 'name' => 'C'],
            ]
        ]);

        $view->setTemplate('category/index');

        return $view;
    }
}