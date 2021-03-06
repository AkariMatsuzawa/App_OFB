@extends('layouts.app')
@section('content')

<h2>基本設定</h2>
    <div class="all">
        <div class="info">
            <button>企業基本情報</button>
            <button>担当者情報</button>
        </div>

          <div class="logo">
            <p>企業ロゴ</p>
            <p>ロゴの写真設定</p>  
          </div>

        
          <div class="name">
            <p>企業名</p>
            <div>{{ $company->name }}</div>
          </div>

          <div class="address">
            <p>住所</p>
            <div>{{optional($company_detail)->address}}</div>
          </div>

          <div class="listing_classification">
            <p>上場区分</p>
            <div>{{optional($company_detail)->listing_classification}}</div>
          </div>

          <div class="place">
            <p>勤務地</p>
            <div>{{optional($company_detail)->place}}</div>
          </div>

          <div class="type">
            <p>企業タイプ</p>
            <div>{{optional($company_detail)->type}}</div>
          </div>

          <div class="industry">
            <p>業界</p>
            <div>{{optional($company_detail)->industry}}</div>
          </div>

          <div class="employees">
            <p>従業員数</p>
            <div>{{optional($company_detail)->employees}}</div>
          </div>
          
          <div class="manager">
            <p>担当者名</p>
            <div>{{optional($company_detail)->manager}}</div>
          </div>

    </div>
          <a href="{{ route ('completepage.edit', $company_id) }}">編集する</a>


@endsection