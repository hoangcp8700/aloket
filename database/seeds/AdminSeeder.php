<?php

use App\Role;
use App\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' =>'Admin',
            'password' => Hash::make(123123123),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role_id' =>  3,
            'status' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
