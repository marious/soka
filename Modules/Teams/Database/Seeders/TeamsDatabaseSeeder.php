<?php

namespace Modules\Teams\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Teams\Entities\Team;

class TeamsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $teams = [
            ['id' => 1, 'name' => 'Al Waily'],
            ['id' => 2, 'name' => 'Al Marg'],
        ];

        foreach ($teams as $team) {
            Team::updateOrCreate(['id' => $team['id']], $team);
        }
    }
}
