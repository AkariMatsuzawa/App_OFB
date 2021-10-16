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
        <form action="/chatpage" method="GET">
          @csrf
          <button  type='submit' class="chat">メッセージ</button>
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
          <div class="btn_detail">
              <button >
                メッセージ
              </button>
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
          <div class="btn_detail">
            <button >
              メッセージ
            </button>
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
          <div class="btn_detail">
            <button >
              メッセージ
            </button>
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
          <div class="btn_detail">
            <button >
              メッセージ
            </button>
        </div> 
      </div>
</div>


  @endsection