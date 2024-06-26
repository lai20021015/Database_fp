<?php
session_start(); // 啟動 session
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /syl/p3-0/index.php");
  }
?>
<!DOCTYPE html>
<html lang="zh-Hants">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sylvia個人網頁</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./styles/style.css" />
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="#">關於Sylvia</a></li>
        <?php
        if (isset($_SESSION['username'])) { // 如果用戶已登入
          echo '<li><a href="index.php?logout=\'1\'">登出</a></li>'; // 顯示登出連結
          echo '<li><a href="./p1-0/index.html" target="_self">圍棋網站</a></li>';
          echo '<li><a href="/syl/change_password.php">修改密碼</a></li>';
        } else { // 如果用戶未登入
          echo '<li><a href="/syl/login.php" target="_self">登入</a></li>'; // 顯示登入連結
          echo '<li><a href="/syl/register.php">註冊</a></li>'; // 顯示註冊連結
        }
        ?>
        <li><a>作品二</a></li>
      </ul>
    </nav>
    <main>
      <section class="main-area">
        <div class="info">
          <h1>Hello, I'm Sylvia Kao!</h1>
          <h2>我是交大的學生!</h2>
          <?php
          if (isset($_SESSION['username'])) { // 如果用戶已登入
            echo '<div class="contact">';
            echo '<a href="https://www.instagram.com/sylviakao0621/"><img src="https://cdn4.iconfinder.com/data/icons/picons-social/57/38-instagram-2-512.png"></a>';
            echo '<a href="https://www.facebook.com/profile.php?id=100010209301607&locale=zh_TW"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiS9FFjfCwsomDtqiQEu7Tf7N6anFwHLgwVw&usqp=CAU"></a>';
            echo '</div>';
          }
          ?>
        </div>
        <div class="img-area">
          <img src="./pic.jpg" alt="個人照" />
        </div>
      </section>
      <section class="aboutme">
        <section class="description">
          <h2>About me:</h2>
          <p>My Skills are C++, Python, HTML, SQL, PHP</p>
          <div class="progress-bar">
            <p>C++, Python</p>
            <div class="bar">
              <div
                class="progress"
                role="progressbar"
                aria-label="Success example"
                aria-valuenow="25"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                <div class="progress-bar bg-success" style="width: 25%"></div>
              </div>
              <p>HTML</p>
              <div
                class="progress"
                role="progressbar"
                aria-label="Info example"
                aria-valuenow="50"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                <div class="progress-bar bg-info" style="width: 50%"></div>
              </div>
              <p>SQL, PHP</p>
              <div
                class="progress"
                role="progressbar"
                aria-label="Warning example"
                aria-valuenow="75"
                aria-valuemin="0"
                aria-valuemax="100"
              >
                <div class="progress-bar bg-warning" style="width: 75%"></div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <section class="resume">
        <section class="table">
          <table>
            <tr style="border-top: 2px solid black">
              <td style="width: 20%">自我介紹</td>
              <td style="width: 80%">
                我是一個喜歡與人互動，善於溝通及邏輯分析的人，過去在英語辯論賽中皆獲得佳績。
                同時，我也是勇於挑戰，喜歡學習新事物的人，對財經、寫程式皆有涉獵。
              </td>
            </tr>
            <tr>
              <td>學歷</td>
              <td>國立交通大學 工業工程及管理學系</td>
            </tr>
            <tr>
              <td>語言</td>
              <td>中文(精通)、英文(精通)</td>
            </tr>
            <tr>
              <td>經歷</td>
              <td>曾擔任補習班助導、私人家教</td>
            </tr>
            <tr>
              <td>技能</td>
              <td>基礎程式能力、HTML</td>
            </tr>
          </table>
        </section>
        <section class="picture">
          <?php
          if (isset($_SESSION['username'])) { // 如果用戶已登入
            echo '<img src="./kid.png" alt="個人照片" />';
            echo '<text>這是我小時候的照片<br>
                        只開放給會員福利喔</text>';
          } else { // 如果用戶未登入
            echo '<img src="./2024-02-15-10-43-56-080.jpg" alt="個人照片" />';
          }
          ?>
          <!-- <div class="greenRect"></div>
          <div class="greenRect2"></div>
          <div class="greenRect3"></div> -->
        </section>
      </section>
    </main>
  </body>
</html>
