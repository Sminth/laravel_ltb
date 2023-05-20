<?php

namespace App\Http\Controllers\Admin;
use App\Categ_galerie;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategGalerieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategGalerieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategGalerieCrudController extends CrudController
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
        CRUD::setModel(\App\Models\CategGalerie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/categ-galerie');
        CRUD::setEntityNameStrings('categ galerie', 'categ galeries');
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
        CRUD::column('libelle');
        CRUD::column('video');
        CRUD::column('etat');
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
        CRUD::setValidation(CategGalerieRequest::class);

        CRUD::field('id');
        CRUD::field('libelle');
        CRUD::field('video');
        CRUD::field('etat');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('video')->type('upload')->upload(true)->disk('public/photo');

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
        CRUD::field('video')->type('upload')->upload(true)->disk('public/photo');
    }

    public function setVideoAttribute($value)
{
    $attribute_name = "video";
    $disk = "public/photo";
    $destination_path = "public/photo";

    $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

    // return $this->attributes[$attribute_name]; // uncomment if this is a translatable field
}
public function store(CategGalerieRequest $request)
{
    $Categ_galerie = new Categ_galerie();
    $Categ_galerie->fill($request->all());

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('public/photo');
        $Categ_galerie->photo = $path;
    }
    if ($request->hasFile('video')) {
        $path = $request->file('video')->store('public/photo');
        $Categ_galerie->video = $path;
    }

    $Categ_galerie->save();

    // Rediriger vers la liste des chambres ou effectuer une autre action
    return Redirect::to('/admin/categ-galerie');
}
}
