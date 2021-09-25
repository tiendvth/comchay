<?php

namespace Database\Seeders;

use App\Enums\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'last_name' => 'Hoàng',
                'first_name' => 'Phương',
                'email' => 'phuonghdth2009010@fpt.edu.vn',
                'phone' => '0334670699',
                'address' => 'Hải Phòng',
                'username' => 'admin',
                'password' => Hash::make('123456'),
                'role' => Role::ADMIN
            ],
            [
                'last_name' => 'Hoàng',
                'first_name' => 'Phương',
                'email' => 'phuonghoang@gmail.com',
                'phone' => '098968696',
                'address' => 'Hải Phòng',
                'username' => 'phuong123',
                'password' => Hash::make('ahihi1'),
                'role' => Role::ADMIN
            ],
            [
                'last_name' => 'Đặng ',
                'first_name' => 'Tiến',
                'email' => 'Tiendang@gmail.com',
                'phone' => '0686789999',
                'address' => 'Hà Nội',
                'username' => 'tiendang',
                'password' => Hash::make('hanoixin'),
                'role' => Role::USER
            ],
            [
                'last_name' => 'Phạm',
                'first_name' => 'Thắng',
                'email' => 'thangpham@gmail.com',
                'phone' => '0568686800',
                'address' => 'Phú Thọ',
                'username' => 'thangpham',
                'password' => Hash::make('thang123'),
                'role' => Role::USER
            ],
            [
                'last_name' => 'Hiếu',
                'first_name' => 'Vương',
                'email' => 'hieuvuong@gmail.com',
                'phone' => '034737389',
                'address' => 'Hải Dương',
                'username' => 'vuonghieu',
                'password' => Hash::make('hieu2002'),
                'role' => Role::USER
            ],
            [
                'last_name' => 'Cảnh',
                'first_name' => 'Sỹ',
                'email' => 'Sycanh2004@gmail.com',
                'phone' => '0689999999',
                'address' => 'Nghệ An',
                'username' => 'canhthang',
                'password' => Hash::make('19052004'),
                'role' => Role::ADMIN
            ],
            [
                'last_name' => 'Phong',
                'first_name' => 'Lan',
                'email' => 'phonglan03@gmail.com',
                'phone' => '045678900',
                'address' => 'Nghệ An',
                'username' => 'phonglan',
                'password' => Hash::make('20052003'),
                'role' => Role::USER
            ],
            [
                'last_name' => 'Dương',
                'first_name' => 'Nguyễn',
                'email' => 'duongbinh02@gmail.com',
                'phone' => '0345898989',
                'address' => 'Nghệ An',
                'username' => 'duong123',
                'password' => Hash::make('21032002'),
                'role' => Role::USER
            ],
            [
                'last_name' => 'Quân',
                'first_name' => 'Sỹ',
                'email' => 'quanhosy@gmail.com',
                'phone' => '0999999999',
                'address' => 'Nghệ An',
                'username' => 'quan123',
                'password' =>Hash::make('72740204'),
                'role' => Role::ADMIN
            ],
            [
                'last_name' => 'Nguyên',
                'first_name' => 'Thành',
                'email' => 'Nguyênthanh@gmail.com',
                'phone' => '034578999',
                'address' => 'Nghệ An',
                'username' => 'nguyen123',
                'password' => Hash::make('19102005'),
                'role' => Role::ADMIN
            ]
        ]);
    }
}
