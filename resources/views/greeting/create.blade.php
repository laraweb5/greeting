{{-- 子テンプレート --}}
{{-- resources/greeting.blade.php --}}
@extends('layouts.master')
@section('title', '入力した内容を表示するサンプルページ')
@section('content')

{{-- 子テンプレート --}}
@if (session('status'))<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">{{ session('status') }}</div>@endif

<p>{{$message}}</p>
<form class="form-signin" role="form" method="post" action="{{url('/greeting')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="text" name="onamae" class="form-control" placeholder="名前を文字を入力してください" autofocus>
   {{-- バリデーション --}}
   @if($errors->has('onamae'))
   <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('onamae') }}</p>
    @endif
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection

