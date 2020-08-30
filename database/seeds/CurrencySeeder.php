<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    protected $currency = [
        ['id' => 1, 'name' => 'Dirham', 'short_name' => 'MAD', 'flag' => ''],
        ['id' => 2, 'name' => 'Euro', 'short_name' => 'EUR', 'flag' => ''],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currency')->delete();

        foreach($this->currency as $currency) {
            DB::table('currency')->insert([
                'id' => $currency['id'],
                'name' => $currency['name'],
                'short_name' => $currency['short_name'],
                'flag' => $currency['flag'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
