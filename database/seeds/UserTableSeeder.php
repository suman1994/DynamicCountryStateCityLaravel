<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i< 5;$i++){
        	User::create([
        		'name' => str_random(7),
        		'email' => str_random(9).'@gmail.com',
        		'password' => bcrypt('123456')
        	]);
        }
    }
}
