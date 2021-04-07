<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class CrudCourseController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Course");
        $this->crud->setRoute("admin/courses");
        $this->crud->setEntityNameStrings('course', 'courses');

        $this->crud->setColumns([
            [
                'title' => 'Title',
                'type' => 'text',
                'name' => 'title'
            ],
            [
                'title' => 'Content',
                'type' => 'text',
                'name' => 'content'
            ],
            [
                'name'      => 'image',
                'label'     => 'Image',
            ]
        ]);

        $this->crud->addFields([
            [
                'title' => 'Title',
                'type' => 'text',
                'name' => 'title'
            ],
            [
                'title' => 'Content',
                'type'  => 'textarea',
                'name' => 'content'
            ],
            [
                'name'      => 'img',
                'label'     => 'Image',
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
            ]
        ]);
    }
}
