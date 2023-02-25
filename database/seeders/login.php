<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class login extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\login::factory(10)->create();
    }
}
