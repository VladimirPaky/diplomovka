<?php

use Illuminate\Database\Seeder;

use App\PostCategory;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        PostCategory::create([
        	'name' => 'Lesnícstvo',
        ]);

        PostCategory::create([
        	'name' => 'Ovocinárstvo',
        ]);

        PostCategory::create([
        	'name' => 'Zeleniárstvo',
        ]);
    }
}
