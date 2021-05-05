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
        //
        User::updateOrCreate(['id' => 1],[
            'name' => 'Admin Hunter',
            'email' => 'sergej@mail.com',
            'password' => '$2y$10$qibMbrjnEC/.OviK/.1bN.tZ4UGlY/y1fXZp689rRkZFl7SgFy.zq'
        ]);
    }
}
