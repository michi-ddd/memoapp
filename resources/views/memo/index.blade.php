
<h1>メモリスト</h1>
    <div>
        <table style="width:100%;" border="1">
            <tr>
                <th>ニックネーム</th>
                <th>メモ</th>
                <th>投稿者</th>
                <th>投稿日</th>
            </tr>
            @foreach($memos as $memo)
            <tr>
                <td>{{$memo->customer->nickname}}</td>
                <td>{{$memo->text}}</td>
                <td>{{$memo->user->name}}</td>
                <td>{{$memo->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <br>
    <a href="/index" >home</a>