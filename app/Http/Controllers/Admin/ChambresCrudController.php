<?php

namespace App\Http\Controllers\Admin;
use App\Chambres;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ChambresRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ChambresCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ChambresCrudController extends CrudController
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
        CRUD::setModel(\App\Chambres::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/chambres');
        CRUD::setEntityNameStrings('chambres', 'chambres');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb();
        // CRUD::column('id');
        // CRUD::column('titre');
        // CRUD::column('sous-titre');
        // CRUD::column('description');
        // CRUD::column('photo');
        // CRUD::column('created_at');
        // CRUD::column('updated_at');
        // columns

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
        CRUD::setValidation(ChambresRequest::class);

        CRUD::setFromDb(); // fields
        CRUD::field('photo')->type('upload')->upload(true)->disk('public/photo');
        
        
        
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "photo";
        $disk = "public/photo";
        $destination_path = "public/photo";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
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
        CRUD::field('photo')->type('upload')->upload(true)->disk('public/photo');
    }
    public function store(ChambresRequest $request)
{
    $chambre = new Chambres();
    $chambre->fill($request->all());

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('public/photo');
        $chambre->photo = $path;
    }

    $chambre->save();

    // Rediriger vers la liste des chambres ou effectuer une autre action
    return Redirect::to('/admin/chambres');
}
}
