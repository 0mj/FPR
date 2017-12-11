<?php

use Illuminate\Database\Seeder;

class pongerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Ponger::class, 30)->create();
    }
}
