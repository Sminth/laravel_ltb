<?php

namespace App\Http\Controllers\Admin;
use App\Models\activites;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ActivitesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ActivitesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ActivitesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Activites::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/activites');
        CRUD::setEntityNameStrings('activites', 'activites');
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
        /*CRUD::column('id');
        CRUD::column('titre');
        CRUD::column('sous-titre');
        CRUD::column('description');
        CRUD::column('photo');
        CRUD::column('created_at');
        CRUD::column('updated_at'); */

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
        CRUD::setValidation(ActivitesRequest::class);

        CRUD::setFromDb(); // fields
        CRUD::field('photo')->type('upload')->upload(true)->disk('public/photo');


        /* CRUD::field('id');
        CRUD::field('titre');
        CRUD::field('sous-titre');
        CRUD::field('description');
        CRUD::field('photo');
        CRUD::field('created_at');
        CRUD::field('updated_at'); */

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
        CRUD::field('photo')->type('upload')->upload(true)->disk('public/photo');

    }

    public function setImageAttribute($value)
    {
        $attribute_name = "photo";
        $disk = "public/photo";
        $destination_path = "public/photo";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function store(activitesRequest $request)
{
    $activites = new activites();
    $activites->fill($request->all());

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('public/photo');
        $activites->photo = $path;
    }

    $activites->save();

    // Rediriger vers la liste des chambres ou effectuer une autre action
    return Redirect::to('/admin/activites');
}
}
