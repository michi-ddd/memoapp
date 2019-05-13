@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header h3">Customer List</div>
            <ul class="list-group list-group-flush">
            @foreach($customers as $customer)
                <a class="h6 list-group-item" href="/customer/show/{{$customer->id}}">{{$customer->nickname}}
                <span class="text-muted small">(
                @if( $customer->gender == "1")Men
                @else Women
                @endif
                )</span>
                </a>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection   
