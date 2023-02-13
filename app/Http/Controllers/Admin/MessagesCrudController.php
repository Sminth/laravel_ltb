<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MessagesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MessagesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MessagesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Messages::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/messages');
        CRUD::setEntityNameStrings('un message', 'Messages defilants');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns
        $this->crud->addColumn([
            'name' => 'message',
            'type' => 'text',
            'label' => 'message défilant',
        ]);
        $this->crud->addColumn([
            'name' => 'lien',
            'type' => 'text',
            'label' => 'lien',
        ]);
        $this->crud->addColumn([
            'name' => 'activer',
            'type' => 'boolean',
            'label' => 'activer ?',
        ]);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MessagesRequest::class);

        // CRUD::setFromDb(); // fields
        $this->crud->addField([
            'name' => 'message',
            'type' => 'wysiwyg',
            'label' => 'message défilant',
        ]);

        $this->crud->addField([
            'name' => 'lien',
            'type' => 'text',
            'label' => 'lien (optionel)',
        ]);

        $this->crud->addField([
            'name' => 'activer',
            'type' => 'boolean',
            'label' => 'activer ? ',
            'default' => '1'
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
