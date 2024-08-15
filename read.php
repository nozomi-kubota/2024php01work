<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>回答一覧</title>
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id = "table2">
<h1>回答一覧</h1>
<a href="index.php">入力画面へ戻る</a>
<?php
        $fp = fopen("data.csv", "r");
        echo '<table border="4">';
        echo    '<tr>
                    <th>お名前</th><th>メールアドレス</th><th>利用店舗</th><th>ご意見等</th><th>ご回答日時</th>
                </tr>';
        $data = fgetcsv($fp, 1000, ",");
        $num = count($data);

        // CSVファイルからデータを1行ずつ読み込む
        while ($data = fgetcsv($fp)) {
            echo '<tr>';
            echo '<td>' . $data[0] . '</td>';
            echo '<td>' . $data[1] . '</td>';
            echo '<td>' . $data[2] . '</td>';
            echo '<td>' . $data[3] . '</td>';
            echo '<td>' . $data[4] . '</td>';
            echo '</tr>';
        }

        // テーブルの終了タグを出力
        echo '</table>';

        // ファイルを閉じる
        fclose($fp);
?>


</body>

</html>