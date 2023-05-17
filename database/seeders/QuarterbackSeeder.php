<?php

namespace Database\Seeders;

use App\Models\Quarterback;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuarterbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quarterback::truncate();
        $csvData = fopen(base_path('database/csv/FP_QB_2022.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 1000, ',')) !== false) {
            if (!$transRow) {
                Quarterback::create([
                    'id' => $data['0'],
                    'player' => $data['1'],
                    'cmp' => $data['2'],
                    'att' => $data['3'],
                    'pct' => $data['4'],
                    'yds' => $data['5'],
                    'ya' => $data['6'],
                    'td' => $data['7'],
                    'int' => $data['8'],
                    'sacks' => $data['9'],
                    'ratt' => $data['10'],
                    'rushyds' => $data['11'],
                    'rtd' => $data['12'],
                    'fl' => $data['13'],
                    'g' => $data['14'],
                    'fpts' => $data['15'],
                    'fptsg' => $data['16']
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
