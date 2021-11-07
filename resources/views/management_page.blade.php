@extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/management.css') }}">

  <h2>選考管理リスト</h2>
    <div>
      <button>承認前</button>
      <button>承認後</button>
      <button>選考</button>
      <button>内定</button>
  </div>

  @foreach ($students as $student)
    <div class="sum">
      <div class="up">
          <div class="pic">
            写真入る
          </div>
          <div class="pro">
            {{ $student->name }}
            {{ $student->univercity }}
            {{ $student->faculty }}
            {{ $student->subject }}
            {{ $student->gender }}
          </div>
       </div>
        <div class="down">
          {{-- <form action="/chatpage" method="GET">
            @csrf
            <button  type='submit' class="chat">メッセージ</button>
          </form> --}}
          <form action="/chatpage" method="GET">
            <input type="hidden" name="student_id" value="{{ $student->id }}" />
            @csrf
            <button  type='submit' class="top_btn">メッセージ</button>
          </form>
        </div>
    </div>
  @endforeach

    {{-- <div class="sum">
      <div class="up">
          <div class="pic">
            写真入る
          </div>
          <div class="pro">
            {{ $student->name }}
            {{ $student->univercity }}
            {{ $student->faculty }}
            {{ $student->subject }}
            {{ $student->gender }}
          </div>
       </div>
        <div class="down">
          <form action="/chatpage" method="GET">
            @csrf
            <button  type='submit' class="top_btn">メッセージ</button>
          </form>
        </div>
      </div>
  </div>
   <div class="sum">
      <div class="up">
          <div class="pic">
            写真入る
          </div>
          <div class="pro">
            {{ $student->name }}
            {{ $student->univercity }}
            {{ $student->faculty }}
            {{ $student->subject }}
            {{ $student->gender }}
          </div>
       </div>
        <div class="down">
          <form action="/chatpage" method="GET">
            @csrf
            <button  type='submit' class="top_btn">メッセージ</button>
          </form>
        </div>
      </div>
  </div>
   <div class="sum">
      <div class="up">
          <div class="pic">
            写真入る
          </div>
          <div class="pro">
            {{ $student->name }}
            {{ $student->univercity }}
            {{ $student->faculty }}
            {{ $student->subject }}
            {{ $student->gender }}
          </div>
       </div>
      <div class="down">
        <form action="/chatpage" method="GET">
          @csrf
          <button  type='submit' class="top_btn">メッセージ</button>
        </form>
      </div>
      </div>
    </div>
    <div class="sum">
      <div class="up">
          <div class="pic">
            写真入る
          </div>
          <div class="pro">
            {{ $student->name }}
            {{ $student->univercity }}
            {{ $student->faculty }}
            {{ $student->subject }}
            {{ $student->gender }}
          </div>
       </div>
        <div class="down">
          <form action="/chatpage" method="GET">
            @csrf
            <button  type='submit' class="top_btn">メッセージ</button>
          </form>
        </div>
      </div> 
    </div>
  </div> --}}


  @endsection