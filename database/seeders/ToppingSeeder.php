<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ToppingSeeder extends Seeder
{
    public function run()
    {
        DB::table('toppings')->insert([
            [
                'name' => 'Phômát',
                'slug'=> Str::slug('Phômát'),
                'price' =>30000
            ],
            [
                'name' => 'Tôm',
                'slug'=> Str::slug('Tôm'),
                'price' =>25000
            ],
            [
                'name' => 'Cá',
                'slug'=> Str::slug('Cá'),
                'price' =>30000
            ],
            [
                'name' => 'Mực',
                'slug'=> Str::slug('Mực'),
                'price' =>35000
            ],
            [
                'name' => 'Gà',
                'slug'=> Str::slug('Gà'),
                'price' =>40000
            ],
            [
                'name' => 'Jăm Bông',
                'slug'=> Str::slug('Jăm Bông'),
                'price' =>15000
            ],
            [
                'name' => 'Thịt hun khói',
                'slug'=> Str::slug('Thịt hun khói'),
                'price' =>20000
            ],
            [
                'name' => 'Khoai tây chiên',
                'slug'=> Str::slug('Khoai tây chiên'),
                'price' =>10000
            ],
            [
                'name' => 'Trứng',
                'slug'=> Str::slug('Trứng'),
                'price' =>7000
            ],
            [
                'name' => 'Thịt bò xay',
                'slug'=> Str::slug('Thịt bò xay'),
                'price' =>65000
            ],
        ]);
    }
}
