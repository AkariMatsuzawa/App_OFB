@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/offer.css') }}">

  <h2>オファー画面</h2>
      <div class="all">
          <div class="left">
              <div class="up">
                <div class="pic">
                  写真入る
                </div>
                <div class="pro">
                  {{ $student->univercity }}
                  {{ $student->faculty }}
                  {{ $student->subject }}
                  {{ $student->gender }}
                </div>
            </div>

            <button class="offer">オファーする</button>
            {{-- <button class="favorite">検討する</button> --}}
            <form action="/favoritepage" method="GET">
              @csrf
              <button  type='submit' class="btn_details">検討する</button>
            </form>

            <div class="pic">
              任意で写真はいる
            </div>
            <div class="pic">
              任意で写真はいる
            </div>

            <h3>研究内容</h3>
            @foreach($episodes as $episode)
            {{ $episode->reserch_content }}

            <h3>私の将来像</h3>
            {{ $episode->future_image }}

            <h3>過去のエピソード1</h3>
            {{ $episode->text1 }}
            <h3>過去のエピソード2</h3>
            {{ $episode->text2 }}
            <h3>過去のエピソード3</h3>
            {{ $episode->text3 }}
            @endforeach

            @foreach($ambitions as $ambition)
            <p>志望企業タイプ</p>
            {{ $ambition->type }}
            <p>志望業界第1〜第3</p>
            {{ $ambition->industry }}
            <p>志望職種第1〜第3</p>
            {{ $ambition->work }}
            @endforeach 


            <button class="offer">オファーする</button>
            {{-- <button class="favorite">検討する</button> --}}
            <form action="/favoritepage" method="GET">
              @csrf
              <button  type='submit' class="btn_details">検討する</button>
            </form>
          </div>

        <div class="right">
          <form action="/sendpage" method="POST">
            @csrf
           <div class="form">
            <input type="text" name="offer">縦長フォームにしたい
            <button  type='submit' class="test">オファー送信</button>
          </div>

           {{-- 以下の（）内はルーティングに記載した名前。 --}}
    <form action="{{ route('sendpage.store') }}" method="POST">
      @csrf
      <div class="post-box">
        <input type="hidden" name="student_id" value="{{ $student->id }}" />
        <input type="text" name="offer" placeholder="オファー文入力">
        <button type='submit' class="submit_btn">オファー送信</button>
      </div>
    </form>
    {{-- <form action="/toppage" method="GET">
        
    </form> --}}

    {{-- <div class="offer-wrapper">
      @foreach($offers as $offer)
      <div class="offer-box">
        <div>{{ $offers->$offer }}</div>
      </div>
      <div class="destroy-btn">
        <form action="{{ route('destroy', [$offer->id]) }}" method="post">
      </div>
      @csrf
      <input type="submit" value="削除">
    </form>
    </div>
    @endforeach --}}
  @endsection