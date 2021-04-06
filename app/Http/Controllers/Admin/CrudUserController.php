<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

class CrudUserController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\User");
        $this->crud->setRoute("admin/users");
        $this->crud->setEntityNameStrings('user', 'users');

        $this->crud->setColumns([
            [
                'title' => 'Name',
                'type' => 'text',
                'name' => 'name'
            ],
            [
                'title' => 'Email',
                'type' => 'text',
                'name' => 'email'
            ],
            [
                'title' => 'Phone',
                'type' => 'text',
                'name' => 'phone'
            ],
            [
                'name'      => 'img',
                'label'     => 'Image',
            ]
        ]);

        $this->crud->addFields([
            [
                'title' => 'Name',
                'type' => 'text',
                'name' => 'name'
            ],
            [
                'title' => 'Email',
                'type' => 'text',
                'name' => 'email'
            ],
            [
                'title' => 'Phone',
                'type' => 'text',
                'name' => 'phone'
            ],
            [
                'name'      => 'img',
                'label'     => 'Image',
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
//                'temporary' => 10 //
            ]
        ]);
    }
}
