<?php

use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    protected $types = [
        ['id' => 1, 'name' => 'Compte épargne'],
        ['id' => 2, 'name' => 'Compte chèque'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_types')->delete();

        foreach($this->types as $type) {
            DB::table('account_types')->insert([
                'id' => $type['id'],
                'name' => $type['name'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
