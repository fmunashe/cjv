<?php

namespace Database\Seeders;

use App\Enum\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name'=>'Administrator','email'=>'admin@cjv.co.zw','password'=>Hash::make('password'),'role'=>Role::ROLES[0]],
            ['name'=>'User','email'=>'user@cjv.co.zw','password'=>Hash::make('password'),'role'=>Role::ROLES[1]]
        ];

        foreach($users as $user){
            User::query()->create($user);
        }
    }
}
