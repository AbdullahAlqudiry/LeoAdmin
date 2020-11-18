<?php 

namespace App\Forms\Dashboard\Core;

use Alqudiry\FormBuilder\FormBuilder;
use Illuminate\Validation\Rule;
use App\Models\Role;

class UserForm extends FormBuilder {

    private $model = [
        'id' => null,
        'role_id' => null,
    ];

    function __construct($model = [])
    {    
        $this->model = empty($model) ? collect($this->model) : $model;
    }

    /**
     * Form fields
     */
    public function formFields()
    {
        return [
            [
                'id' => 'name', 
                'type' => 'text',
                'title' => 'name', 
                'attributes' => ['class' => 'form-control'],
                'value' => null,
                'parent_class' => 'col-sm-6',
            ],
    
            [
                'id' => 'email', 
                'type' => 'email',
                'title' => 'email', 
                'attributes' => ['class' => 'form-control'],
                'value' => null,
                'parent_class' => 'col-sm-6',
            ],

            [
                'id' => 'role_id', 
                'type' => 'select',
                'title' => 'role_id', 
                'attributes' => ['class' => 'form-control select2'],
                'options' => Role::pluck('name', 'id')->toArray(),
                'value' => $this->model['role_id'],
                'parent_class' => 'col-sm-6',
            ],
        ];
    }

    /**
     * Create form fields
     */
    public function createFormFields() 
    {
        return [
            [
                'id' => 'password', 
                'type' => 'password',
                'title' => 'password', 
                'attributes' => ['class' => 'form-control'],
                'value' => null,
                'parent_class' => 'col-sm-6',
            ],
            [
                'id' => 'password_confirmation', 
                'type' => 'password',
                'title' => 'password_confirmation', 
                'attributes' => ['class' => 'form-control'],
                'value' => null,
                'parent_class' => 'col-sm-6',
            ]
        ];
    }

    /**
     * Edit form fields
     */
    public function editFormFields()
    {
        return [

        ];
    }

    /**
     * General form validation
     */
    public function formValidation()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'exists:roles,id'],
        ];
    }

    /**
     * create form validation
     */
    public function createFormValidation()
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    /**
     * edit form validation 
     */
    public function editFormValidation()
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->model['id']) ]
        ];
    }

} 

?>