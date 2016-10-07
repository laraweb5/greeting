{{-- 子テンプレート --}}
{{-- resources/all.blade.php --}}
@extends('layouts.master')
@section('title', '入力した内容を表示するサンプルページ')
@section('content')
<p>{{$message}}</p>

<table class="table table-striped">
  <!-- loop -->
  @foreach($data as $val)
      <tr>
          <td>{{$val->id}}</td>
          <td>{{$val->onamae}} さん</td>
          <td><a href="{{ action('GreetingController@edit', $val->id) }}" class="btn btn-primary btn-sm">編集</a></td>
          <td>
          <!-- ↓↓↓今回記述した箇所 ↓↓↓ -->
          <form action="{{ action('GreetingController@destroy', $val->id) }}" id="form_{{ $val->id }}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a href="#" data-id="{{ $val->id }}" class="btn btn-danger btn-sm" onclick="deletePost(this);">削除</a>
          </form>
          <!-- ↑↑↑ 今回記述した箇所 ↑↑↑ -->
		  </td>
      </tr>
  @endforeach
</table>

<!-- ↓↓↓今回記述した箇所 ↓↓↓ -->
<!--
/************************************

削除ボタンを押してすぐにレコードが削除
されるのも問題なので、一旦javascriptで
確認メッセージを流します。

*************************************/
//-->
<script>
function deletePost(e) {
  'use strict';

  if (confirm('本当に削除していいですか?')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
<!-- ↑↑↑ 今回記述した箇所 ↑↑↑ -->

@endsection

