<html>
    <head>
        <title>予約詳細管理</title>
        <style>
            * {
                color: #9FA0A0;
                margin: 10px;
                max-width: 1200vh;
            }
            .page-inner{
                width: 90%;
            }
            .page-title{
                margin: 5px 0 20px 0 ;
            }
            table{
                width: 1000px;
                margin: 0 auto;
            }
            th{
                border: #9FA0A0 solid 1px;
                padding: 10px 30px;
                width: 300px;
            }
            td{
                border: #9FA0A0 solid 1px;
                padding: 5px 10px;
            }
        </style>
    </head>

    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>予約詳細管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
            </div>
            <table>
                <tr class="table-head"><th>予約詳細番号</th><th>予約番号</th><th>利用者名</th><th>部屋番号</th><th>宿泊日数</th><th>宿泊料</th></tr>
                    @foreach ($details as $detail)
                        <tr>
                            <td>{{$detail->detail_id}}</td>
                            <td>{{$detail->reservations_id}}</td>
                            <td></td>
                            <td>{{$detail->room_id}}</td>
                            <td>{{$detail->day}}日間</td>
                            <td>￥{{$detail->price}}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </body>
    
</html>