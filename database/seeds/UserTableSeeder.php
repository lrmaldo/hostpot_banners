<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
       
       
        $user = new User();
        $user->name = 'Leo';
        $user->email = 'lrmaldo@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->name = 'Rafa';
        $user->email = 'rafa.nunez@sattlink.com';
        $user->password = bcrypt('MKO93edcv');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
