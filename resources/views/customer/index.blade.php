@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-header">Customer List</div>
                <ul class="list-group list-group-flush">
                @foreach($customers as $customer)
                    <a class="list-group-item" href="/customer/show/{{$customer->id}}">{{$customer->nickname}}
                    <div class="text-muted small">
                    [性別：
                    @if( $customer->gender == "1")
                    男性
                    @else
                    女性
                    @endif
                    ]
                    </div>
                    </a>
                @endforeach
                    </ul>
            </div>
        </div>
    </div>
</div>
@endsection   
