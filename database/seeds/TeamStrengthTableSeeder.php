<?php

use Illuminate\Database\Seeder;

class TeamStrengthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::transaction(function() {
            \App\TeamStrength::insert([
                ['team_id' => 1, 'is_home' => 1,'strength' => 'strong'],
                ['team_id' => 1, 'is_home' => 0,'strength' => 'average'],
                ['team_id' => 2, 'is_home' => 1,'strength' => 'average'],
                ['team_id' => 2, 'is_home' => 0,'strength' => 'average'],
                ['team_id' => 3, 'is_home' => 1,'strength' => 'weak'],
                ['team_id' => 3, 'is_home' => 0,'strength' => 'average'],
                ['team_id' => 4, 'is_home' => 1,'strength' => 'strong'],
                ['team_id' => 4, 'is_home' => 0,'strength' => 'strong'],
            ]);
        });
    }
}
