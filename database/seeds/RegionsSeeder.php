<?php

use Illuminate\Database\Seeder;

use App\Region;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Region::create([
        	'region' => 'Bratislava',
        ]);

        Region::create([
        	'region' => 'Záhorie',
        ]);

        Region::create([
        	'region' => 'Trnavsko',
        ]);

        Region::create([
        	'region' => 'Podunajsko',
        ]);

        Region::create([
        	'region' => 'Dolné Pohronie',
        ]);

        Region::create([
        	'region' => 'Poiplie',
        ]);

        Region::create([
        	'region' => 'Ponitrie',
        ]);

        Region::create([
        	'region' => 'Stredné Považie',
        ]);

        Region::create([
        	'region' => 'Horné Považie',
        ]);

        Region::create([
        	'region' => 'Tekov',
        ]);

        Region::create([
        	'region' => 'Hont',
        ]);

        Region::create([
        	'region' => 'Pohronie',
        ]);

        Region::create([
        	'region' => 'Turiec',
        ]);

        Region::create([
        	'region' => 'Horehronie',
        ]);

        Region::create([
        	'region' => 'Liptov',
        ]);

        Region::create([
        	'region' => 'Kysuce',
        ]);

        Region::create([
        	'region' => 'Orava',
        ]);

      	Region::create([
        	'region' => 'Podpoľanie',
        ]);

           Region::create([
        	'region' => 'Novohrad',
        ]);

    	Region::create([
        	'region' => 'Gemer',
        ]);

 		Region::create([
        	'region' => 'Spiš',
        ]);

        Region::create([
        	'region' => 'Abov',
        ]);

      	Region::create([
        	'region' => 'Šariš',
        ]);

       	Region::create([
        	'region' => 'Horný Zemplín',
        ]);

            Region::create([
        	'region' => 'Dolný Zemplín',
        ]);

        Region::create([
        	'region' => 'Zamagurie',
        ]);

        Region::create([
        	'region' => 'Horná Nitra',
        ]);

        Region::create([
        	'region' => 'Tatry',
        ]);
    }
}
