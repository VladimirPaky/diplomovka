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
        ]);

          User::create([
        	'name' => 'admin2',
        	'email' => 'admin2@admin.com',
        	'password' => bcrypt('password'),
        ]);
    }
}
