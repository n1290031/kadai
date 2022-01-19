<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
<meta charset="UTF-8">
<title>結果画面</title>
<style type="text/css">
<!--
 body{
 background-image: url(/images/haikei03.jpg);
 }
 .parsent{
  text-align:center;
  margin:0 auto;
 }

 -->
 </style>
</head>
<body>
<h1 style="text-align:center">結果画面</h1>
<?php
     //セッションの開始
     $s = $_POST["name"];

     $_SESSION["name"] = $s; //セッションに氏名を保存

  ?>

 <h2>ランキング</h2>

<p>ようこそ<?php print $s; ?>さん</p>
</body>
</html>

<?php?>
