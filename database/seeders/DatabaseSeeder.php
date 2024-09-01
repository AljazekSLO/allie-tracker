<?php

namespace Database\Seeders;

use App\Livewire\Visits;
use App\Models\User;
use App\Models\Country;
use App\Models\Visit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $csvFilePath = storage_path('app/data/countries.csv'); // Adjust the path as needed
        $csvData = [];

        if (($handle = fopen($csvFilePath, 'r')) !== false) {
            // Skip the header row if necessary
            fgetcsv($handle);
            
            while (($row = fgetcsv($handle, 1000, ';')) !== false) {
                $latitude = floatval(str_replace(",", ".", $row[4]));
                $longitude = floatval(str_replace(",", ".", $row[5]));
                
                $csvData[] = [
                    'name' => $row[0],
                    'iso2' => $row[1],
                    'population' => number_format(intval($row[2])),
                    'continent' => $row[3],
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    // Map other fields accordingly
                ];
            }
            fclose($handle);
        }

        foreach($csvData as $data){
            Country::create($data);
        }

        $user = User::factory()->create();

        Visit::factory(50)
            ->for($user)
            ->create();
    }
}
