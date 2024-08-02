@extends('layouts.app')

@section('content')

<div>
    <h1>Welcome to the Home Page!</h1>
    <p>This is the new home page.</p>
    </br>
    <a href="{{ route('memos.index') }}">メモ一覧を見る</a>
</div>

@endsection
