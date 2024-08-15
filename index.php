<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート入力フォーム</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <h1>利用者アンケート入力フォーム</h1><br>
        <form action="write.php" method="post" >
            <div class="table-container">
                <table>
                    <tr>
                        <td>お名前：</td>
                        <td><input type="text" name="name" required placeholder="三菱 商一"></td><br>
                    </tr>
                    <tr>
                        <td>メールアドレス：</td>
                        <td><input type="text" name="mail" required placeholder="sample.111@email.com"></td>
                    </tr>
                    <tr>
                        <td>ご利用店舗：</td>
                        <td>
                            <input type="radio" name="shop" value="01丸の内店">丸の内店
                            <input type="radio" name="shop" value="02銀座店">銀座店
                            <input type="radio" name="shop" value="03広尾店">広尾店<br>
                        </td>
                    </tr>
                    <tr>
                        <td> ご意見・ご要望：</td>
                        <td>
                            <textarea name="memo" ols="200" rows="8"></textarea><br>
                        </td>    
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit">クリックして回答</button><br><br>
                            <ul>
                            <li><a href="read.php">回答状況を表示</a></li><br>
                            <li><a href="write.php">write</a></li>    
                        </ul>
                    </tr>
                </table> <br><br>
            </div>

        </form>

</body>


</html>
