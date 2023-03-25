<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outgoings')->insert([
            'category' => '食費',
            'yen' => 2300,
            'date' => '2023-03-05',
            'repeated' => False,
            'memo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('outgoings')->insert([
            'category' => '食費',
            'yen' => 16000,
            'date' => '2023-03-05',
            'repeated' => False,
            'memo' => 'nosh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('outgoings')->insert([
            'category' => '娯楽',
            'yen' => 980,
            'date' => '2023-03-25',
            'repeated' => True,
            'memo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('outgoings')->insert([
            'category' => '本',
            'yen' => 3520,
            'date' => '2023-02-11',
            'repeated' => False,
            'memo' => 'プロフェッショナルWebプログラミング Laravel',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('outgoings')->insert([
            'category' => '日用品',
            'yen' => 2388,
            'date' => '2023-03-22',
            'repeated' => False,
            'memo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('outgoings')->insert([
            'category' => '家賃',
            'yen' => 68000,
            'date' => '2023-03-27',
            'repeated' => True,
            'memo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
