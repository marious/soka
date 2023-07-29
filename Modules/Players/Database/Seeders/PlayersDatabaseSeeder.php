<?php

namespace Modules\Players\Database\Seeders;

use App\Support\Translator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Players\Entities\Player;
use Modules\Players\Entities\PlayerVideo;
use Modules\Teams\Entities\Team;

class PlayersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $teams = Team::get();

        $playersCount = (int)max($this->command->ask('How many player would you create?', 10), 1);
        $positions = ['Defender', 'Midfielder', 'Forward',];
        $players = [];


        if ($teams->count()) {

            for ($i = 1; $i <= $playersCount; $i++) {
                $players[] = [
                    'name' => fake()->firstName('male') . ' ' . fake()->lastName(),
                    'dob' => now()->subYears(random_int(10, 20))->format('Y-m-d'),
                    'team_id' => $teams->random()->id,
                    'position' => $positions[array_rand($positions)],
                    'height' => random_int(155, 180),
                    'matches' => random_int(10, 60),
                    'soka_score' => random_int(52, 98),
                    'attacking' => fake()->randomFloat(1, 2.8, 8.5),
                    'defensive' => fake()->randomFloat(1, 2.8, 8.5),
                    'passing' => fake()->randomFloat(1, 2.8, 8.5),
                    'possession' => fake()->randomFloat(1, 2.8, 8.5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            Player::insert($players);

            $players = Player::take(10)->get();
            foreach ($players as $player) {
                PlayerVideo::insert([
                    ['video_code' => 'KMXnEpUxNz8', 'player_id' => $player->id],
                    ['video_code' => 'jP7AtTj8vUQ', 'player_id' => $player->id],
                    ['video_code' => 'OWOjRdmpM6I', 'player_id' => $player->id],
                    ['video_code' => 'DQ3jAuEDVT0', 'player_id' => $player->id],
                ]);

            }

        }


    }
}
