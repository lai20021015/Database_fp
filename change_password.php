<?php
// server.php

// 資料庫連線設定
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project';

// 建立資料庫連線
$conn = new mysqli($host, $username, $password, $database);

// 檢查連線是否成功
if ($conn->connect_error) {
	die("連線失敗: " . $conn->connect_error);
}

// reset_password.php
echo '
<form method="POST" action="change_password.php">
	<label for="username">帳號:</label>
	<input type="text" id="username" name="username" required><br><br>
	
	<label for="email">電子郵件:</label>
	<input type="email" id="email" name="email" required><br><br>
	
	<label for="new_password">欲修改的密碼:</label>
	<input type="password" id="new_password" name="new_password" required><br><br>
	
	<input type="submit" name="reset_password" value="修改密碼">
</form>';

// 處理表單提交
if (isset($_POST['reset_password'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$newPassword = $_POST['new_password'];

	// 檢查使用者名稱和電子郵件是否存在
	$query = "SELECT * FROM users WHERE username='$username' AND email='$email'";
	$result = $conn->query($query);

	if ($result->num_rows == 1) {
		// 對新密碼進行 MD5 加密
		$hashedPassword = md5($newPassword);

		// 更新密碼
		$updateQuery = "UPDATE users SET password='$hashedPassword' WHERE username='$username'";
		$conn->query($updateQuery);
		echo "密碼已更新";
		// 登出狀態
		session_start();
		session_destroy();
		echo "<br><a href='/syl/p3-0/index.php'>返回登入頁面</a>";
	} else {
		echo "使用者名稱或電子郵件不正確";
	}
}

?>
