<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
        	'name' => 'admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('password'),
        	'role_id' => 1,
        	'is_active' => 1,
        ]);

          User::create([
        	'name' => 'admin2',
        	'email' => 'admin@admin.com2',
        	'password' => bcrypt('password2'),
        	'role_id' => 1,
        	'is_active' => 1,
        ]);
    }
}
