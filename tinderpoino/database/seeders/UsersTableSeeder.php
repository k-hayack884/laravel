<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'ライド',
            'email' => 'user1@example.com',
            'sex' => '0',
            'self_introduction' => '何やってんだよ、団長！',
            'img_name' => 'sample001.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'マクギリス',
            'email' => 'user2@example.com',
            'sex' => '1',
            'self_introduction' => 'バエルの下に集え！',
            'img_name' => 'sample002.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'ミカ',
            'email' => 'user3@example.com',
            'sex' => '0',
            'self_introduction' => 'オルガ、俺は何をすればいい？',
            'img_name' => 'sample003.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => '石動',
            'email' => 'user4@example.com',
            'sex' => '0',
            'self_introduction' => '准将おおおおおおおおおおお！！',
            'img_name' => 'sample004.jpg',
            'password' => Hash::make('password123'),
            ],
        ]);
    }
}
