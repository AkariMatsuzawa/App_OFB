@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/send.css') }}">

  <h2>オファー完了ページ</h2>
    <p>オファーが完了しました</p>
    <p>↓オススメ学生</p>

    <div class="add">
      <div class="pic">
        写真
      </div>
      <div class="pro">
      大学名
      </div>
      <div class="pic">
        写真
      </div>
      <div class="pro">
      大学名
      </div>
      <div class="pic">
        写真
      </div>
      <div class="pro">
      大学名
      </div>
      <div class="pic">
        写真
      </div>
      <div class="pro">
      大学名
      </div>
      <div class="pic">
        写真
      </div>
      <div class="pro">
      大学名
      </div>
    </div>

    <form action="/toppage" method="GET">
      @csrf
      <button  type='submit' class="offer">トップへ</button>
    </form>


  @endsection