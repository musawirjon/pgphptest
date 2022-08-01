<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * User table seeder
         */
        $this->call(usersTableSeeder::class);
        $this->command->info('User table seeded.');
        /**
         * Comments table seeder
         */
        $this->call(commentsTableSeeder::class);
        $this->command->info('Comments table seeded.');
    }
}
