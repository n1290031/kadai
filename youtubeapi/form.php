<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
	<meta charset="UTF-8">
	<title>Title</title>

	<style type="text/css">
	<!--
		body{
		background-image: url(/images/haikei03.jpg);
		}
		.parsent{
			text-align:center;
			margin:0 auto;
		}

		.txt{
			font-size: 120%;
			display: inline-block;
			width: 25%;
			padding: 1em 0.5em;
			line-height: 1;

		}

		.se1{
			size: 1;
			font-size: 120%;
			display: inline-block;
			width: 10%;
			padding: 1em 0.5em;
			line-height: 1;
		}

		.se2{
			size: 1;
			font-size: 120%;
			display: inline-block;
			width: 10%;
			padding: 1em 0.5em;
			line-height: 1;
			}

		.submit{
			width:100px;
			height:50px;
		}
		-->
	</style>
</head>

<body>
	<h1 style="text-align:center">YouTubeランキング</h1><br>

	<div class="parsent">
		<img th:src="@{/images/Youtube.png}">
		<form action="result.php" method="post">
		<label for="name">キーワード:</label>
		<input type="text"  name = "name" id = "name">

		<select class="se1" id="rank" >
			<option value="サンプル1">棒グラフ</option>
			<option value="サンプル2">ランキング</option>
		</select>


		<select class="se2" id="type" >
			<option value="サンプル1">高評価</option>
			<option value="サンプル2">低評価</option>
		</select>

		<button type="submit" name="submit">検索</button>
		</form>
   </div>
</body>
</html>
<?php ?>