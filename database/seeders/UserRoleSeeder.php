<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 建立admin資料
        DB::table('users')->insert([
            [
                'name'=>'admin',
                'email'=>'admin@mail.com',
                'password'=>bcrypt('admin123'),
                'role'=>'admin',
            ],
            [
                'name'=>'user1',
                'email'=>'user1@mail.com',
                'password'=>bcrypt('user1abc'),
                'role'=>'user',
            ],
        ]);

    }
}
