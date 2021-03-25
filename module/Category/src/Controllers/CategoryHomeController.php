<?php

namespace Category\Controllers;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryHomeController extends AbstractActionController
{
    public function handleAction()
    {
        /*echo '<pre>';
        print_r($this->getServiceLocator());
        die;*/

        $categoryTable = $this->getServiceLocator()->get('Category\Models\CategoryTable');

        $view = new ViewModel([
            //'categories' => $categoryTable->fetchAll()
            'categories' => []
        ]);

        $view->setTemplate('category/index');

        return $view;
    }
}