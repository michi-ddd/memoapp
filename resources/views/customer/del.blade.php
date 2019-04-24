   
<h1>顧客削除画面</h1>
<div>
    <table style="width:100%;"cellpadding="3" border="1">
    <form action="/customer/del" method ="POST">
        {{ csrf_field()}}
        <input type="hidden" name="id" value="{{$customer->id}}">
        <tr>
            <th>ニックネーム</th>
            <th>性別</th>
        </tr>
        <tr>
            <td>{{$customer->nickname}}</td>
            @if($customer->gender == "1")
            <td>男性</td>
            @else
            <td>女性</td>
            @endif
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="削除"></td>
        </tr>
    </form>
    </table>
</div>
    <br>
    <a href="/index" >HOME</a>
