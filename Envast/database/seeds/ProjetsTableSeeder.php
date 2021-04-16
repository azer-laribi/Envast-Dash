<?php

use Illuminate\Database\Seeder;
use App\Projet;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projet::create([
             'user_id' => '1',
             'project_name' => 'Dashboard',
              'project_description' => 'Dashboard',
              'project_deadline' => '2020-08-23',
              


         ]);
}
}
