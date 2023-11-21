@extends('layouts.hotelapp')

    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>部屋管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
            </div>
            <table>
                <tr class="table-head"><th>部屋の名前</th><th>部屋の種類</th><th>部屋の写真</th></tr>
                    @foreach ($rooms as $room)
                    <tr>
                        <td>{{$room->room_num}}</td>
                        <td>{{$room->master->room_name}}</td>
                        <td>いい部屋の写真？</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </body>