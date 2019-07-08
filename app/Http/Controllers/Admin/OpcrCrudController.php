<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OpcrRequest as StoreRequest;
use App\Http\Requests\OpcrRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class OpcrCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class OpcrCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Opcr');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/opcr');
        $this->crud->setEntityNameStrings('opcr', 'Office Performance Commitment Review');
        
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        //Custom View
        //$this->crud->setCreateView('your-view')

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        // Columns
        $this->crud->addColumn(['name' => 'output', 'type' => 'ckeditor', 'label' => 'Output']);
        $this->crud->addColumn(['name' => 'success_indicator', 'type' => 'ckeditor', 'label' => 'Success Indicator']);
        $this->crud->addColumn(['name' => 'actual_accomplishment', 'type' => 'ckeditor', 'label' => 'Actual Accomplishment']);

        // Fields
        $this->crud->addField(['name' => 'output', 'type' => 'ckeditor', 'label' => 'Output']);
        $this->crud->addField(['name' => 'success_indicator', 'type' => 'ckeditor', 'label' => 'Success Indicator']);
        $this->crud->addField(['name' => 'actual_accomplishment', 'type' => 'ckeditor', 'label' => 'Actual Accomplishment']);

        // add asterisk for fields that are required in OpcrRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
