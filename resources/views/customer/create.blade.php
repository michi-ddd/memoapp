@extends('layouts.app')

@section('content')
<h1>顧客登録画面</h1>
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
  <div>
  <table style="width:100%;" border="1">
    <tr>
      <td>ニックネーム</td>
      <td><input type="text" name="nickname"></td>
    </tr>
    <tr>
      <td>性別</td>
      <td><input type="radio" name="gender" value="1" checked>男性<input type="radio" name="gender" value="2">女性</td>
    </tr>
  </table>
      <input type="submit">
  </div>
</form>
@endsection