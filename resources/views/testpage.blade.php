@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/test.css') }}">

  <h2>オファー確認ページ</h2>
  <div class="">
    <div class="form">
     <input type="text">縦長フォームにしたい＆記入内容が入っている
   </div>
   <form action="/sendpage" method="POST">
    @csrf
    <button  type='submit' class="send">送信する</button>
  </form>
 </div>

  @endsection