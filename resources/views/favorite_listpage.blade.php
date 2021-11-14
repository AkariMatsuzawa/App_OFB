@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/favorite_list.css') }}">

  <h2>検討中リスト一覧</h2>
  @foreach ($students as $student)
   <div class="sum">
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
        <div class="down">
            <div class="pro">
              オファー数＜10/12＞
              検討中＜25＞
            </div>
            <form action="/offerpage/{{ $student->id }}" method="GET">
              <input type="hidden" name="student_id" value="{{ $student->id }}" />
              @csrf
              <button  type='submit' class="offer">オファーする</button>
            </form>
        </div>
  </div>
  @endforeach
  @endsection