<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

#モデルを使用する
use App\Greeting;

class GreetingController extends Controller
{
    #greeting/indexにアクセスした時の処理
    public function getIndex()
    {
        return view('greeting', ['message' => 'あなたの名前を入力してください。']);
    }
    
    #greeting/indexにPOST送信された時の処理
    public function postIndex(Request $request)
    {
        /*
         * バリデーション
         */
        $this->validate($request, [
            'onamae' => 'required',
        ]);
        
        /*
         *  新しいレコードの追加
         */
        
        #Greetingモデルクラスのオブジェクトを作成
        $greeting = new Greeting();
        
        #Greetingモデルクラスのプロパティに値を代入
        $greeting->onamae = $request->input('onamae');

        #Greetingモデルクラスのsaveメソッドを実行
        $greeting->save();

        /*
         * View表示
         */
        
        #変数に代入
        $res = "こんにちは！" . $request->input('onamae')."さん！！";
        
        #Viewメソッドに引数を指定して返す
        return view('greeting', ['message' => $res]);
    }
   
    #greeting/allにアクセスされた場合
    public function all()
    {
        # greetingsテーブルのレコードを全件取得
        $data = Greeting::all();
        
        # data連想配列に代入&Viewファイルをlist.blade.phpに指定
        return view('all', [ 'message' => 'あいさつした人のリスト','data' => $data]);
    }

    #greeting/editにアクセスされた場合
    public function edit($id) 
    {
        $data = Greeting::findOrFail($id);

        #viewに連想配列を渡す
        return view('edit', [ 'message' => 'あいさつした人のリスト','data' => $data]);
    }
    
}
