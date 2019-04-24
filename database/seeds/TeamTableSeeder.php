<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function() {
            \App\Team::insert([
                ['name' => 'Chelsea', 'logo' => 'chelsea.png'],
                ['name' => 'Manchester United', 'logo' => 'manchester.png'],
                ['name' => 'Arsenal', 'logo' => 'arsenal.png'],
                ['name' => 'Liverpool', 'logo' => 'liverpool.png'],
            ]);
        });
    }
}
