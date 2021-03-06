<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CurrencySeeder::class);
        $this->call(AccountTypeSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(OppositionSeeder::class);
    }
}
