
<h1>メモ登録画面</h1>
<form action="/memo/add" method="POST">
{{ csrf_field() }}
  <div>
  <table style="width:100%;" border="1">
    <tr>
      <th>顧客No：</th>
      <td><input type="text" name="customer_id"></td>
    </tr>
    <tr>
      <th>投稿者No：</th>
      <td><input type="text" name="user_id"></td>
    </tr>
    <tr>
      <th>メモ</th>
      <td><textarea  name="text" cols="40" rows="4" maxlength="20" placeholder="ここにメモを記入してください"></textarea></td>
    </tr>
  </table>
      <input type="submit">
  </div>
</form>
