    <h1>顧客リスト画面</h1>
    <div>
        <table style="width:100%;" border="1">
            <tr><th>ニックネーム</th><th>性別</th></tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->nickname}}</td>
                @if( $customer->gender == "1")
                <td>男性</td>
                @else
                <td>女性</td>
                @endif
                <td>
                    <form action="/customer/detail" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$customer->id}}">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    <br>
    <a href="/index" >home</a>