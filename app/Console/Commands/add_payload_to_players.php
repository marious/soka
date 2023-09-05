<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Modules\Players\Entities\Player;

class add_payload_to_players extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add_payload_to_players';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $payload = [
            "dob" => 2003,
            "duels" => 55,
            "goals" => 3,
            "shots" => 30,
            "height" => 170,
            "passes" => 140,
            "assists" => 1,
            "carries" => 3595,
            "crosses" => 10,
            "tackles" => 0,
            "dribbles" => 65,
            "duels_won" => 25,
            "fouls_won" => 25,
            "penalties" => 1,
            "team_name" => "El Marg",
            "team_wins" => 4,
            "clearances" => 0,
            "duels_lost" => 30,
            "key_passes" => 0,
            "receptions" => 150,
            "soka_score" => 79,
            "team_color" => "black",
            "team_draws" => 1,
            "team_goals" => 7,
            "tackles_won" => 0,
            "team_losses" => 0,
            "fell_offside" => 5,
            "tackles_lost" => 0,
            "offside_traps" => 0,
            "pass_accuracy" => 89.29,
            "penalties_won" => 1,
            "player_number" => 18,
            "shots_blocked" => 5,
            "cross_accuracy" => 100,
            "matches_played" => 4,
            "minutes_played" => 450,
            "chances_created" => 0.2,
            "fouls_committed" => 5,
            "passes_complete" => 125,
            "shots_on_target" => 25,
            "crosses_complete" => 10,
            "shots_off_target" => 5,
            "beat_offside_trap" => 0,
            "dribbles_accuracy" => 84.62,
            "passes_incomplete" => 125,
            "team_clean_sheets" => 0,
            "total_possessions" => 360,
            "crosses_incomplete" => 0,
            "duels_success_rate" => 45.45,
            "goal_contributions" => 4,
            "passes_intercepted" => 30,
            "touches_in_the_box" => 25,
            "dribbles_successful" => 55,
            "penalties_committed" => 0,
            "penalties_on_target" => 1,
            "team_1_goal_against" => 5,
            "cross_per_90_minutes" => 2,
            "duels_per_90_minutes" => 11,
            "goals_per_90_minutes" => 0.6,
            "offside_success_rate" => 0,
            "penalties_off_target" => 1,
            "dribbles_unsuccessful" => 5,
            "passes_per_90_minutes" => 28,
            "receptions_successful" => 125,
            "assists_per_90_minutes" => 0.2,
            "carries_per_90_minutes" => 719.6,
            "successful_possessions" => 140,
            "team_more_goal_against" => 0,
            "touches_per_90_minutes" => 5,
            "dribbles_per_90_minutes" => 13,
            "receptions_success_rate" => 83.33,
            "receptions_unsuccessful" => 25,
            "fouls_won_per_90_minutes" => 5,
            "offside_traps_successful" => 0,
            "possessions_success_rate" => 38.89,
            "unsuccessful_possessions" => 222,
            "clearances_per_90_minutes" => 0,
            "dribbled_against_attempts" => 5,
            "key_passes_per_90_minutes" => 0,
            "offside_traps_unsuccessful" => 0,
            "defends_dribble_successfully" => 0,
            "interceptions_per_90_minutes" => 6,
            "offside_traps_per_90_minutes" => 0,
            "penalties_won_per_90_minutes" => 0.2,
            "shots_blocked_per_90_minutes" => 1,
            "chances_created_per_90_minutes" => 0.2,
            "fouls_committed_per_90_minutes" => 1,
            "successful_1_touch_possessions" => 55,
            "successful_2_touch_possessions" => 20,
            "successful_3_touch_possessions" => 30,
            "defended_dribble_unsuccessfully" => 5,
            "defending_dribbles_success_rate" => 0,
            "unsuccessful_1_touch_possessions" => 125,
            "unsuccessful_2_touch_possessions" => 35,
            "unsuccessful_3_touch_possessions" => 40,
            "penalties_committed_per_90_minutes" => 0,
        ];

        $players = Player::all();

        $data = [];

        foreach ($players as $player) {
            foreach ($payload as $key => $value) {
                if (is_string($value)) {
                    $data[$key] = $value;
                } else {
                    $data[$key] = (float)$value + mt_rand(1, 5);
                }
            }
            $player->payload = $data;
            $player->save();
        }
    }
}
