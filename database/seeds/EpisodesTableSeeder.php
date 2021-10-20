<?php

use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('spisodes')->insert([
            [
                'student_id' => 1,
                'text1' => 'hoge',
                'text2' => 'hogehoge',
                'text3' => 'hogehogehoge',
                'reserch_content' => '',
                'future_image' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 2,
                'text1' => 'hoge',
                'text2' => 'hogehoge',
                'text3' => 'hogehogehoge',
                'reserch_content' => 'ロボットについて勉強しました',
                'future_image' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 3,
                'text1' => 'hoge',
                'text2' => 'hogehoge',
                'text3' => 'hogehogehoge',
                'reserch_content' => '',
                'future_image' => 'こんな仕事がしたいです。',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 4,
                'text1' => 'hoge',
                'text2' => 'hogehoge',
                'text3' => 'hogehogehoge',
                'reserch_content' => '',
                'future_image' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 5,
                'text1' => 'hoge',
                'text2' => 'hogehoge',
                'text3' => 'hogehogehoge',
                'reserch_content' => 'プログラミングの勉強をしてきました。',
                'future_image' => 'エンジニアになりたいです。',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],

            ]);
    }
}
