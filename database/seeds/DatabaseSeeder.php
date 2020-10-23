<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleTableSeeder::class);
    // Los usuarios necesitarán los roles previamente generados
        $this->call(UserTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
