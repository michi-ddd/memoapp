@extends('layouts.app')

@section('content')
<div class="card">
  <div class="h3 card-header">Memo Edit</div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
  @endif
  <form action="/memo/edit/{{$memo->id}}" method="POST">
  {{ csrf_field() }}
      <div class="container">
        <div class="form-group mt-1">
          <label>Please edit the note</label>
          <textarea type="text" name="text" class="form-control" value="{{$memo->text}}">{{$memo->text}}</textarea>
        </div>
        <div class="text-muted h6">
            from:{{$memo->user->name}} ({{$memo->created_at->format('Y,m,d H:i')}}) 
             <button class="btn-secondary float-right mb-1" type="submit">Edit</button>
        </div>
      </div>
  </form>
</div>

@endsection