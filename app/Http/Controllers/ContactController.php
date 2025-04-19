<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; //メール送信用ファサード
use App\Mail\ContactMail;
use App\Mail\ContactReplyMail;


class ContactController extends Controller
{
    //お問い合わせフォームを表示する関数
    public function showForm(){

        //フォーム画面を表示
        return view('contact.form');
    }

    //送信内容確認の画面
    public function confirm(Request $request){

        //バリデーション
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max:1000'],
        ]);

        return view('contact.confirm', ['data' => $validated]);
    }

    //送信処理
    public function send(Request $request){

        //入力値を受け取る（hiddenから飛んでくる）
        $data = $request->only(['name', 'email', 'message']);

        //メール送信（メールの受信先を入れる）
        Mail::to('info@pro-and1.com')->send(new ContactMail($data));

        //メール送信（メール自動返信）
        Mail::to($data['email'])->send(new ContactReplyMail($data));

        // サンクスページへ
        return redirect()->route('contact.thanks')->with('success', '送信が完了しました！');
    }

}
