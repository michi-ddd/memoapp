@extends('layouts.app')

@section('script')
<script>
  $(function(){
  $(".btn-dell").click(function(){
  if(confirm("本当に削除しますか？")){
  //そのままsubmit（削除）
  }else{
  //cancel
  return false;
  }
  });
  });
  </script>
@endsection

@section('content')
<div class="container">
    <div class="card-header">Profile</div>
        <div class="card-body h3">
            {{$customer->nickname}}
            <span class="text-muted h6">
                    [性別：
                    @if( $customer->gender == "1")
                    男性
                    @else
                    女性
                    @endif
                    ]
            </span>
        <div class="text-right">
            <a href="/memo/create/{{$customer->id}}" class="btn-sm btn-secondary small">Post</a>
            <a href="/customer/edit/{{$customer->id}}" class="btn-sm btn-secondary small">Edit</a>
            <a href="/customer/del/{{$customer->id}}" class="btn-sm btn-secondary small btn-dell">Delete</a>
        </div>
    </div>
    <div class="card-header">Memo</div>
        @forelse ($customer->memos as $memo)
        <div class="card-body border-bottom">
            {{$memo->text}}
            <div class="text-right p-1">
                <a href="/memo/edit/{{$memo->id}}" class="btn-sm btn-secondary small">Edit</a>
                <a href="/memo/del/{{$memo->id}}" class="btn-sm btn-secondary small btn-dell">Delete</a>
            </div>
            <div class="text-right text-muted h6">from:{{$memo->user->name}} ({{$memo->created_at->format('Y,m,d H:i')}})</div>
        </div>
        @empty
        <div class="card-body border-bottom">
        No post yet
        </div>
        @endforelse
    </div>
</div>

@endsection