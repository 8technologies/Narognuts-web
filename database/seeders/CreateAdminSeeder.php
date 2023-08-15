<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role= Role::create(['name'=>'Admin']);
        $user = User::create([
        'FirstName'=>'Mubiito',
        'MiddleName'=>'Ed',
        'LastName'=>'Edward',
        'Sex'=>'Male',
        'PhoneNumber'=>'077875467765',
        'UserName'=>'edward',
        'email'=>'mubiitoedward6@gmail.com',
        'password'=>'qqqqqqqqqq',
        'role'=>$role->name,
        
        ]);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
