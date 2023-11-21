@extends('layouts.hotelapp')

    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>部屋管理ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
            </div>
            <table>
                @csrf
                <tr><th>ご希望の部屋</th>
                </tr>
            </table>
        </div>
    </body>