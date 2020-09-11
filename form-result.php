<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<?php 
    $users = array(
        "ゆうた"=>array(
            "id"=>"0001",
            "age" => 18
        ),
        "まさき" => array(
            "id"=> "0002",
            "age" => 38
        )
    );

    $i = 0;  // 正しく送信できるかどうかチェックする変数(めちゃくちゃダサい)


    if(strpos($_POST["mail"],'@') === false){
        echo "メールアドレスを正しく入力してください。<br/>";
        $i = 1;
    }

    if ($_POST["mail"]==""){
        echo "メールアドレスが入力されていません。<br/>";
        $i = 1;
    }

    if ($_POST["name"]==""){
        echo "送信者様名が入力されていません。<br/>";
        $i = 1;
    }

    if ( mb_strlen($_POST["name"]) > 300){
        echo "送信者様名は300字以内で入力してください。<br/>";
        $i = 1;
    }

    if (!ctype_digit ($_POST["number"])){
        echo "電話番号は半角数字のみで入力してください。<br/>";
        $i = 1;
    }

    if ($_POST["content"]==""){
        echo "内容が入力されていません。<br/>";
        $i = 1;
    }
    
    if ( mb_strlen($_POST["content"]) > 1000){
        echo "内容は1000字以内で入力してください。<br/>";
        $i = 1;
    }

    if ( $i == 0){
        echo "内容は正しく送信されました。<br/>";
    }


?> 

</body>
</html>