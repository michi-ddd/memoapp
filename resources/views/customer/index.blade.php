    <h1>顧客リスト画面</h1>
    <div>
        <table style="width:100%;" border="1">
            <tr>
                <th>ニックネーム</th>
                <th>性別</th>
            </tr>
            @foreach($customers as $customer)
            <tr>
                <td>
                    <a href="/customer/show/{{$customer->id}}">{{$customer->nickname}}</a>
                </td>
                @if( $customer->gender == "1")
                <td>男性</td>
                @else
                <td>女性</td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
    <br>
    <a href="/index" >home</a>