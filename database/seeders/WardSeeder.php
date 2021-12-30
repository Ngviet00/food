<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WardSeeder extends Seeder
{
    public function run()
    {
        DB::table('wards')->insert([
            //phong khê
            [
                'district_id' => 14,
                'name' => "Đống Cao",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 14,
                'name' => "Đào Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 14,
                'name' => "Châm Khê",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 14,
                'name' => "Ngô khê",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //hap linh
            [
                'district_id' => 19,
                'name' => "Phố Và",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 19,
                'name' => "Ất",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 19,
                'name' => "Sơn",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 19,
                'name' => "Tiên Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 19,
                'name' => "Trần",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            //dai phuc
            [
                'district_id' => 7,
                'name' => "Đường Trần Hưng Đạo",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 1",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 3",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 4",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 5",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 6",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 7",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 8",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 9",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 10",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 7,
                'name' => "Khu 11",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //đáp cầu
            [
                'district_id' => 2,
                'name' => "Hoàng Quốc Việt1-585, 2-742",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Hoàng Quốc Việt Ngõ 148",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Hoàng Quốc Việt Ngõ 52",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Hoàng Quốc Việt Ngõ 60",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Hoàng Quốc Việt Ngõ 78",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Hoàng Quốc ViệtNgõ 80",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Hoàng Quốc Việt Ngõ Chợ",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Lý Thường Kiệt1-161, 2-90",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Khu dân cư Khu 6 Đáp Cầu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Đường Như Nguyệt",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Khu phố 1 Đáp Cầu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Khu phố 3 Đáp Cầu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Khu phố Khu 4 Đáp Cầu ngõ 1",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 2,
                'name' => "Khu phố Khu 5 Đáp Cầu ngõ 2",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //kinh bac
            [
                'district_id' => 4,
                'name' => "Niềm Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 4,
                'name' => "Thị Chung",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 4,
                'name' => "Yên Mẫn",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 4,
                'name' => "Yna",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //ninh xa
            [
                'district_id' => 8,
                'name' => "Đường Đỗ Trọng Vỹ1-83",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Lê Thái Tổ",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Ngọc Hân Công Chúa",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Ngô Gia Tự1-185, 2-110",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Ngô Gia Tự539-711, 596-774",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn Cao",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn Cao Ngõ Khu Chung Cư Mới",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn CaoNgõ Khu Vực Chợ Ninh Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn Du1-89, 2-36",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn Trãi1-253, 2-264",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn TrãiKhu chung cư 30/4	",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn TrãiNgõ Làng Đọ Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Nguyễn Văn Cừ1-257, 2-210",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Thành Bắc1-97, 2-96",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Đường Trần quốc Toản",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Khu phố Làng Đọ Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Khu tập thể Tập Thể Công Ty Xây Dựng Số 3, Lô nhà 1",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 8,
                'name' => "Khu tập thể Trường Sỹ quan chính trị",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //suoi hoa
            [
                'district_id' => 9,
                'name' => "Đường Cao Lỗ Vương2-22",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 9,
                'name' => "Đường Hai Bà Trưng1-11, 2-120",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 9,
                'name' => "Đường Kinh Dương Vương",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 9,
                'name' => "Đường Kinh Dương VươngKhu chung cư 5 Tầng",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 9,
                'name' => "Đường Lê Quý Đôn1-129, 2-92",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 9,
                'name' => "Đường Lê Văn Thịnh1-79, 2-58",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 9,
                'name' => "Đường Lê Văn Thịnh1-81, 2-76",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //thi cau
            [
                'district_id' => 3,
                'name' => "Đường Đấu Mã1-69, 2-50",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 3,
                'name' => "Đường Hoàng Quốc ViệtNgõ 11",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 3,
                'name' => "Đường Hoàng Quốc ViệtNgõ 111",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //tien an
            [
                'district_id' => 6,
                'name' => "Đường Vũ Kiệt1-21, 2-56",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 6,
                'name' => "Đường Hai Bà Trưng128-158",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 6,
                'name' => "Đường Ngô Gia TựNgõ Bảy Mẫu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //van an
            [
                'district_id' => 12,
                'name' => "Đương Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 12,
                'name' => "Thụ Ninh",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 12,
                'name' => "Thượng Đồng",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 12,
                'name' => "Vạn Phúc",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //vân dương
            [
                'district_id' => 16,
                'name' => "Chu Mẫu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 16,
                'name' => "Cầu Ngà",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 16,
                'name' => "Lãm Làng",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //ve an
            [
                'district_id' => 5,
                'name' => "Đường Thiên ĐứcNgõ 148",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 5,
                'name' => "Đường Thiên ĐứcNgõ 184",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 5,
                'name' => "Đường Thiên ĐứcNgõ 248",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //vo cuong
            [
                'district_id' => 10,
                'name' => "Xuân Ổ A",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 10,
                'name' => "Xuân Ổ B",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 10,
                'name' => "Bò Sơn",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //vu ninh
            [
                'district_id' => 1,
                'name' => "Cổ Mễ",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 1,
                'name' => "Đồi Ban",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 1,
                'name' => "Phúc Sơn",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //hoa long
            [
                'district_id' => 11,
                'name' => "Viêm Xá",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 11,
                'name' => "Xuân Ái",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 11,
                'name' => "Xuân Đồng",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //khac niem
            [
                'district_id' => 18,
                'name' => "Đoài",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 18,
                'name' => "Đông",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 18,
                'name' => "Sơn",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //khuc xuyen
            [
                'district_id' => 13,
                'name' => "Khúc Toại",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 13,
                'name' => "Trà Xuyên",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //kim chan
            [
                'district_id' => 15,
                'name' => "Đạo Chân",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 15,
                'name' => "Kim Đôi",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            //nam son
            [
                'district_id' => 17,
                'name' => "Đa Cấu",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'district_id' => 17,
                'name' => "Sơn Đông",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
