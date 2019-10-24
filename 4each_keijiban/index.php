<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>4eachblog掲示板</title>
		<link rel="stylesheet"type="text/css"href="style.css">
	</head>
	
	<body>
	<?php
		mb_internal_encoding("utf8");

		$pdo = new PDO("mysql:dbname=gunji;host=localhost;","root","mysql");

		$stmt = $pdo->query("select * from 4each_keijiban");
   
?>
		<img src="4eachblog_logo.jpg">
		
		<header>
    		<ul>
    			<li>トップ</li>
    			<li>プロフィール</li>
    			<li>4eachについて</li>
    			<li>登録フォーム</li>
    			<li>問い合わせ</li>
    			<li>その他</li>
    		</ul>
    	</header>
    	
    <main>
    	<div class="left">
		
			<h2> プログラミングに役立つ掲示板</h2>
		<form method="post" action="insert.php">
		<h3>入力フォーム</h3>
		<div>
			<label>ハンドルネーム</label><br>
			<input type="text" name="handlename">
		</div>
		<div>
			<label>タイトル</label><br>
			<input type="text" name="title">
		</div>
		<div>
			<label>コメント</label><br>
			<textarea name="comments" rows="6" cols="50"></textarea>
		</div>
		<div>
			<input type="submit" class="submit" value="投稿する">
		</div>
		
			
		</form>
		
 <?php            
      while($row = $stmt->fetch()){
       
		echo "<div class='kiji'>";
		echo "<h4>".$row['title']."</h4>";
        echo "<div class='contents'>";
		echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
		echo "</div>";
      }
  ?>
        </div>
		<div class="right">
   
   			<h4>人気の記事</h4>
   			<ul>
   				<li>PHPオススメ本</li>
   				<li>PHP MyAdminの使い方</li>
   				<li>今人気のエディタTOP5</li>
   				<li>HTMLの基礎</li>
   			</ul>
   			<h4>オススメリンク</h4>
   			<ul>
   				<li>インターノウス株式会社</li>
   				<li>XAMPPのダウンロード</li>
   				<li>Edipceのダウンロード</li>
   				<li>Bracketsのダウンロード</li>
   			</ul>
   			<h4>カテゴリ</h4>
   			<ul>
   				<li>HTML</li>
   				<li>PHP</li>
   				<li>MySQL</li>
   				<li>JavaScript</li>
   			</ul>
   		
  		 </div>
          
    </main>
    
   	<footer>
    	copyright © internous l 4each blog is the one which provides A to Z about programming.
    </footer>
    
		
	</body>
	
	
</html>