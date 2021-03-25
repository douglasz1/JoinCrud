<?php

namespace Category\Controllers;

use Category\Forms\CategoryForm;
use Category\Models\Category;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoryEditController extends AbstractActionController
{
    public function handleAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);

        if (!$id) {
            return $this->redirect()->toRoute('category_home', ['action' => 'handle']);
        }

        $categoryTable = $this->getServiceLocator()->get('Category\Models\CategoryTable');
        $category = $categoryTable->getCategoryById($id);

        if (!$category) {
            return $this->redirect()->toRoute('category_home', ['action' => 'handle']);
        }

        $form  = new CategoryForm();
        $form->bind($category);
        $request = $this->getRequest();

        if ($request->isPost()) {
            $form->setData($request->getPost());
            $categoryModel = new Category();
            $categoryModel->exchangeArray($request->getPost()->toArray());

            $categoryTable->save($categoryModel);

            return $this->redirect()->toRoute('category_home');
        }

        $view = new ViewModel([
            'id' => $id,
            'form' => $form
        ]);

        $view->setTemplate('category/edit');

        return $view;
    }
}