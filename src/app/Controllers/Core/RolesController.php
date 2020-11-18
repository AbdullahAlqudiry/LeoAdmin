<?php

namespace App\Http\Controllers\Dashboard\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Forms\Dashboard\Core\RoleForm;
use App\Models\Role;
use App\Models\Permission;

class RolesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::latest()->get();

        return view('leoadmin.core.roles.index', compact(
            'roles'
        ));
    }


    /**
     * Show the form for creating the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $roleForm = new RoleForm();
        $permissions = Permission::all();

        return view('leoadmin.core.roles.create', compact(
            'roleForm',
            'permissions'
        ));
    }

    /**
     * store the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roleForm = new RoleForm();
        $roleForm->validate($request, 'create');

        $role = Role::create($request->all());

        // sync permissions
        $permissions = $request->get('permissions', []);
        $role->syncPermissions($permissions);


        session()->flash('success-message', __('strings.created successfully'));
        return redirect()->to(route('dashboard.core.roles.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Role $role)
    {
        $roleForm = new RoleForm($role);
        $permissions = Permission::all();

        return view('leoadmin.core.roles.edit', compact(
            'role',
            'roleForm',
            'permissions'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $roleForm = new RoleForm($role);
        $roleForm->validate($request, 'edit');

        // update role
        if($role->name != 'Admin') {
            $role->update($request->all());
        
            // sync permissions
            $permissions = $request->get('permissions', []);
            $role->syncPermissions($permissions);
        }


        session()->flash('success-message', __('strings.updated successfully'));
        return redirect()->to(route('dashboard.core.roles.index'));
    }

}
