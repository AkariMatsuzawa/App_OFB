<?php

use Illuminate\Database\Seeder;

class AmbitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ambitions')->insert([
            [
                'student_id' => 1,
                'industry' => 'IT・通信',
                'work' => '営業',
                'place' => '北海道エリア',
                'type' => '大手老舗',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 2,
                'industry' => 'IT・通信',
                'work' => 'エンジニア・プログラマ',
                'place' => '全国転勤可能',
                'type' => '中小老舗',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 3,
                'industry' => '人材',
                'work' => '経理・法務',
                'place' => '東京・千葉・神奈川エリア',
                'type' => 'メガベンチャー',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 4,
                'industry' => '専門商社',
                'work' => '企画・マーケティング',
                'place' => '近畿エリア',
                'type' => 'ベンチャー',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'student_id' => 5,
                'industry' => 'ソフトウェア・情報処理',
                'work' => '設計',
                'place' => '甲信越・北陸エリア',
                'type' => '中小老舗',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],

            ]);
    }
}
