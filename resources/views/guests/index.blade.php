@extends('layouts.hotelapp')
    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>ゲスト管理ページ</h1>
                <p>管理者用　<a href="/guests/add">追加ページ</a></p>
                {{-- このページはユーザー用とは別 --}}
            </div>
            <table>
                <tr class="table-head"><th>ID</th><th>氏名</th><th>住所</th><th>電話番号</th><th>予約履歴ID</th></tr>
                    @foreach ($guests as $guest)
                        <tr>
                            <td>{{$guest->guest_id}}</td>
                            <td>{{$guest->name}}</td>
                            <td>{{$guest->address}}</td>
                            <td>{{$guest->tel}}</td>
                            <td>
                                @if ($guest->reservations != null)
                                @foreach ($guest->reservations as $reservation)
                                    {{$reservation->reservations_id}}
                                @endforeach
                                @endif
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </body>