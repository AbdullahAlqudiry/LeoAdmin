<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use App\Permission;

class Role extends SpatieRole 
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description',
        'guard_name',
    ];


    public static function syncDefaultPermissions()
    {
        // Sync Permissions
        $permissions = config('leoadmin.permissions');
        foreach ($permissions as $permission) {

            $permissionObject = Permission::where(
                'name', $permission['name']
            )->first();

            if ($permissionObject == null) {
                Permission::create($permission);
            }
        }

        // Create Roles - Here create basic roles only
        foreach (['Admin', 'User', 'Disabled'] as $roleName) {
            $role = self::where('name', $roleName)->first();

            if ($role == null) {
                $role = self::create(
                    [
                        'name' => $roleName
                    ]
                );
            }

            if ($role->name == 'Admin') {
                $role->syncPermissions(Permission::all());
            } else {
                $role->syncPermissions(Permission::where('name', 'LIKE', strtolower($role->name).'%')->get());
            }
        }
        
    }
}
