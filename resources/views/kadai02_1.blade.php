<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kadai02_1 - サーバーサイドスクリプト演習２</title>
</head>
<body>
    <h1>kadai02 Bladeを使ったページの表示</h1>
    <h2>コントローラーからビューの呼び出し</h2>
    <p>{{ $message }}</p>
    <p>今日は、{{$today->isoformat('YYYY年MM月DD日(dddd)')}}です。</p>
</body>
</html>
