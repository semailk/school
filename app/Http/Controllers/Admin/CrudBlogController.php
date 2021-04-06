<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

class CrudBlogController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel("App\Models\Blog");
        $this->crud->setRoute("admin/blogs");
        $this->crud->setEntityNameStrings('blog', 'blogs');

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
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                'temporary' => 10 //
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
                // optional:
                'temporary' => 10 //
            ]
        ]);
    }
}
