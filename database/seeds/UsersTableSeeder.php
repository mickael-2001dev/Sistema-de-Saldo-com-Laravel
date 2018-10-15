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
        	'name'=>'Mickael Souza',
        	'email'=>'mickael.souza.if@gmail.com',
        	'password'=>bcrypt('13022001')
        ]);    
    }
}
