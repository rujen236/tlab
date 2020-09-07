<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "Pranish",
            'email' => 'pranishmaharjan@gmail.com',
            'password' => bcrypt("123456"),
            'is_admin'=>true
        ]);
    }
}
