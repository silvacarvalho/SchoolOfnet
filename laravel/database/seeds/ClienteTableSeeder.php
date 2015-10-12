<?php

use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CodeProject\Cliente::truncate();
        factory(CodeProject\Cliente::class, 10)->create();
    }
}
