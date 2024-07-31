<!-- resources/views/memos/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>メモ一覧</h1>
    <ul>
        @foreach($memos as $memo)
            <li>{{ $memo->title }}</li>
        @endforeach
    </ul>
</div>
@endsection

