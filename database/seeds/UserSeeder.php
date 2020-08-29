<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    protected $users = [
        ['civility' => 'M', 'name' => 'Doe', 'firstname' => 'John', 'email' => 'test1@maxmind.ma', 'phone' => '0600000001', 'login' => 'FIRSTUSER', 'password' => 'passwordtest'],

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        foreach($this->users as $user) {
            DB::table('users')->insert([
                'civility' => $user['civility'],
                'name' => $user['name'],
                'firstname' => $user['firstname'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                'login' => $user['login'],
                'password' => bcrypt($user['password']),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
