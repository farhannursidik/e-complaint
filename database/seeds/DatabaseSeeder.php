<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
		 "name" => "farhan",
		 "email" => "anursidik17@gmail.com",
		 "hak_akses" =>"administrator",
		 "password" => Hash::make('admin')
 ]); 

        // $this->call(UserSeeder::class);
    }
}
