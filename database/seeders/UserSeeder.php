<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->count(10)->create();
        // collect([
        //     [
        //         'name' => 'eko budi',
        //         'email' => 'eko@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //     ],
        //     [
        //         'name' => 'Ndan',
        //         'email' => 'ndan@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //     ]
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });
    }
}
