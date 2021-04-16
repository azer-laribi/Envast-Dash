<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
           'name' => 'azer',
           'phone' => '9058910',
            'usertype' => 'chef',
            'post' => 'ingenieur',
            'email' => 'azer@gamil.com',
            'password' => Hash::make('123456') ,

       ]);
    }
}
