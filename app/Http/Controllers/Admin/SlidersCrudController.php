<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SlidersRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SlidersCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SlidersCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Sliders::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/sliders');
        CRUD::setEntityNameStrings('sliders', 'sliders');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn(
            [
                'name' => 'id',
                'type' => 'number',
                'label' => 'ID',
            ]
        );

        $this->crud->addColumn(
            [
                'name' => 'nom',
                'type' => 'image',
                'label' => 'image',
            ]
        );
        $this->crud->addColumn(
            [
                'name' => 'titre',
                'type' => 'text',
                'label' => 'Titre',
            ]
        );
        
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SlidersRequest::class);

        $this->crud->addField(
            [   // Browse
                'label' => "image",
                'name' => "nom",
                'type' => 'upload',
                'upload' => true,
                // 'crop' => true,
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-6'
                ],
            ]
        );

        $this->crud->addField(
            [   // Browse
                'label' => "Titre",
                'name' => "titre",
                'type'  => 'text',
                
            ]
        );

        $this->crud->addField(
            [   // Browse
                'label' => "Description",
                'name' => "texte",
                'type'  => 'text',
                'wrapperAttributes' => [
                    'class' => 'form-group col-md-12'
                ],
            ]
        );
        $this->crud->addField(
            [   // Browse
                'label' => "Lien",
                'name' => "url",
                'type'  => 'text',
                'default' =>"/produits"
            ]
        );
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
