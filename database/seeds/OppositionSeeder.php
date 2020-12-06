<?php

use Illuminate\Database\Seeder;

class OppositionSeeder extends Seeder
{
    protected $oppositions = [
        ['name' => 'UEMOA - Protection', 'description' => 'This is oppostion'],
        ['name' => 'UEMOA - Impôt', 'description' => 'This is oppostion on imposition'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oppositions')->delete();

        foreach($this->oppositions as $opposition) {
            DB::table('oppositions')->insert([
                // // 'id' => $opposition['id'],
                'name' => $opposition['name'],
                'description' => $opposition['description'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
