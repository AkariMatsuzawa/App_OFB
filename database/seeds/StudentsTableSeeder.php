<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            [
                'name' => '大田 青羽',
                'email' => 'aoha182@ipqaqbyh.glc.fy',
                'password' => 'qBBoICIw',
                'address' => '北海道常呂郡置戸町春日1-10-18',
                'birthplace' => '北海道',
                'birthdate' => '2000/06/06',
                'phone' => '09022871961',
                'univercity' => '北海道大学',
                'univercity_group' => '国公立クラス',
                'faculty' => '文学部',
                'subject' => '英米文学科',
                'year' => '2023',
                'club_activities' => 'テニス部',
                'qualification' => 'TOEIC600',
                'p_language' => '',
                'gender' => '女性',
                'highschool' => '札幌高校',
                'icon' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '米田 治',
                'email' => 'osamu6156@bpdlvylt.kx',
                'password' => 'FPeLzzW53',
                'address' => '新潟県阿賀野市野地城1-10',
                'birthplace' => '福岡県',
                'birthdate' => '2000/01/19',
                'phone' => '09043561001',
                'univercity' => '新潟大学',
                'univercity_group' => 'MARCH・関関同立クラス',
                'faculty' => '工学部',
                'subject' => '工学科',
                'year' => '2023',
                'club_activities' => 'ロボット',
                'qualification' => '',
                'p_language' => 'javascript',
                'gender' => '男性',
                'highschool' => '燕高校',
                'icon' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
             ],
             [
                'name' => '石野 真衣',
                'email' => 'mai20353@kpaqslww.utiws.og',
                'password' => 'l00WsDiR5',
                'address' => '山形県天童市仲町4-7-19仲町ヒル119',
                'birthplace' => '広島県',
                'birthdate' => '1999/03/12',
                'phone' => '09056532316',
                'univercity' => '山形大学',
                'univercity_group' => '早慶・上智クラス',
                'faculty' => '経済学部',
                'subject' => '経済学科',
                'year' => '2023',
                'club_activities' => 'ダンス部',
                'qualification' => 'FP3級',
                'p_language' => '',
                'gender' => '女性',
                'highschool' => '米沢高校',
                'icon' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()

             ],
             [
                'name' => '高野 和馬',
                'email' => 'kazuma_takano@bikwas.dak',
                'password' => 'kqmMIYxI',
                'address' => '兵庫県加古川市平荘町新中山3-8',
                'birthplace' => '鹿児島県',
                'birthdate' => '2000/04/23',
                'phone' => '08085913995',
                'univercity' => '兵庫大学',
                'univercity_group' => '日東駒専クラス',
                'faculty' => '教育学部',
                'subject' => '教育学科',
                'year' => '2023',
                'club_activities' => 'サッカー',
                'qualification' => '教員免許',
                'p_language' => '',
                'gender' => '男性',
                'highschool' => '神戸高校',
                'icon' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
             ],
             [
                'name' => '塩田 比呂',
                'email' => 'hiro429@yonpaxhat.jck',
                'password' => 'TiSIFos010',
                'address' => '新潟県新潟市中央区女池南4-12-3女池南グランド106',
                'birthplace' => '千葉県',
                'birthdate' => '1999/09/18',
                'phone' => '09079154489',
                'univercity' => '長岡大学',
                'univercity_group' => 'その他クラス',
                'faculty' => '工学部',
                'subject' => '情報工学科',
                'year' => '2023',
                'club_activities' => 'コンピューター',
                'qualification' => '',
                'p_language' => 'C++','C#','python',
                'gender' => '男性',
                'highschool' => '上越高校',
                'icon' => '',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
             ],

        ]);
    }
}
