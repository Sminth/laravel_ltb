<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommunesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CommunesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommunesCrudController extends CrudController
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
        if (!backpack_user()->hasRole('admin')) {
            $this->crud->denyAccess(['create', 'update', 'delete']);
        }
        CRUD::setModel(\App\Models\Communes::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/communes');
        CRUD::setEntityNameStrings('commune', 'communes');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'label' => "Ville",
            'type' => 'select2',
            'name' => 'code_ville',// the db column for the foreign key
            // optional
            'entity'    => 'ville', // the method that defines the relationship in your Model
            'model'     => "App\Models\Villes", // foreign key model
            'attribute' => 'nom', // foreign key attribute that is shown to user
            'default'   => 1 // set the default value of the select2
        ]);

        $this->crud->addColumn([
            'name' => 'code',
            'type' => 'text',
            'label' => "code"
        ]);

        $this->crud->addColumn([
            'name' => 'nom',
            'type' => 'text',
            'label' => "Nom"
        ]);

        $this->crud->addColumn([
            'name' => 'enabled',
            'type' => 'boolean',
            'label' => "activer"
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CommunesRequest::class);

        $this->crud->addField([
            'label' => "Ville",
            'type' => 'select2',
            'name' => 'code_ville',// the db column for the foreign key
            // optional
            'entity'    => 'ville', // the method that defines the relationship in your Model
            'model'     => "App\Models\Villes", // foreign key model
            'attribute' => 'nom', // foreign key attribute that is shown to user
            'default'   => 1 // set the default value of the select2
        ]);

        $this->crud->addField([
            'name' => 'code',
            'type' => 'text',
            'label' => "code de la commune"
        ]);

        $this->crud->addField([
            'name' => 'nom',
            'type' => 'text',
            'label' => "Nom"
        ]);

        $this->crud->addField([
            'name' => 'enabled',
            'type' => 'boolean',
            'label' => "activer"
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
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
