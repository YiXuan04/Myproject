<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <title>home page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    $page=$_GET['page']??'home';
?>
    <header>
        <h1><a href="?page=home" class="head">IEET認證</a></h1>
    </header>
    <div class="sidebar">
        <a href="?page=page1" class="nav-link <?= $currentPage === 'page1' ? 'active' : '' ?>">四技</a>
        <a href="?page=page2" class="nav-link <?= $currentPage === 'page2' ? 'active' : '' ?>">碩士班</a>
        <a href="?page=page3" class="nav-link <?= $currentPage === 'page3' ? 'active' : '' ?>">五專</a>
    </div>
    <div class="container" id="contentArea">
        <div class="mt-3">
        <?php
            if($page==='page1'){
                include 'four.php';
            }
            else if($page==='page2'){
                include 'master.php';
            }
            else if($page==='page3'){
                include 'five.php';
            }
            else{
                echo '<div class="alert alert-info">請點選上方項目查看內容</div>';
            }
        ?>
        </div>
    </div>
<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname="IEETdb";
    $conn = new mysqli($servername, $username, $password,$dbname);
    if ($conn->connect_error) {
      echo "<script>console.error('connect error:".$conn->connect_error."');</script>";
    }else {
        echo "<script>console.log('connect success');</script>";
    }
?>
</body>
</html>