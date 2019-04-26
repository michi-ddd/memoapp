   
<h1>Memo削除画面</h1>
<div>
    <form action="/memo/del" method="POST">
    <table style="width:100%;"cellpadding="3" border="1">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$memo->id}}">
        <tr>
            <th>名前</th>
            <td>{{$memo->customer->nickname}}</td>
        </tr>
        <tr>
            <th>Memo</th>
            <td>{{$memo->text}}</td>
        </tr>
    </table>
    <input type="submit" value="削除">
    </form>
</div>
    <br>
    <a href="/index" >HOME</a>
