@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">Customer Edit</div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
  @endif
  <form action="/customer/edit/{{$customer->id}}" method="POST">
  {{ csrf_field() }}
      <div class="container">
        <div class="form-group mt-1">
          <label>Name:</label>
          <input type="text" name="nickname" class="form-control" value="{{$customer->nickname}}">
        </div>
        <div class="form-group mt-1">
          <label>Gender:</label>
          @if($customer->gender == "1")
            <input type="radio" name="gender" value="1" checked>Men
            <input type="radio" name="gender" value="2" >Women
          @else
            <input type="radio" name="gender" value="1" >Men
            <input type="radio" name="gender" value="2" checked>Women
          @endif
        <button class="float-right small mb-1" type="submit">Edit</button>
        </div>
      </div>
  </form>
</div>
@endsection