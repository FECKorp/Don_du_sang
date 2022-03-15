<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "root",
            'email' => "root@root.fr",
            'password' => \Hash::make("root"),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => "user",
            'email' => "user@user.fr",
            'password' => \Hash::make("user"),
            'created_at' => Carbon::now(),
        ]);
    }
}
