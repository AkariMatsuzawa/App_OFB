{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    検索結果 --}}

    {{-- オファーボタンを作る --}}
    {{-- <form action="/offerpage" method="GET">
      @csrf
      <button  type='submit' class="top_btn">オファーする</button>
    </form> --}}
  
    {{-- 検討中ボタンを作る --}}
    {{-- <form action="/favoritepage" method="GET">
      @csrf
      <button  type='submit' class="top_btn">検討する</button>
    </form>
  
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./2_search.css">
</head>
<body> --}}
  @extends('layouts.app')
  @section('content')

  <link rel="stylesheet" href="{{ asset('css/search.css') }}">

   <h2>検索結果一覧</h2>
   <div class="sum">
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
   <div class="sum">
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
            <div class="pro">
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
            <div class="pro">
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
            <div class="pro">
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
{{-- </body>
</html> --}}
@endsection