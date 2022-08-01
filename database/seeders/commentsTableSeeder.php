<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class commentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) { 
            $user->comments()->create([  
                'comment' => 'Example comment text added by'.$user->name,
                'user_id' => $user->id, 
            ]);
        } 
    }
}
