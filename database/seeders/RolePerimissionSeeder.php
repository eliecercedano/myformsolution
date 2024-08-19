<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\FirebaseException;


class RolePerimissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    use RegistersUsers;
    protected $auth;

    public function run()
    {
        $role1 = Role::create(['name' => 'SuperAdmin']);
        $role2 = Role::create(['name' => 'Administrator']);
        $role3 = Role::create(['name' => 'Consultor']);
        $role4 = Role::create(['name' => 'Client']);
        $role5 = Role::create(['name' => 'Analyst']);

        Permission::create(['name' => 'dashboard', 'app_name' => 'See Dashboard'])->syncRoles($role1, $role2, $role3, $role4, $role5);
        Permission::create(['name' => 'see-role', 'app_name' => 'See Role'])->syncRoles($role1);
        Permission::create(['name' => 'create-role', 'app_name' => 'Create Role'])->syncRoles($role1);
        Permission::create(['name' => 'update-role', 'app_name' => 'Update Role'])->syncRoles($role1);
        Permission::create(['name' => 'delete-role', 'app_name' => 'Delete Role'])->syncRoles($role1);
        Permission::create(['name' => 'assign-role', 'app_name' => 'Assign Role'])->syncRoles($role1);
        Permission::create(['name' => 'disable-user', 'app_name' => 'Disable User'])->syncRoles($role1);
        Permission::create(['name' => 'enable-user', 'app_name' => 'Enable User'])->syncRoles($role1);
        Permission::create(['name' => 'invitate-user', 'app_name' => 'Invitate User'])->syncRoles($role3);

/*
        Permission::create(['name' => 'see-plan', 'app_name' => 'See Plan']);
        Permission::create(['name' => 'create-plan', 'app_name' => 'Create Plan']);
        Permission::create(['name' => 'update-plan', 'app_name' => 'Update Plan']);
        Permission::create(['name' => 'delete-plan', 'app_name' => 'Delete Plan']);
*/
        //User SuperAdmin

        $user = User::create([
            'email' => 'superadmin@myformsolution.com',
            'displayName' => 'Super Administrador',
        ]);
        $user->assignRole($role1);

        //User Admin

        $user = User::create([
            'email' => 'admin@myformsolution.com',
            'displayName' => 'Administrador',
        ]);
        $user->assignRole($role2);

        //User Analyst

        $user = User::create([
            'email' => 'analyst@myformsolution.com',
            'displayName' => 'Analyst',
        ]);
        $user->assignRole($role5);
    }
}
