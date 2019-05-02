@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="h3 card-header">
            Timeline
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($memos as $memo)
            <div class="card-body list-group-item">
                <div class="card-title text-center card-title border-bottom">
                    {{$memo->customer->nickname}}'s memo
                </div>
                <div class="card-text">
                    {{$memo->text}}
                </div>
                <div class="text-right mb-2">
                    <a href="/memo/edit/{{$memo->id}}" class="btn-sm btn-secondary small">Edit</a>
                    <a href="/memo/del/{{$memo->id}}" class="btn-sm btn-secondary small">Delete</a>
                </div>
                <div class="text-right text-muted h6">
                    from:{{$memo->user->name}} ({{$memo->created_at->format('Y,m,d H:i')}})
                </div>      
            </div>
            @endforeach
        </ul>
    </div>
</div>
@endsection