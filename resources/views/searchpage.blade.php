
  @extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/search.css') }}">

   <h2>検索結果一覧</h2>
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
              <form action="/listpage/{{ $student->id }}" method="GET">
                @csrf
                <button  type='submit' class="btn_details">詳細をみる</button>
              </form>
          </div> 
        </div>
  </div>
  @endforeach
  @endsection