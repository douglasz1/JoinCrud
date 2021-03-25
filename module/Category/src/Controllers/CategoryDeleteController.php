<?php

namespace Category\Controllers;

use Zend\Mvc\Controller\AbstractActionController;

class CategoryDeleteController extends AbstractActionController
{
    public function handleAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);

        if (!$id) {
            return $this->redirect()->toRoute('category_home', ['action' => 'handle']);
        }

        $categoryTable = $this->getServiceLocator()->get('Category\Models\CategoryTable');
        $category = $categoryTable->getCategoryById($id);

        if (!$category) {
            return $this->redirect()->toRoute('category_home', ['action' => 'handle']);
        }

        $categoryTable->delete($id);

        return $this->redirect()->toRoute('category_home', ['action' => 'handle']);
    }
}