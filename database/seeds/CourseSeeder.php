<?php

use Illuminate\Database\Seeder;

use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	Course::create([
    		'title' => 'Kurz 1',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
    		'type' => 'Online',
    		'teacher' => 'prof. Janko Mrkvicka',
    		'price' => '90 € /osoba',
    		'certificate' => true,
    		'additional_info' => 'Kurz zacne ked bude 20 prihlasenych'
    	]);


    	Course::create([
    		'title' => 'Kurz 2',
    		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod',
    		'type' => 'Skolenie',
    		'city' => 'Nitra',
    		'teacher' => 'prof. Janko Cesnak',
    		'price' => '45 € /osoba',
    		'certificate' => false,
    		'additional_info' => 'Kurz zacne ked bude 10 prihlasenych'
    	]);

    }
}


