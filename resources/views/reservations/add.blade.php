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
            .send{
                text-align: center
            }
        </style>
    </head>

    <body>
        <div class="page-inner">
            <div class="page-title">
                <h1>予約ページ</h1>
                <p>お答えください。</p>
            </div>
            <form action="/reservations/add" method="post">
            <table>
                @csrf
                <tr><th>利用者ID</th>
                    <td><input type="text" name="guest_id" value="{{old('guest_id')}}"></td>
                </tr>
                <tr><th>ご予約人数</th>
                    <td><input type="number" name="people" style="width: 50px" value min="1" value max="10" value="{{old('people')}}"></td>
                </tr>
                <tr><th>チェックイン</th>
                    <td><input type="date" name="checkin" style="width: 150px" value="{{old('checkin')}}"></td>
                </tr>
                <tr><th>チェックアウト</th>
                    <td><input type="date" name="checkout" style="width: 150px" value="{{old('checkout')}}"></td>
                </tr>
            </table>
            <div class="send"><input type="submit" style="width: 150px" value="予約"></div>
            </form>
        </div>
    </body>
</html>