@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/delete.css') }}">

<div class="offer-wrapper">
  @foreach($offers as $offer)
  <div class="chat_box">
    <div>{{ $offer->text }}</div>
    {{-- $offerのテキストを表示 --}}
  </div>
  

</div>

<div class="delete">
  <form action='{{ route('deletepage.destroy', $offer->id) }}' method='POST'>
    <input type="hidden" name="offer_id" value="{{ $offer->id }}" />
    @csrf
    @method('delete')

    <input type="submit" value='削除' class="btn-danger" onclick='return confirm("本当に削除しますか？");'>
  </form>
</div>
@endforeach



@endsection