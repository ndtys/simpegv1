<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'mamat',
            'firstname' => 'mamat',
            'lastname' => 'RSMM',
            'email' => 'mamat@rsmmbogor.com',
            'password' => bcrypt('mamat123')
        ]);
    }
}
