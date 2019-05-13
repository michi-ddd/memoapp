@extends('layouts.app')

@section('content')
<div class="card">
<div class="card-header">Customer Register</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/customer/create" method="POST">
{{ csrf_field() }}
    <div class="container">
      <div class="form-group mt-1">
        <label>Name:</label>
        <input type="text" name="nickname" class="form-control">
      </div>
      <div class="form-group mt-1">
        <label>Gender:</label>
        <input type="radio" name="gender" value="1" checked>Men
        <input type="radio" name="gender" value="2" >Women
        <button class="float-right btn-sm small mb-1" type="submit">Post</buttom>
      </div>
    </div>
</form>
</div>
@endsection