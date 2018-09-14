<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    pre {
      background: silver;
    }
  </style>
</head>
<body>
<h1>PHP 基本</h1>

<h3>echoで文字列を出力</h3>
<pre>
  echo "echoで文字列を出力";
  結果↓
  <?php 
  echo "echoで文字列を出力";
  ?>
</pre>
<p>数字の計算も出来るよ</p>
<pre>
  echo 1 + 70;
  結果↓
  <?php 
  echo 1 + 70;
  ?>
</pre>

<h3>デバッグの色々</h3>
<p>var_dump()とprint_r()で変数の値を調べてみましょう。。。</p>
<p>var_dump()で 変数$sample を調べる↓</p>
<pre>
  $sample = "サンプル"; //変数$sampleに文字列「サンプル」を代入
  var_dump($sample);
  結果↓
  <?php 
  $sample = "サンプル";
  var_dump($sample);
  var_dump(array(1, 2, 3));
  ?>
</pre>

<p>print_r()で 変数$sample を調べる↓</p>
<pre>
  $sample = "サンプル"; //変数$sampleに文字列「サンプル」を代入
  print_r($sample);
  結果↓
  <?php 
  $sample = "サンプル";
  print_r($sample);
  print_r(array(1, 2, 3));
  ?>
</pre>





<?php
echo "var_dump()とprint_r()で変数の値を調べてみましょう。。。" . "<br>";
$sample = "サンプル"; //変数$sampleに文字列を代入
echo '$sample = "サンプル";　←変数$sampleに文字列「サンプル」を代入'; 
echo "<br>";
echo "var_dump()で" . '変数$sample' . "を調べる↓" . "<br>";
var_dump($sample);
echo "print_r()で" . '変数$sample' . "を調べる↓" . "<br>";
print_r($sample);
echo "<br>";
echo "<br>";

echo "・条件分岐" . "<br>";
echo "変数を調べてみましょう。。。" . "<br>";
$test = "あああ"; //変数$testに100を代入
echo '$test = 100;　←変数$testに「100」を代入'; 
echo "<br>";
?>
<pre>

  if ($test >= 101) { //変数$testが101以上ならtrue　そうじゃなければfalseを返す。　$testの値を書き換えると結果が変わります。
    echo "trueです;
  } else {
    echo "falseです。";
  }

</pre>
<?php
// if ($test >= 101) { //変数$testが101以上ならtrue　そうじゃなければfalseを返す。　$testの値を書き換えると結果が変わります。
//   echo "101以上を代入したのでtrueが返ってきますね。";
// } else if ($test <= 50) {
//   echo "50以下";
// } else {
//   echo "それ以外";
// }
if ($test) { //変数$testが101以上ならtrue　そうじゃなければfalseを返す。　$testの値を書き換えると結果が変わります。
  echo "101以上を代入したのでtrueが返ってきますね。";
} else if ($test <= 50) {
  echo "50以下";
} else {
  echo "それ以外";
}
echo "<br>";
echo "<br>";

echo "・ループ処理" . "<br>";
echo "10回 文字列の出力をループさせてみましょう。。。" . "<br>";
?>
<pre>

  for ($i=0; $i < 10; $i++) { 
    echo "Hello" . $i;
  }

</pre>
<?php
for ($i=0; $i < 10; $i++) { 
  echo "Hello" . $i . "<br>";
}
?>
</body>
</html>