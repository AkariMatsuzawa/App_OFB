<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    検索結果

    {{-- オファーボタンを作る --}}
    <form action="/offerpage" method="GET">
      @csrf
      <button  type='submit' class="top_btn">オファーする</button>
    </form>
  
    {{-- 検討中ボタンを作る --}}
    <form action="/favoritepage" method="GET">
      @csrf
      <button  type='submit' class="top_btn">検討する</button>
    </form>
  
</body>
</html>