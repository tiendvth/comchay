<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Đồ chay hằng ngày',
                'image' => 'https://nauco29.com/uploads/content/mam-co-chay-cung-nha-moi.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Bánh chay',
                'image' => 'https://afamilycdn.com/2019/8/5/banh-dau-xanh-5-15650159260661416119018.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Món rau củ',
                'image' => 'https://pastaxi-manager.onepas.vn/content/uploads/articles/2amthuc/amthuccuocsong/9monchay16/9-mon-chay-7.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Thức ăn chay giả mặn',
                'image' => 'https://monngonbinhdinh.vn/Images/files/c%C3%A1%20chay%20gi%E1%BA%A3%20m%E1%BA%B7n.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Phở chay , miến chay',
                'image' => 'https://meta.vn/Data/image/2019/07/24/cach-nau-pho-chay-1.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Cháo chay',
                'image' => 'https://chaosach.com/wp-content/uploads/2016/10/cach-lam-mon-chao-chay-thap-cam-ngon-bo-cho-me-bau.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name' => 'Nộm chay,gỏi chay',
                'image' => 'https://img-global.cpcdn.com/recipes/4b155c6606b05ecf/1200x630cq70/photo.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name' => 'Lẩu chay',
                'image' => 'https://toplist.vn/images/800px/vuon-chay-garden-516753.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name' => 'Súp chay',
                'image' => 'https://img-global.cpcdn.com/recipes/19f434095c6abf37/1200x630cq70/photo.jpg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name' => 'món xào chay',
                'image' => 'https://nauzi.com/caches/large/cover/3421/thanh-dam-ngay-ram-voi-mon-nam-dong-co-xao-chay-1ee137bf88bfa2e81e3308352b215a40.jpg',
                'created_at' => Carbon::now()
            ],
        ]);

    }
}
