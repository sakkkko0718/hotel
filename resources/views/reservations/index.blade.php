<html>
    <head>
        <title>予約管理</title>
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
                <h1>予約管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
                @csrf
                <input type="text" name="search"><input type="submit">
                {{-- ↑未定義 --}}
            </div>
            <table>
                <tr class="table-head"><th>予約者番号</th><th>利用者ID</th><th>人数</th><th>チェックイン</th><th>チェックアウト</th></tr>
                    @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->reservations_id}}</td>
                        <td>
                            @if ($reservation->guests != null)
                            @foreach ($reservation->guests as $guest)
                                {{$guest->guest_id}}
                            @endforeach
                            @endif
                        </td>
                        <td>{{$reservation->people}}</td>
                        <td>{{$reservation->checkin}}</td>
                        <td>{{$reservation->checkout}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </body>
</html>