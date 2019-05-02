@extends('layouts.app')

@section('content')
<div class="card">
<div class="card-header">Post a Memo　(To:{{$customer->nickname}})</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/memo/create" method="POST">
{{ csrf_field() }}
    <div class="container">
      <input type="hidden" name="customer_id" value="{{$customer->id}}">
      <div class="form-group mt-1">
        <label for="text">Memo:</label>
        <textarea id="text" name="text" class="form-control"></textarea>
      </div>
      <div class="text-right text-muted">
        From:{{ Auth::user()->name }}
      <input class="small mb-1" type="submit" value="Post">
      </div>
    </div>
</form>
</div>
@endsection
