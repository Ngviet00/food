<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => "Starters",
                'slug' => Str::slug('Starters', '-'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "BBQ Platters",
                'slug' => Str::slug('BBQ Platters', '-'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Salads",
                'slug' => Str::slug('Salads', '-'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Ribs & Steak",
                'slug' => Str::slug('Ribs & Steak', '-'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Chef's Selection",
                'slug' => Str::slug("Chef's Selection", '-'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Burger",
                'slug' => Str::slug('Burger', '-'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
