<?php

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
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'talha',
            'email' => 'talhahussain@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'),
            'type_account' => '0'
        ]);
    }
}
