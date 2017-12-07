<?php

use Illuminate\Database\Seeder;

class leagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\League::class, 50)->create();
    }
}
