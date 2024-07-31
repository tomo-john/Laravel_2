<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    // index page 表示
    public function index()
    {
       // データベースからメモをすべて取得
       $memos = Memo::all();

       // memos.indexビューにデータを渡す
       return view('memos.index', compact('memos'));
    }

		// create
		public function create()
		{
    	return view('memos.create');
		}

		// create画面用
		public function store(Request $request)
		{
    	// 入力データのバリデーション
    	$validated = $request->validate([
        'title' => 'required|max:20',
        'content' => 'required',
    	]);

    	// メモの保存
    	Memo::create([
        'title' => $validated['title'],
        'content' => $validated['content'],
    	]);

    	// メモ一覧ページにリダイレクト
    	return redirect()->route('memos.index');
}

}
