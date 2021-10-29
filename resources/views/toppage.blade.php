{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OfferBox</title>
  <link rel="stylesheet" href="{{ asset('css/toppage.css') }}">
</head> --}}
@extends('layouts.app')

{{-- <body> --}}
@section('content')
<link rel="stylesheet" href="{{ asset('css/toppage.css') }}">
  <div class="top">
    <div class="top-left">
      <form action="/searchpage" method="post">
            @csrf
          <div class="login_date">
                <p>ログイン日時</p>
                <select name="login">
                  <option value="one">1日以内</option>
                  <option value="three">3日以内</option>
                  <option value="seven">7日以内</option>
                  <option value="twoweeks">14日以内</option>
                  <option value="onemonth">30日以内</option>
                  <option value="twomonths">60日以内</option>
                  </select>
            </div>

            <div class="gender">
                  <p>性別</p>
                  <label><input type="radio" name="gender" value="男性">男性</label>
                  <label><input type="radio" name="gender" value="女性">女性</label>
                  <label><input type="radio" name="gender" value="その他" checked>その他</label>
                  
            </div>

            <div class="division">
                  <p>学校区分</p>
                  <label><input type="radio" name="univercity_group" value="国公立クラス">国公立クラス</label>
                  <label><input type="radio" name="univercity_group" value="早慶・上智クラス">早慶・上智クラス</label>
                  <label><input type="radio" name="univercity_group" value="MARCH・関関同立クラス">MARCH・関関同立クラス</label>
                  <label><input type="radio" name="univercity_group" value="日東駒専クラス" checked>日東駒専クラス</label>
                  <label><input type="radio" name="univercity_group" value="その他クラス" checked>その他クラス</label>

            </div>
            <div class="schoolarea">
                  <p>学校エリア</p>
                  <select name="schoolerea">
                    <option value="北海道エリア">北海道エリア</option>
                    <option value="東北エリア">東北エリア</option>
                    <option value="甲信越・北陸エリア">甲信越・北陸エリア</option>
                    <option value="北関東エリア">北関東エリア</option>
                    <option value="東京・千葉・神奈川エリア">東京・千葉・神奈川エリア</option>
                    <option value="中部エリア">中部エリア</option>
                    <option value="近畿エリア">近畿エリア</option>
                    <option value="中四国エリア">中四国エリア</option>
                    <option value="九州エリア">九州エリア</option>
                    </select>
              </div>

              <div class="place">
                    <p>志望勤務地</p>
                    <select name="place">
                      <option value="こだわらない・まだ決めてない">こだわらない・まだ決めてない</option>
                      <option value="全国転勤可能">全国転勤可能</option>
                      <option value="北海道エリア">北海道エリア</option>
                      <option value="東北エリア">東北エリア</option>
                      <option value="甲信越・北陸エリア">甲信越・北陸エリア</option>
                      <option value="北関東エリア">北関東エリア</option>
                      <option value="東京・千葉・神奈川エリア">東京・千葉・神奈川エリア</option>
                      <option value="中部エリア">中部エリア</option>
                      <option value="近畿エリア">近畿エリア</option>
                      <option value="中四国エリア">中四国エリア</option>
                      <option value="九州エリア">九州エリア</option>
                      </select>
              </div>


              <div class="industry">
                    <p>志望業界</p>
                    <select name="industry">
                    <option value="IT・通信">IT・通信</option>
                    <option value="ソフトウェア・情報処理">ソフトウェア・情報処理</option>
                    <option value="アプリ・ゲーム関連">アプリ・ゲーム関連</option>
                    <option value="人材">人材</option>
                    <option value="専門商社">専門商社</option>
                    </select>
              </div>

              <div class="work">
                    <p>志望職種</p>
                    <select name="work">
                    <option value="営業">営業</option>
                    <option value="事務・秘書">事務・秘書</option>
                    <option value="経理・法務">経理・法務</option>
                    <option value="企画・マーケティング">企画・マーケティング</option>
                    <option value="コンサルタント">コンサルタント</option>
                    <option value="エンジニア・プログラミング">エンジニア・プログラマ</option>
                    <option value="生産・製造">生産・製造</option>
                    <option value="設計">設計</option>
                    <option value="施工管理">施工管理</option>
                    <option value="販売">販売</option>
                    </select>
                   </div>

      {{-- </form> --}}

                    <br>
                    <br>
                    <br>
                    {{-- 検索ボタンを作る --}}
                      {{-- <form action="/searchpage" method="POST"> --}}
                        @csrf
                        <button  type='submit' class="top_btn">検索する</button>
                      </form>

    </div>
    <div class="top-right">
            <table class="row">
                  <tr><th>オファーする</th></tr>
                  <tr><td>学生検索</td></tr>
                  <tr><td>検討中リスト</td></tr>
                  <tr><td>ラベル検索</td></tr>
                  <tr><td>私をみて</td></tr>
                    
                  <tr><th>管理する</th></tr>
                  <tr><td>選考管理リスト</td></tr>
                  <tr><th>設定</th></tr>
                  <tr><td>基本設定</td></tr>
                  <tr><td>募集要項設定</td></tr>
                  <tr><td>オプション設定</td></tr> 
             </table>
             <form action="/management_page" method="GET">
                  @csrf
                  <button  type='submit' class="top_btn">選考管理リスト</button>
                </form>

                <form action="/favorite_listpage" method="GET">
                  @csrf
                  <button  type='submit' class="favorite_list">検討中リスト</button>
                </form>

                <form action="/setuppage" method="GET">
                  @csrf
                  <button  type='submit' class="setup">企業基本情報</button>
                </form>


    </div>
　</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- </body>
</html> --}}
@endsection