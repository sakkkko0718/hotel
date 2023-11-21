@extends('layouts.hotelapp')

    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>部屋種類管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
                @csrf
                <a href="guests">利用者</a><a href="rooms">部屋</a><a href="reservations">予約</a>←仮置
            </div>
            <table>
                <tr class="table-head"><th>部屋管理番号</th><th>部屋の種類</th><th>制限人数</th><th>部屋の名前</th></tr>
                    @foreach ($masters as $master)
                    <tr>
                        <td>{{$master->master_id}}</td>
                        <td>{{$master->room_name}}</td>
                        <td>{{$master->imitation}} 名まで</td>
                        <td>
                            @if ($master->rooms != null)
                            @foreach ($master->rooms as $room)
                                {{$room->room_num}}
                            @endforeach
                            @endif
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </body>