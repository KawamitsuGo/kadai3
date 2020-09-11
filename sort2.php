<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<!-- score.csv読み込み -->
<?php 

// ファイルの中身を配列で取得.
$csv = file('score.csv');
$csv_body = array_splice($csv, 0);

// 各行を配列に直す.
foreach ($csv_body as $row) {
  $row_array = explode(',', $row);
  $array[] = $row_array;
  //　処理
}
?>


<!-- データをソート -->
<?php

foreach( $array as $key => $row ) {
    $tmp_array[$key] = $row[3];
}

if(isset($_GET["sort"])) {
  // セレクトボックスで選択された値を受け取る
  $sort = $_GET["sort"];
  
  if ($sort == "点数低い順"){
    array_multisort( $tmp_array,SORT_ASC, SORT_NUMERIC,$array );
  }else if($sort == "点数高い順"){
    array_multisort( $tmp_array,SORT_DESC, SORT_NUMERIC,$array );
  }
}

echo $sort;

?>

<!-- データをテーブルで出力　-->
<table border=1>
    <tr><td>番号</td><td>名前</td><td>年齢</td><td>点数</td></tr>
    <?php foreach($array as $row){ ?>
    <tr>
        <?php foreach($row as $cel){ ?>
            <td><?= $cel?></td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>

<!-- セレクトボックス -->
<form action="sort2.php" method = "GET">
    <select name= "sort">
      <option value = "番号順">番号順</option>
      <option value = "点数高い順">点数高い順</option>
      <option value = "点数低い順">点数低い順</option>
    </select>
    <input type="submit"name="submit"value="送信"/>
  </form>


<?php
//echo('<pre>');
//var_dump($array);
//echo('</pre>');
?>

</body>
</html>