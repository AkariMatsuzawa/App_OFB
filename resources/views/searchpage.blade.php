
  @extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/search.css') }}">

   <h2>検索結果一覧</h2>
   @foreach ($students as $student_narrows)
   <div class="sum">
        <div class="up">
            <div class="pic">
              写真入る
            </div>
            <div class="pro">{{ $student_narrows->univercity }}
            {{-- 大学名
            学部学科
            性別：◯ --}}
            </div>
         </div>
        <div class="down">
            <div class="pro">
              オファー数＜10/12＞
              検討中＜25＞
            </div>
              <form action="/listpage" method="GET">
                @csrf
                <button  type='submit' class="btn_details">詳細をみる</button>
              </form>
          </div> 
        </div>
  </div>
  @endforeach
   {{-- <div class="sum">
        <div class="up">
            <div class="pic">
              写真入る
            </div>
            <div class="pro">{{ $student->univercity }}
            大学名
            学部学科
            性別：◯
            </div>
         </div>
        <div class="down">
            <div class="pro">
              オファー数＜10/12＞
              検討中＜25＞
            </div>
            <form action="/listpage" method="GET">
              @csrf
              <button  type='submit' class="btn_details">詳細をみる</button>
            </form>
        </div>
  </div>
   <div class="sum">
        <div class="up">
            <div class="pic">
              写真入る
            </div>
            <div class="pro">{{ $student->univercity }}
            大学名
            学部学科
            性別：◯
            </div>
         </div>
        <div class="down">
            <div class="pro">
              オファー数＜10/12＞
              検討中＜25＞
            </div>
            <form action="/listpage" method="GET">
              @csrf
              <button  type='submit' class="btn_details">詳細をみる</button>
            </form>
        </div>
  </div>
   <div class="sum">
        <div class="up">
            <div class="pic">
              写真入る
            </div>
            <div class="pro">{{ $student->univercity }}
            大学名
            学部学科
            性別：◯
            </div>
         </div>
        <div class="down">
            <div class="pro">
              オファー数＜10/12＞
              検討中＜25＞
            </div>
            <form action="/listpage" method="GET">
              @csrf
              <button  type='submit' class="btn_details">詳細をみる</button>
            </form>
        </div>
  </div>
   <div class="sum">
        <div class="up">
            <div class="pic">
              写真入る
            </div>
            <div class="pro">{{ $student->univercity }}
            大学名
            学部学科
            性別：◯
            </div>
         </div>
        <div class="down">
            <div class="pro">
              オファー数＜10/12＞
              検討中＜25＞
            </div>
            <form action="/listpage" method="GET">
              @csrf
              <button  type='submit' class="btn_details">詳細をみる</button>
            </form>
        </div>
  </div>
  --}}

@endsection