<?php

namespace Category\Forms;

use Zend\Form\Form;

class CategoryForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('category');

        $this->add([
            'name' => 'id_categoria_produto',
            'type' => 'Hidden'
        ]);

        $this->add([
            'name' => 'nome_categoria',
            'type' => 'text',
            'options' => [
                'label' => 'Nome',
                'required' => true,
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Salvar Dados',
                'id' => 'submitbutton',
            ],
        ]);
    }
}