<?php

namespace Category\Models;

class Category
{
    public $id_categoria_produto;
    public $nome_categoria;

    public function exchangeArray($data)
    {
        $this->id_categoria_produto = (isset($data['id_categoria_produto'])) ? $data['id_categoria_produto'] : null;
        $this->nome_categoria = (isset($data['nome_categoria'])) ? $data['nome_categoria'] : null;
    }
}
