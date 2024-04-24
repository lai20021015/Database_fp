<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>登入</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>使用者名稱</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>密碼</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		還不是我的夥伴嗎? <a href="register.php">加入會員</a>
  	</p>
	<p>
		忘記密碼? <a href="change_password.php">重設密碼</a>
	</p>
  </form>
</body>
</html>