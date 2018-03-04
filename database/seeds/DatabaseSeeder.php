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
        $this->call(AdminSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseCategorySeeder::class);
        //$this->call(PostSeeder::class);
        
    }
}
