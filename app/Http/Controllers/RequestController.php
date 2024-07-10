<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create() {
        return view('posts.create');
    } 

    public function confirm(Request $request) {
        // HTTPリクエストに含まれる、単一のパラメータの値を取得する     
        $title = $request->input('title');
        $content = $request->input('content');

        // HTTPリクエストメソッド（GET、POST、PUT、PATCH、DELETEなど）を取得する
        $method = $request->method();

        // HTTPリクエストのパスを取得する
        $path = $request->path();

        // HTTPリクエストのURLを取得する
        $url = $request->url();

        // HTTPリクエストを送信したクライアントのIPアドレスを取得する
        $ip = $request->ip();

        $variables = [
            'title',
            'content'
        ];

        return view('posts.create', compact($variables));
    }    
}
