<?php

use Illuminate\Database\Seeder;
use App\Tache;

class TachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Tache::create([
           'user_id' => '1',
           'Projet_id' => '3',
           'tache_name' => 'Dashboard',
            'tache_description' => 'Dashboard',
            'start_date' => '2020-08-23',
            'end_date' => '2020-08-26',
            'status' => '0',


       ]);

    }
}
