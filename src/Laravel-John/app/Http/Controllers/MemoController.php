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
}
