<?php

use Illuminate\Database\Seeder;

use App\CourseCategory;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        CourseCategory::create([
        	'name' => 'Lesnícstvo',
        ]);

        CourseCategory::create([
        	'name' => 'Ovocinárstvo',
        ]);

        CourseCategory::create([
        	'name' => 'Zeleniárstvo',
        ]);
    }
}



