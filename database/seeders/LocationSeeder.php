<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = File::json(base_path('/database/dump-data/countries.json'));
        $states = File::json(base_path('/database/dump-data/states.json'));
        $cities = File::json(base_path('/database/dump-data/cities.json'));

        $this->command->info("Starting Location Seeder...");

        DB::transaction(function () use ($countries, $states, $cities) {

            $this->command->info("Inserting Countries...");
            foreach (array_chunk($countries, 500) as $i => $chunk) {
                DB::table('countries')->insert($chunk);
                $this->command->info("  → Countries batch " . ($i + 1) . " inserted");
            }

            $this->command->info("Inserting States...");
            foreach (array_chunk($states, 500) as $i => $chunk) {
                DB::table('states')->insert($chunk);
                $this->command->info("  → States batch " . ($i + 1) . " inserted");
            }

            $this->command->info("Inserting Cities...");
            foreach (array_chunk($cities, 1000) as $i => $chunk) {
                DB::table('cities')->insert($chunk);
                $this->command->info("  → Cities batch " . ($i + 1) . " inserted");
            }
        });

        $this->command->info("Location Seeder Completed ✔");
    }
}
