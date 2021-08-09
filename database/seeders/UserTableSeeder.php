<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin=[
            "name"=>"admin",
            "password"=>Hash::make("13782000"),
            "email"=>"admin@admin.com"
        ];

        User::create($Admin);

    }
}
