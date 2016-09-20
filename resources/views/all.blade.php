{{-- 子テンプレート --}}
{{-- resources/all.blade.php --}}
@extends('layouts.master')
@section('title', '入力した内容を表示するサンプルページ')
@section('content')
<p>{{$message}}</p>

<!-- ↓↓↓ 今回記述した箇所 ↓↓↓ -->
<table class="table table-striped">
  <!-- loop -->
  @foreach($data as $val)
      <tr>
          <td>{{$val->id}}</td>
          <td>{{$val->onamae}} さん</td>
          <td><a href="/mylaravel/public/greeting/edit/{{$val->id}}" class="btn btn-primary btn-sm">編集</a></td>
      </tr>
  @endforeach
</table>
<!-- ↑↑↑ 今回記述した箇所 ↑↑↑ -->

@endsection

