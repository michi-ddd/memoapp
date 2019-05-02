@extends('layouts.app')

@section('content')
<h1>Memo編集画面</h1>
<div>
  <form action="/memo/edit" method="POST">
  {{ csrf_field() }}
      <table style="width:100%;"cellpadding="3" border="1">
          <input type="hidden" name="id" value="{{$memo->id}}">
          <tr>
            <th>名前</th>
            <td>{{$memo->customer->nickname}}</td>
          </tr>
          <tr>
            <th>Memo</th>
            <td><textarea  name="text" cols="40" rows="4" maxlength="20" placeholder="{{$memo->text}}"></textarea></td>
        </table>
    <input type="submit">
  </form>
</div>
@endsection