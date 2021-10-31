@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/setup.css') }}">

  <h2>基本設定</h2>
    <div class="all">
      
        <div class="info">
            <button>企業基本情報</button>
            <button>担当者情報</button>
        </div>

          <div class="logo">
            <p>企業ロゴ</p>
            <p>ロゴの写真設定</p>  
          </div>

          <div class="name">
            <p>企業名</p>
            <form action=""><input type="text" name="name" ></form>
          </div>

          <div class="address">
            <p>住所</p>
            <form action=""><input type="text" name="address"></form>
          </div>

          <div class="listing_classification">
            <p>上場区分</p>
            <select name="listing_classification">
              <option value="非上場">非上場</option>
              <option value="マザーズ上場">マザーズ上場</option>
              <option value="東証2部上場">東証2部上場</option>
              <option value="東証1部上場">東証1部上場</option>
            </select>
          </div>

          <div class="place">
            <p>勤務地</p>
            <form action=""><input type="text" name="place"></form>
          </div>

          <div class="type">
            <p>企業タイプ</p>
            <select name="type">
              <option value="大手老舗">大手老舗</option>
              <option value="中小老舗">中小老舗</option>
              <option value="メガベンチャー">メガベンチャー</option>
              <option value="ベンチャー">ベンチャー</option>
            </select>
          </div>

          <div class="industry">
            <p>業界</p>
            <select name="industry">
              <option value="IT・通信">IT・通信</option>
              <option value="ソフトウェア・情報処理">ソフトウェア・情報処理</option>
              <option value="アプリ・ゲーム関連">アプリ・ゲーム関連</option>
              <option value="人材">人材</option>
              <option value="専門商社">専門商社</option>
            </select>
          </div>

          <div class="employees">
            <p>従業員数</p>
            <form action=""><input type="text" name="employees"></form>
          </div>
          
          <div class="manager">
            <p>担当者名</p>
            <form action=""><input type="text" name="manager"></form>
          </div>

          {{-- <button>設定</button> --}}
          <form action="/createpage" method="POST">
            @csrf
            <button  type='submit' class="top_btn">設定する</button>
          </form>
    </div>



  @endsection
