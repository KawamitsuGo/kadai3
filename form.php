<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="form-result.php" method="POST">
    メールアドレス(必須)<br/>
    <input type="text" name="mail" placeholder="yamada@aokom.com"/><br/>
    名前(必須)<br/>
    <input type="text" name="name" placeholder="山田 太郎"/><br/>
    電話番号<br/>
    <input type="text" name="number" placeholder="00011112222"><br/>
    内容(必須)<br/>
    <textarea name="content" rows="4" cols="40"></textarea></textarea><br/>
    <input type="submit"/> <input type="reset"/>
</form>
</body>
</html>

// メールアドレス (必須) @が入っていなければならない
// 送信者様名　(必須)　300文字以下
// 電話番号 数値でなければならない
// 内容　(必須)　1000文字以下