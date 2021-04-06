<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

class CrudContactController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Contact");
        $this->crud->setRoute("admin/contacts");
        $this->crud->setEntityNameStrings('contact', 'contacts');

        $this->crud->setColumns([
            [
                'name' => 'first_name',
                'label' => 'First Name',
            ],
            [
                'name' => 'last_name',
                'label' => 'Last Name'
            ],
            [
                'name' => 'phone',
                'label' => 'phone'
            ],
            [
                'name' => 'message',
                'label' => 'Message'
            ]
        ]);

        $this->crud->addFields([
            [
                'name' => 'first_name',
                'label' => 'First Name',
                'type' => 'text'
            ],
            [
                'name' => 'last_name',
                'label' => 'Last Name',
                'type' => 'text'
            ],
            [
                'name' => 'phone',
                'label' => 'phone',
                'type' => 'text'
            ],
            [
                'name' => 'message',
                'label' => 'Message',
                'type' => 'textarea'
            ]
        ]);
    }
}
