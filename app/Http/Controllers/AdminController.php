<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function init()
    {
        $count_user = User::count();
        
        if($count_user > 0)
        {
            return redirect(route('welcome'))->with('error','You can not do this action');
        }

        // dd($count_user);
        // Créer des permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // Créer des rôles et attribuer des permissions
        $writer_role = Role::create(['name' => 'writer']);
        $writer_role->givePermissionTo('publish articles');
        $writer_role->givePermissionTo('edit articles');

        $admin_role = Role::create(['name' => 'admin']);
        $this->adminPermissions($admin_role);

        $super_admin_role = Role::create(['name' => 'super_admin']);
        $super_admin_role->givePermissionTo(Permission::all());

        $super_user = $this->create_super_user();
        $super_user->assignRole('super_admin');
        return redirect(route('login'))->with('success', 'Super User Is Created Succefully!');
    }

    private function adminPermissions(Role $role)
    {
        $role->givePermissionTo('publish articles');
        $role->givePermissionTo('unpublish articles');
        $role->givePermissionTo('edit articles');
        $role->givePermissionTo('delete articles');
    }

    private function create_super_user($first_name="Aristide", $last_name="GNIMASSOU", $email="aristechdev@gmail.com", $telephone="620407236", String $password='P@$$word2024', $first_login=true, $status=1)
    {
        
        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            // 'name' => "ArisTech",
            'email' => $email,
            'telephone' => $telephone,
            'password' => Hash::make($password),
            'first_login' => $first_login,
            'status' => 1,
            'role' => "super_admin",
        ];
        $user = User::create($data);
        return $user;
    }
}
