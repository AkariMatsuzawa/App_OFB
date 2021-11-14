@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/list.css') }}">


  <h2>学生個別PF画面</h2>
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

 <form action="/offerpage/{{ $student->id }}" method="GET">
  @csrf
  <button  type='submit' class="offer">オファーする</button>
</form>
<div style="padding:10px 40px">
  <a href="/students/{{ $student->id }}/favorites">検討中</a>
  {{ $student->favorites->count() }}
</div>


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
 <p>志望業界</p>
 {{ $ambition->industry }}
 <p>志望職種</p>
 {{ $ambition->work }}
 @endforeach

 <form action="/offerpage/{{ $student->id }}" method="GET">
  @csrf
  <button  type='submit' class="offer">オファーする</button>
</form>

<div style="padding:10px 40px">
  <a href="/students/{{ $student->id }}/favorites">検討中</a>
  {{ $student->favorites->count() }}
</div>



  @endsection