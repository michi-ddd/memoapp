@extends('layouts.app')

@section('content')
<div class="container">
<div class="card-header">Profile</div>

        <div class="card-body h3">
        {{$customer->nickname}}
        <a href="/memo/create/{{$customer->id}}" class="btn btn-light small">Post</a>
        <a href="/customer/edit/{{$customer->id}}" class="btn btn-light small">Edit</a>
        <a href="/customer/del/{{$customer->id}}" class="btn btn-light small">Delete</a>
            <div class="text-muted h6">
                [性別：
                @if( $customer->gender == "1")
                男性
                @else
                女性
                @endif
                ]
            </div>
        </div>
</table>
 <div class="card-header">Customers Memo</div>
        @foreach ($customer->memos as $memo)
        <div class="card-body">
            {{$memo->text}}
            <a href="/memo/edit/{{$memo->id}}" class="btn btn-light small">Edit</a>
            <a href="/memo/del/{{$memo->id}}" class="btn btn-light small">Delete</a>
            <div class="text-muted h6">from:{{$memo->user->name}} at:{{$memo->created_at->format('Ymd Hi')}}</td>
        </div>
        @endforeach
    </table>
</div>
@endsection