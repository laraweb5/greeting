<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

#モデルを使用する
use App\Greeting;

#バリデーション
use App\Http\Requests\GreetingRequest;

class GreetingController extends Controller
{

/*-------------------------------------------------------
 * 一覧表示
 --------------------------------------------------------*/
public function index()
{
  # $data = Greeting::latest('created_at')
  $data = Greeting::latest('created_at')->paginate(10);

  return view('greeting.index')->with('message','登録した人のリスト')->with('data',$data);
}


/*-------------------------------------------------------
 * 新規作成
 --------------------------------------------------------*/
public function create()
{
  return view('greeting.create')->with('message','登録したい人の名前を入力してください。');
}


/*-------------------------------------------------------
 * 新規保存
 --------------------------------------------------------*/
public function store(GreetingRequest $request)
{
  # 新しいレコードの追加
  $greeting = new Greeting();
  $greeting->onamae = $request->input('onamae');
  $greeting->save();

  # View表示
  $res = "こんにちは！" . $request->input('onamae')."さん！！";
  $data = Greeting::latest('created_at')->get();
  return redirect('/greeting/')->with('message',$res)->with('data',$data)->with('status','新規保存の処理完了！');
}


/*-------------------------------------------------------
 * 表示
 --------------------------------------------------------*/
  public function show($id)
  {
  //
  }


/*-------------------------------------------------------
 * 編集
 --------------------------------------------------------*/
public function edit($id)
{
  $data = Greeting::findOrFail($id);
  return view('greeting.edit')->with('message','編集フォーム')->with('data',$data);
}


/*-------------------------------------------------------
 * 更新
 --------------------------------------------------------*/
public function update(GreetingRequest $request,$id)
{
  $greeting = Greeting::findOrFail($id);
  $greeting->onamae = $request->input('onamae');
  $greeting->save();
  return redirect('/greeting/')->with('status', '更新処理完了!');
}


/*-------------------------------------------------------
 * 削除
 --------------------------------------------------------*/
public function destroy($id)
{
  $greeting = Greeting::findOrFail($id);
  $greeting->delete();
  $data = Greeting::all();
  return redirect('/greeting/')->with('status', '削除処理完了！')->with('data',$data);
}

}
