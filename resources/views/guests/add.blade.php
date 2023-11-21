@extends('layouts.hotelapp')
    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>登録ページ</h1>
                <p>管理者用</p>
                {{-- このページはユーザー用とは別 --}}
                <p>登録する利用者の情報を入力してください。</p>
            </div>
            <form action="/guests/add" method="post">
            <table>
                @csrf
                    <tr><th>氏名：</th><td><input type="text" name="name" style="width: 200px" value="{{old('name')}}"></td></tr>
                    <tr><th>住所：</th><td><input type="text" name="address" style="width: 80%" value="{{old('address')}}"></td></tr>
                    <tr><th>電話番号：</th><td><input type="tel" name="tel" style="width: 250px" value="{{old('tel')}}"></td></tr>
            </table>
            <div class="send"><input type="submit" value="登録する"></div>
            </form>
        </div>
    </body>