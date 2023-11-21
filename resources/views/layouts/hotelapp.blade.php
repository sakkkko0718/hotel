<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        *{
            color: #9FA0A0;
            margin: 5px;
            max-width: 1200vh;
        }
        .page-innner{
            width: 100%;
        }
        .page-title{
            margin: 5px 0 20px 0;
        }
        table{
            margin: 0 auto;
        }
        th{
            border: #9FA0A0 solid 1px;
            padding: 10px;
            width: 300px;
        }
        td{
            border: #9FA0A0 solid 1px;
            padding: 5px 10px;
        }
        .send{
            text-align: center;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>