<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user ::create([
            'name'               => 'Ishan Weerakoon',
            'email'             => 'ishan@gmail.com',
            'password'           => Hash::make('password'),
            'remember_token'  => str_random(10), 
        ]);
    }
}
