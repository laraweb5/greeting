<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

#モデルを使用する
use App\Greeting;

#↓今回追加↓
use App\Http\Requests\GreetingRequest;

class GreetingController extends Controller
{
    #greeting/indexにアクセスした時の処理
    public function getIndex()
    {
        return view('greeting')->with('message','あなたの名前を入力してください。');
    }
    
    #greeting/indexにPOST送信された時の処理
    public function postIndex(GreetingRequest $request)
    {
        /*
         * バリデーション
         */
        
        
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
        return view('greeting')->with('message',$res);
    }
   
    #greeting/allにアクセスされた場合
    public function all()
    {
        # greetingsテーブルのレコードを全件取得
        $data = Greeting::all();
        
        # data連想配列に代入&Viewファイルをlist.blade.phpに指定
        return view('all')->with('message','あいさつした人のリスト')->with('data',$data);
    }

    #greeting/editにアクセスされた場合
    public function edit($id) 
    {
        #レコードをidで指定
        $data = Greeting::findOrFail($id);

        #viewに連想配列を渡す
        return view('edit')->with('message','編集フォーム')->with('data',$data);
    }
    
    #DBの更新処理
    public function update(GreetingRequest $request,$id)
    {
      $greeting = Greeting::findOrFail($id);
      $greeting->onamae = $request->input('onamae');
      $greeting->save();
      #return redirect('greeting',['status' => 'UPDATE完了！']);　←error!
      return redirect('greeting')->with('status', 'UPDATE完了!');
    }
    
    #レコードの削除
    public function destroy($id)
    {
      #削除処理
      $greeting = Greeting::findOrFail($id);
      $greeting->delete();

      #greetingsテーブルのレコードを全件取得
      $data = Greeting::all();
      return view('all')->with('message', '削除しました。')->with('data',$data);
    }
}
