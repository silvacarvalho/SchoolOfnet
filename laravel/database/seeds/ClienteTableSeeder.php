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
        CodeProject\Models\Cliente::truncate();
        factory(CodeProject\Models\Cliente::class, 10)->create();
    }
}
