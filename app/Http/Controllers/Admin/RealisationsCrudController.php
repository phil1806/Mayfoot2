<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RealisationsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RealisationsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RealisationsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Realisations::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/realisations');
        CRUD::setEntityNameStrings('realisations', 'realisations');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id')->type('number');
        CRUD::column('titre')->type('text');
        CRUD::column('description')->type('tinymce');
        CRUD::column('image')->type('image');
        CRUD::column('image1')->type('image');
        CRUD::column('created_at')->type('datetime');
        CRUD::column('updated_at')->type('datetime');

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RealisationsRequest::class);

        //ici les differents fields dans le back office
        $this->crud->addField([
                'label' => "Image before",
                'name' => "image",
                'type' => 'image',
                'crop' => true,
                'aspect_ratio' =>-1,
                'disk'      => 'uploads',
                'prefix'    => 'uploads/images'
        ]);

        $this->crud->addField([
                'label' => "Image after",
                'name' => "image1",
                'type' => 'image',
                'crop' => true,
                'aspect_ratio' =>-1,
                'disk'      => 'uploads',
                'prefix'    => 'uploads/images'
        ]);
        CRUD::field('titre')->type('text');

        CRUD::AddField([
                    'name'  => 'description',
                    'label' => 'Description',
                    'type'  => 'tinymce',
        ],);

        //CRUD::field('created_at');

    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
