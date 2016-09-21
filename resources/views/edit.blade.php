{{-- 子テンプレート --}}
{{-- resources/edit.blade.php --}}
@extends('layouts.master')
@section('title', '入力した内容を表示するサンプルページ')
@section('content')

<p>{{$message}}</p>
<form class="form-signin" role="form" method="post" action="/mylaravel/public/greeting/update/{{$data->id}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
{{-- 隠しフィールド --}}
<input type="hidden" name="_method" value="PATCH">
<input type="text" name="onamae" value="{{ $data->onamae }}" class="form-control" placeholder="名前を文字を入力してください" autofocus>
   {{-- バリデーション --}}
   @if($errors->has('onamae'))
   <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('onamae') }}</p>
    @endif
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection