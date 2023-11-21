<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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

        $this->call(RoleSeeder::class);
        User::create([
            'name' => 'Arlena',

            'email' => 'arlena@gmail.com',
            'password' => bcrypt('123123123')
        ])->assignRole('Admin');
    }
}
