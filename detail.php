<?php
$id = $_GET['id'];
// $jsonList = isset($_POST['fmData']) ? $_POST['fmData'] : null;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>「<?php print $id;?>」の詳細 - いなさで暮らそうマップ</title>
    <link rel="stylesheet" href="./css/detail.css" type="text/css" />
</head>
<body>
    <header>
        <a id="bousai-link" href="https://hamabosai.maps.arcgis.com/apps/webappviewer/index.html?id=d4070f31679d487ab858eb38d1d6ae3a" target="_blank">浜松市防災マップ</a>
        <a id="logo" href="./index.html"><img src="./img/logo-pc.png"></a>
        <div id="hamburger"><span></span><span></span><span></span></div>
        <nav class="menu">
            <ul>
                <li class="menu-item">メニュー</li>
                <li class="menu-item"><a href="./index.html">トップページ</a></li>
                <li class="menu-item"><a href="./map.html">地図検索ページ</a></li>
                <li class="menu-item"><a href="./list.html">社会資源一覧ページ</a></li>
                <li class="menu-item"><a href="https://hamabosai.maps.arcgis.com/apps/webappviewer/index.html?id=d4070f31679d487ab858eb38d1d6ae3a" target="_blank">浜松市防災マップ</a></li>
            </ul>
        </nav>
    </header>
    <div id="menu-black-close"></div>

    <h1><?php print $id;?></h1>

    <footer>
        <small>Copyright&copy; 2020-2021 静岡大学 杉山岳弘研究室 All Rights Reserved.</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/detail.js"></script>
</body>
</html>