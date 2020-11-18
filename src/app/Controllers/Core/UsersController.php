<?php

namespace App\Http\Controllers\Dashboard\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Forms\Dashboard\Core\UserForm;
use App\Models\User;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::latest()->get();

        return view('leoadmin.core.users.index', compact(
            'users'
        ));
    }


    /**
     * Show the form for creating the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $userForm = new UserForm();
        return view('leoadmin.core.users.create', compact(
            'userForm'
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
        $userForm = new UserForm();
        $userForm->validate($request, 'create');

        $request->merge([
            'password' => bcrypt($request->password)
        ]);

        $user = User::create($request->all());
        $user->syncRoles($request->role_id);

        session()->flash('success-message', __('strings.created successfully'));
        return redirect()->to(route('dashboard.core.users.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        $userForm = new UserForm($user);
        return view('leoadmin.core.users.edit', compact(
            'user',
            'userForm'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $userForm = new UserForm($user);
        $userForm->validate($request, 'edit');

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->syncRoles($request->role_id);
        
        session()->flash('success-message', __('strings.updated successfully'));
        return redirect()->to(route('dashboard.core.users.index'));
    }

}
