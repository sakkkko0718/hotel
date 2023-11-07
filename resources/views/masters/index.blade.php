<html>
    <head>
        <title>ゲスト管理</title>
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
                /* background: #9FA0A0; */
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
                <h1>ゲスト管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
            </div>
            <table>
                <tr class="table-head"><th>ID</th><th>氏名</th><th>住所</th><th>電話番号</th></tr>
                    @foreach ($items as $item)
                        <td id="id-td">{{$item->guest_id}}</td>
                        <td id="name-td">{{$item->name}}</td>
                        <td id="name-td">{{$item->address}}</td>
                        <td id="name-td">{{$item->tel}}</td>
                    @endforeach
            </table>
        </div>
    </body>
    
</html>