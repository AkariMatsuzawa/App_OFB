@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/list.css') }}">


  <h2>学生個別PF画面</h2>
  <div class="up">
    <div class="pic">
      写真入る
    </div>
    <div class="pro">
    大学名
    学部学科
    性別：◯
    </div>
 </div>

 <form action="/offerpage" method="GET">
  @csrf
  <button  type='submit' class="offer">オファーする</button>
</form>
 <form action="/" method="GET">
  @csrf
  <button  type='submit' class="favorite">検討する</button>
</form>

 <div class="pic">
   任意で写真はいる
 </div>
 <div class="pic">
   任意で写真はいる
 </div>

 <h3>研究内容</h3>
 <form action=""></form>

 <h3>私の将来像</h3>
 <form action=""></form>

 <h3>過去のエピソード1</h3>
 <form action=""></form>
 <h3>過去のエピソード2</h3>
 <form action=""></form>
 <h3>過去のエピソード3</h3>
 <form action=""></form>

 <p>志望企業タイプ</p>
 <p>志望業界第1〜第3</p>
 <p>志望職種第1〜第3</p>

 <form action="/offerpage" method="GET">
  @csrf
  <button  type='submit' class="offer">オファーする</button>
</form>
 <form action="/" method="GET">
  @csrf
  <button  type='submit' class="favorite">検討する</button>
</form>

<div style="padding:10px 40px">
@if($student->likedBy(Auth::company())->count() > 0)
<a href="/favorites/{{ $student->likedBy(Auth::company())->firstOrFail()->id }}">検討中取り消し</a>
@else
<a href="/students/{{ $student->id }}/favorites">検討中</a>
@endif
</div>






  @endsection