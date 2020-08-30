<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    protected $accounts = [
        [ 'number' => '000111Z000111000', 'rib' => '000111000111222333444555', 'agency' => 'Paris Avenue Fauche', 'balance' => '3876.87', 'user_id' => 1, 'account_type_id' => 2, 'currency_id' => 1, 'status' => true ],
        [ 'number' => '000111A000111000', 'rib' => '000011000111222333444555', 'agency' => 'Paris Avenue Fauche', 'balance' => '8276.30', 'user_id' => 1, 'account_type_id' => 1, 'currency_id' => 1, 'status' => true ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();

        foreach($this->accounts as $account) {
            DB::table('accounts')->insert([
                'number' => $account['number'],
                'rib' => $account['rib'],
                'agency' => $account['agency'],
                'balance' => floatval($account['balance']),
                'user_id' => $account['user_id'],
                'account_type_id' => $account['account_type_id'],
                'currency_id' => $account['currency_id'],
                'status' => $account['status'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
