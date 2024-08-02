@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Memos</h1>
    <a href="{{ route('memos.create') }}" class="btn btn-primary mb-3">＋ 新しいメモを作成</a>
    <a href="{{ route('memos.create') }}" class="btn-cute">＋ 新しいメモを作成</a>
    <ul>
        @foreach($memos as $memo)
            <li>{{ $memo->title }}</li>
        @endforeach
    </ul>
</div>
@endsection

