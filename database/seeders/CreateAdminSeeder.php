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
        'FirstName'=>'Mbabazi',
        'MiddleName'=>'Isaac',
        'LastName'=>'Isaac',
        'Sex'=>'Male',
        'PhoneNumber'=>'0780602550',
        'UserName'=>'edward',
        'email'=>'mbabaziisaac@gmail.com',
        'password'=>'isaac1234',
        'role'=>$role->name,
        
        ]);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
