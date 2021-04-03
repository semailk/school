<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

class CrudAccountController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Account");
        $this->crud->setRoute("admin/accounts");
        $this->crud->setEntityNameStrings('account', 'accounts');

        $this->crud->setColumns([
            [
                'name' => 'user',
                'label' => 'name',
                'type' => 'relationship',
                'attribute' => 'name',
            ],
            [
                'name' => 'home_work',
                'label' => 'Home Work',
                'type' => 'text'
            ],
            [
                'label' => 'Оценка',
                'name' => 'appraisal',
//                'type'  => 'array',
            ],
            [
                'label' => 'Дата посещения',
                'name' => 'attendance',
            ],

        ]);

        $this->crud->addFields([  // Select
            [
                'label' => "User",
                'type' => 'select',
                'name' => 'user_id',
                'entity' => 'user',
                'model' => "App\Models\User",
                'attribute' => 'name',
                'options' => (function ($query) {
                    return $query->get();//Все категории которые не имеют чаил  дов.
                }),
            ],
            [
                'label' => 'Дата посещения',
                'name' => 'attendance',
            ],
            [
                'label' => 'Домашняя работа',
                'name' => 'home_work',
            ],
            [
                'label' => 'Оценка',
                'name' => 'appraisal',
            ]
        ],
            );


    }

}
