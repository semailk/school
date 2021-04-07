<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class CrudGalleryController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Gallery");
        $this->crud->setRoute("admin/galleries");
        $this->crud->setEntityNameStrings('gallery', 'galleries');

        $this->crud->setColumns([
            [
                'name' => 'id',
                'label' => 'id'
            ],
            [
              'name' => 'title',
              'label' => 'title',
              'type' => 'text'
            ],
            [
                'name' => 'img',
                'title' => 'Images'
            ]
        ]);

        $this->crud->addFields([
            [
                'name' => 'title',
                'label' => 'title',
                'type' => 'text'
            ],
            [
                'name'      => 'img',
                'label'     => 'Image',
                'type'      => 'upload_multiple',
                'upload'    => true,
                'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
//                'temporary' => 10 //
            ]
        ]);
    }
}
