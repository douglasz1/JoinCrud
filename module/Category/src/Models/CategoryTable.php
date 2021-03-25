<?php

namespace Category\Models;

use Zend\Db\TableGateway\TableGateway;

class CategoryTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }

    public function getCategoryById($id)
    {
        $id = (int)$id;
        $rowset = $this->tableGateway->select(['id_categoria_produto' => $id]);
        $row = $rowset->current();

        if (!$row) {
            return null;
        }

        return $row;
    }

    public function save(Category $category)
    {
        $data = [
            'id_categoria_produto' => $category->id_categoria_produto,
            'nome_categoria'  => $category->nome_categoria,
        ];

        $id = (int) $category->id_categoria_produto;

        if ($id == 0) {
            $this->tableGateway->insert($data);
            return;
        }
        
        if ($this->getCategoryById($id)) {
            $this->tableGateway->update($data, ['id_categoria_produto' => $id]);
            return;
        }
    }

    public function deleteCategory($id)
    {
        $this->tableGateway->delete(['id_categoria_produto' => (int) $id]);
    }
}