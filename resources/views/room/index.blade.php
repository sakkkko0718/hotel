<html>
    <head>
        <title>お部屋管理</title>
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
                width: 90%;
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
                <h1>部屋の管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
            </div>
            <table>
                <tr class="table-head"><th>部屋管理番号</th><th>部屋の種類</th><th>制限人数</th></tr>
                    @foreach ($masters as $master)
                    <tr>
                        <td>{{$master->master_id}}</td>
                        <td>{{$master->room_name}}</td>
                        <td>{{$master->imitation}} 名まで</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </body>
</html>