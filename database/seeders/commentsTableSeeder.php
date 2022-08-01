<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class commentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->insert([
            'name' => 'John Smith',
            'comment' => 'Example comment text added by jogn smith'
        ]);
        \DB::table('comments')->insert([
            'name' => 'lisbet',
            'comment' => 'Example comment text added by lisbet', 
        ]);
    }
}
