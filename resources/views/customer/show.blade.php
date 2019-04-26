   
    <h1>顧客詳細画面</h1>
    <div>
    <table style="width:100%;"cellpadding="3" border="1">
            <tr>
                <th>ニックネーム</th>
                <th>編集</th>
                <th>削除</th>
                <th>性別</th>
            </tr>
            <tr>
                <td>{{$customer->nickname}}
                <td><a href="/customer/edit/{{$customer->id}}">編集</a></td>
                <td><a href="/customer/del/{{$customer->id}}">削除</a></td>
                @if($customer->gender == "1")
                <td>男性</td>
                @else
                <td>女性</td>
                @endif
            </tr>
    </table>
     <table style="width:100%; margin-top:5;" cellpadding="3" border="1">
            <tr>
                <th>Memo</th>
                <th>編集</th>
                <th>削除</th>
                <th>投稿者</th>
                <th>投稿日</th>
            </tr>
            @foreach ($customer->memos as $memo)
            <tr>
                <td>{{$memo->text}}</td>
                <td><a href="/memo/edit/{{$memo->id}}">編集</a>
                <td><a href="/memo/del/{{$memo->id}}">削除</a>
                <td>{{$memo->user->name}}</td>
                <td>{{$memo->created_at}}</td>
            <tr>
            @endforeach
     </table>
    </div>
    <a href="/index" >HOME</a>
