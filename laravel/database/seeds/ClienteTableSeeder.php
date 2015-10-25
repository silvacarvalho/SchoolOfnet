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
        CodeProject\Entities\Cliente::truncate();
        factory(CodeProject\Entities\Cliente::class, 10)->create();
    }
}
