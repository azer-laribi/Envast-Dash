<?php

use Illuminate\Database\Seeder;
use App\Membre;

class ProjetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membre::create([
             'user_id' => '1',
             'project_id' => '1',

         ]);
}
}
