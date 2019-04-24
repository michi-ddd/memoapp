
<h1>顧客編集画面</h1>
<div>
  <form action="/customer/edit" method="POST">
  {{ csrf_field() }}
      <table style="width:100%;"cellpadding="3" border="1">
          <input type="hidden" name="id" value="{{$customer->id}}">
          <tr>
            <th>ニックネーム</th>
            <th>性別</th>
          </tr>
          <tr>
            <td><input type="text" name="nickname" value="{{$customer->nickname}}"></td>
            @if($customer->gender == "1")
            <td><input type="radio" name="gender" value="1" checked>男性
                <input type="radio" name="gender" value="2" >女性
            </td>
            @else
            <td><input type="radio" name="gender" value="1" >男性
                <input type="radio" name="gender" value="2" checked>女性
            </td>
            @endif
          </tr>
      </table>
    <input type="submit" value="変更">
  </form>
</div>