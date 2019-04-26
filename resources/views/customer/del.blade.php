   
<h1>顧客削除画面</h1>
<div>
    <form action="/customer/del" method ="POST">
        <table style="width:100%;"cellpadding="3" border="1">
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
        </table>
        <input type="submit" value="削除">
    </form>
</div>
    <br>
    <a href="/index" >HOME</a>
