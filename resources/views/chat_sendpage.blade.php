@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/chat.css') }}">

  <h2>個別チャット画面</h2>
    <div class="student">
        <div class="student_pic">
            学生写真
        </div>
        <div class="student_message">
          ラインのような吹き出しをつけたい。学生からの返信。
        </div>
    </div>
    <div class="company">
        <div class="company_logo">
            企業ロゴ
        </div>
        <div class="conmany_message">
          ラインのような吹き出しをつけたい。企業からのメッセージ。
        </div>
    </div>
    <div class="student">
        <div class="student_pic">
            学生写真
        </div>
        <div class="student_message">
          ラインのような吹き出しをつけたい。学生からの返信。
        </div>
    </div>
    <div class="company">
        <div class="company_logo">
            企業ロゴ
        </div>
        <div class="conmany_message">
          ラインのような吹き出しをつけたい。企業からのメッセージ。
        </div>
    </div>
    <div class="student">
        <div class="student_pic">
            学生写真
        </div>
        <div class="student_message">
          ラインのような吹き出しをつけたい。学生からの返信。
        </div>
    </div>
    <div class="company">
        <div class="company_logo">
            企業ロゴ
        </div>
        <div class="conmany_message">
          ラインのような吹き出しをつけたい。企業からのメッセージ。
        </div>
    </div>
    <div class="student">
        <div class="student_pic">
            学生写真
        </div>
        <div class="student_message">
          ラインのような吹き出しをつけたい。学生からの返信。
        </div>
    </div>
    <div class="company">
        <div class="company_logo">
            企業ロゴ
        </div>
        <div class="conmany_message">
          ラインのような吹き出しをつけたい。企業からのメッセージ。
        </div>
    </div>
   
    <form action="{{ route('chat_sendpage.store') }}" method="POST">
      @csrf
      <div class="post-box">
        <input type="text" name="chat" placeholder="メッセージ入力">
        <button type='submit' class="submit_btn">メッセージ送信</button>
      </div>
      ※もう少し横長＆縦もある＆入力と送信項目は固定させたい
    </div>
  </form>

    <div class="chat-wrapper">
      @foreach($chat as $chat)
      <div>{{ $chat->chat }}</div>
      @endforeach
    </div>
   


  @endsection