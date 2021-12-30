<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
                'name' => "Phường Vũ Ninh",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Đáp Cầu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Thị Cầu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Kinh Bắc",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Vệ An",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Tiền An",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Đại Phúc",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Ninh Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Suối Hoa",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Võ Cường",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Hòa Long",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Vạn An",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Khúc Xuyên",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Phong Khê",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Kim Chân",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Vân Dương",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Nam Sơn",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Khắc Niệm",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => "Phường Hạp Lĩnh",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
