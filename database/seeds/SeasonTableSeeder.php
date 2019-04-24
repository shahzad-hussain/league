<?php

use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function() {
            \App\Season::insert([
                ['name' => '1 st Season', 'finished' => 0]
            ]);
        });
    }
}
