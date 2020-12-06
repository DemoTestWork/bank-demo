<?php

use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    protected $messages = [
        ['subject' => 'Information', 'content' => 'This is test message', 'user_id' => 1, 'read' => 0],
        ['subject' => 'Test message', 'content' => 'This is test message', 'user_id' => 1, 'read' => 1],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->delete();

        foreach($this->messages as $message) {
            DB::table('messages')->insert([
                // 'id' => $message['id'],
                'subject' => $message['subject'],
                'content' => $message['content'],
                'user_id' => $message['user_id'],
                'read' => $message['read'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
