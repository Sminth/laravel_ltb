<?php

namespace App\Http\Controllers\Admin;
use App\Models\DocumentsLegaux;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DocumentsLegauxRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DocumentsLegauxCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DocumentsLegauxCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DocumentsLegaux::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/documents-legaux');
        CRUD::setEntityNameStrings('documents legaux', 'documents legauxes');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('nom');
        CRUD::column('contenu');
        CRUD::column('fichier');
        CRUD::column('created_at');
        CRUD::column('updated_at');

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
        CRUD::setValidation(DocumentsLegauxRequest::class);

        CRUD::field('id');
        CRUD::field('nom');
        CRUD::field('contenu');
        CRUD::field('fichier');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('fichier')->type('upload')->upload(true)->disk('public/photo');

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
        CRUD::field('fichier')->type('upload')->upload(true)->disk('public/photo');
    }
    public function setFichierAttribute($value)
{
    $attribute_name = "fichier";
    $disk = "public/photo";
    $destination_path = "public/photo";

    $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

    // return $this->attributes[$attribute_name]; // uncomment if this is a translatable field
}
public function store(DocumentsLegauxRequest $request)
{
    $DocumentsLegaux = new DocumentsLegaux();
    $DocumentsLegaux->fill($request->all());

    if ($request->hasFile('fichier')) {
        $path = $request->file('fichier')->store('public/files');
        $DocumentsLegaux->fichier = $path;
    }

    $DocumentsLegaux->save();

    // Rediriger vers la liste des activités ou effectuer une autre action
    return Redirect::to('/admin/documents-legaux');
}
}
