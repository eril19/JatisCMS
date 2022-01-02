<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $userA = new User();
        $userA->name = 'admin';
        $userA->email = 'admin@admin.com';
        $userA->password = Hash::make('admin');
        $userA->save();

        $userB = new User();
        $userB->name = 'member';
        $userB->email = 'member@member.com';
        $userB->password = Hash::make('member');
        $userB->save();

        $this->call([
            FormSeeder::class,
        ]);

    }
}
