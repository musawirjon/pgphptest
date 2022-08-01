<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'John Smith',
            'email' => 'john@email.com',
            'password' => bcrypt('password'),
        ]);
        \DB::table('users')->insert([
            'name' => 'lisbet',
            'email' => 'lisbet@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
