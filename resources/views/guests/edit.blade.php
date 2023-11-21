@extends('layouts.hotelapp')
    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>登録</h1>
            </div>
            <form action="/guests/edit" method="post"></form>
            <table>
                @csrf
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <tr><th>氏名：</th><td><input type="text" name="name" style="width: 200px" value="{{$form->name}}"></td></tr>
                    <tr><th>住所：</th><td><input type="text" name="address" style="width: 80%" value="{{$form->address}}"></td></tr>
                    <tr><th>電話番号：</th><td><input type="tel" name="tel" style="width: 250px" value="{{$form->tel}}"></td></tr>
            </table>
            <div class="send"><input type="submit" value="登録する"></div>
        </div>
    </body>