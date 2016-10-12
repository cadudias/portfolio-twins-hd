<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'Pedro',
            'to' => 'roberto',
            'email' => 'roberto@teste.com',
            'message' => 'Teste de mensagem'            
        ]);  
    }
}
