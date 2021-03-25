<?php

namespace Category\Controllers;

use Category\Forms\CategoryForm;
use Category\Models\Category;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryAddController extends AbstractActionController
{
    public function handleAction()
    {
        $form = new CategoryForm();
        $request = $this->getRequest();

        if ($request->isPost()) {
            $category = new Category();
            $categoryTable = $this->getServiceLocator()->get('Category\Models\CategoryTable');
            $form->setData($request->getPost());

            $category->exchangeArray($request->getPost()->toArray());
            $categoryTable->save($category);

            return $this->redirect()->toRoute('category_home');
        }

        $view = new ViewModel(['form' => $form]);
        $view->setTemplate('category/add');

        return $view;
    }
}