<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(29)->create();

        $user = User::factory()->create([
            'name' => 'Osnayder Severiche',
            'email' => 'osna.sev@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
