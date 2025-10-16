<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="IEETdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]==="POST"){
  if(isset($_POST['submit11'])&&isset($_FILES['Upload11'])){
    $uploadOk = 1;
    $category ="filelist11";
    $target_dir="uploads/five/Rule1/filelist1/";
    $filename = basename($_FILES["Upload11"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload11"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload11"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3");
  }
  if(isset($_POST['submit12'])&&isset($_FILES['Upload12'])){
    $uploadOk = 1;
    $category ="filelist12";
    $target_dir="uploads/five/Rule1/filelist2/";
    $filename = basename($_FILES["Upload12"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload12"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload12"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit13'])&&isset($_FILES['Upload13'])){
    $uploadOk = 1;
    $category ="filelist13";
    $target_dir="uploads/five/Rule1/filelist3/";
    $filename = basename($_FILES["Upload13"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload13"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload13"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit14'])&&isset($_FILES['Upload14'])){
    $uploadOk = 1;
    $category ="filelist14";
    $target_dir="uploads/five/Rule1/filelist4/";
    $filename = basename($_FILES["Upload14"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload14"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload14"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit21'])&&isset($_FILES['Upload21'])){
    $uploadOk = 1;
    $category ="filelist21";
    $target_dir="uploads/five/Rule2/filelist1/";
    $filename = basename($_FILES["Upload21"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload21"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload21"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit22'])&&isset($_FILES['Upload22'])){
    $uploadOk = 1;
    $category ="filelist22";
    $target_dir="uploads/five/Rule2/filelist2/";
    $filename = basename($_FILES["Upload22"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload22"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload22"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit23'])&&isset($_FILES['Upload23'])){
    $uploadOk = 1;
    $category ="filelist23";
    $target_dir="uploads/five/Rule2/filelist3/";
    $filename = basename($_FILES["Upload23"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload23"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload23"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit24'])&&isset($_FILES['Upload24'])){
    $uploadOk = 1;
    $category ="filelist24";
    $target_dir="uploads/five/Rule2/filelist4/";
    $filename = basename($_FILES["Upload24"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload24"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload24"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit25'])&&isset($_FILES['Upload25'])){
    $uploadOk = 1;
    $category ="filelist25";
    $target_dir="uploads/five/Rule2/filelist5/";
    $filename = basename($_FILES["Upload25"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload25"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload25"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit26'])&&isset($_FILES['Upload26'])){
    $uploadOk = 1;
    $category ="filelist26";
    $target_dir="uploads/five/Rule2/filelist6/";
    $filename = basename($_FILES["Upload26"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload26"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload26"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit31'])&&isset($_FILES['Upload31'])){
    $uploadOk = 1;
    $category ="filelist31";
    $target_dir="uploads/five/Rule3/filelist1/";
    $filename = basename($_FILES["Upload31"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload31"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload31"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit32112'])&&isset($_FILES['Upload32112'])){
    $uploadOk = 1;
    $category ="filelist32112";
    $target_dir="uploads/five/Rule3/filelist2/112/";
    $filename = basename($_FILES["Upload32112"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload32112"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload32112"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit32113'])&&isset($_FILES['Upload32113'])){
    $uploadOk = 1;
    $category ="filelist32113";
    $target_dir="uploads/five/Rule3/filelist2/113/";
    $filename = basename($_FILES["Upload32113"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload32113"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload32113"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit33112'])&&isset($_FILES['Upload33112'])){
    $uploadOk = 1;
    $category ="filelist33112";
    $target_dir="uploads/five/Rule3/filelist3/112/";
    $filename = basename($_FILES["Upload33112"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload33112"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload33112"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit33113'])&&isset($_FILES['Upload33113'])){
    $uploadOk = 1;
    $category ="filelist33113";
    $target_dir="uploads/five/Rule3/filelist3/113/";
    $filename = basename($_FILES["Upload33113"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload33113"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload33113"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4100'])&&isset($_FILES['Upload4100'])){
    $uploadOk = 1;
    $category ="filelist4100";
    $target_dir="uploads/five/Rule4/filelist1/00/";
    $filename = basename($_FILES["Upload4100"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4100"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4100"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4101'])&&isset($_FILES['Upload4101'])){
    $uploadOk = 1;
    $category ="filelist4101";
    $target_dir="uploads/five/Rule4/filelist1/01/";
    $filename = basename($_FILES["Upload4101"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4101"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4101"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4102'])&&isset($_FILES['Upload4102'])){
    $uploadOk = 1;
    $category ="filelist4102";
    $target_dir="uploads/five/Rule4/filelist1/02/";
    $filename = basename($_FILES["Upload4102"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4102"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4102"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4103'])&&isset($_FILES['Upload4103'])){
    $uploadOk = 1;
    $category ="filelist4103";
    $target_dir="uploads/five/Rule4/filelist1/03/";
    $filename = basename($_FILES["Upload4103"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4103"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4103"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4104'])&&isset($_FILES['Upload4104'])){
    $uploadOk = 1;
    $category ="filelist4104";
    $target_dir="uploads/five/Rule4/filelist1/04/";
    $filename = basename($_FILES["Upload4104"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4104"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4104"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4105'])&&isset($_FILES['Upload4105'])){
    $uploadOk = 1;
    $category ="filelist4105";
    $target_dir="uploads/five/Rule4/filelist1/05/";
    $filename = basename($_FILES["Upload4105"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4105"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4105"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4106'])&&isset($_FILES['Upload4106'])){
    $uploadOk = 1;
    $category ="filelist4106";
    $target_dir="uploads/five/Rule4/filelist1/06/";
    $filename = basename($_FILES["Upload4106"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4106"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4106"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4107'])&&isset($_FILES['Upload4107'])){
    $uploadOk = 1;
    $category ="filelist4107";
    $target_dir="uploads/five/Rule4/filelist1/07/";
    $filename = basename($_FILES["Upload4107"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4107"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4107"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4108'])&&isset($_FILES['Upload4108'])){
    $uploadOk = 1;
    $category ="filelist4108";
    $target_dir="uploads/five/Rule4/filelist1/08/";
    $filename = basename($_FILES["Upload4108"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4108"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4108"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4109'])&&isset($_FILES['Upload4109'])){
    $uploadOk = 1;
    $category ="filelist4109";
    $target_dir="uploads/five/Rule4/filelist1/09/";
    $filename = basename($_FILES["Upload4109"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4109"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4109"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4110'])&&isset($_FILES['Upload4110'])){
    $uploadOk = 1;
    $category ="filelist4110";
    $target_dir="uploads/five/Rule4/filelist1/10/";
    $filename = basename($_FILES["Upload4110"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4110"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4110"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4111'])&&isset($_FILES['Upload4111'])){
    $uploadOk = 1;
    $category ="filelist4111";
    $target_dir="uploads/five/Rule4/filelist1/11/";
    $filename = basename($_FILES["Upload4111"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4111"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4111"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4112'])&&isset($_FILES['Upload4112'])){
    $uploadOk = 1;
    $category ="filelist4112";
    $target_dir="uploads/five/Rule4/filelist1/12/";
    $filename = basename($_FILES["Upload4112"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4112"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4112"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4113'])&&isset($_FILES['Upload4113'])){
    $uploadOk = 1;
    $category ="filelist4113";
    $target_dir="uploads/five/Rule4/filelist1/13/";
    $filename = basename($_FILES["Upload4113"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4113"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4113"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4114'])&&isset($_FILES['Upload4114'])){
    $uploadOk = 1;
    $category ="filelist4114";
    $target_dir="uploads/five/Rule4/filelist1/14/";
    $filename = basename($_FILES["Upload4114"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4114"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4114"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4115'])&&isset($_FILES['Upload4115'])){
    $uploadOk = 1;
    $category ="filelist4115";
    $target_dir="uploads/five/Rule4/filelist1/15/";
    $filename = basename($_FILES["Upload4115"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4115"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4115"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4116'])&&isset($_FILES['Upload4116'])){
    $uploadOk = 1;
    $category ="filelist4116";
    $target_dir="uploads/five/Rule4/filelist1/16/";
    $filename = basename($_FILES["Upload4116"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4116"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4116"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4117'])&&isset($_FILES['Upload4117'])){
    $uploadOk = 1;
    $category ="filelist4117";
    $target_dir="uploads/five/Rule4/filelist1/17/";
    $filename = basename($_FILES["Upload4117"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4117"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4117"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4118'])&&isset($_FILES['Upload4118'])){
    $uploadOk = 1;
    $category ="filelist4118";
    $target_dir="uploads/five/Rule4/filelist1/18/";
    $filename = basename($_FILES["Upload4118"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4118"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4118"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4119'])&&isset($_FILES['Upload4119'])){
    $uploadOk = 1;
    $category ="filelist4119";
    $target_dir="uploads/five/Rule4/filelist1/19/";
    $filename = basename($_FILES["Upload4119"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4119"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4119"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4120'])&&isset($_FILES['Upload4120'])){
    $uploadOk = 1;
    $category ="filelist4120";
    $target_dir="uploads/five/Rule4/filelist1/20/";
    $filename = basename($_FILES["Upload4120"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4120"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4120"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4121'])&&isset($_FILES['Upload4121'])){
    $uploadOk = 1;
    $category ="filelist4121";
    $target_dir="uploads/five/Rule4/filelist1/21/";
    $filename = basename($_FILES["Upload4121"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4121"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4121"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4122'])&&isset($_FILES['Upload4122'])){
    $uploadOk = 1;
    $category ="filelist4122";
    $target_dir="uploads/five/Rule4/filelist1/22/";
    $filename = basename($_FILES["Upload4122"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4122"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4122"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4123'])&&isset($_FILES['Upload4123'])){
    $uploadOk = 1;
    $category ="filelist4123";
    $target_dir="uploads/five/Rule4/filelist1/23/";
    $filename = basename($_FILES["Upload4123"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4123"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4123"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4124'])&&isset($_FILES['Upload4124'])){
    $uploadOk = 1;
    $category ="filelist4124";
    $target_dir="uploads/five/Rule4/filelist1/24/";
    $filename = basename($_FILES["Upload4124"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4124"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4124"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4125'])&&isset($_FILES['Upload4125'])){
    $uploadOk = 1;
    $category ="filelist4125";
    $target_dir="uploads/five/Rule4/filelist1/25/";
    $filename = basename($_FILES["Upload4125"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4125"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4125"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4126'])&&isset($_FILES['Upload4126'])){
    $uploadOk = 1;
    $category ="filelist4126";
    $target_dir="uploads/five/Rule4/filelist1/26/";
    $filename = basename($_FILES["Upload4126"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4126"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4126"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4127'])&&isset($_FILES['Upload4127'])){
    $uploadOk = 1;
    $category ="filelist4127";
    $target_dir="uploads/five/Rule4/filelist1/27/";
    $filename = basename($_FILES["Upload4127"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4127"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4127"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4128'])&&isset($_FILES['Upload4128'])){
    $uploadOk = 1;
    $category ="filelist4128";
    $target_dir="uploads/five/Rule4/filelist1/28/";
    $filename = basename($_FILES["Upload4128"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4128"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4128"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4129'])&&isset($_FILES['Upload4129'])){
    $uploadOk = 1;
    $category ="filelist4129";
    $target_dir="uploads/five/Rule4/filelist1/29/";
    $filename = basename($_FILES["Upload4129"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4129"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4129"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4130'])&&isset($_FILES['Upload4130'])){
    $uploadOk = 1;
    $category ="filelist4130";
    $target_dir="uploads/five/Rule4/filelist1/30/";
    $filename = basename($_FILES["Upload4130"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4130"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4130"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4131'])&&isset($_FILES['Upload4131'])){
    $uploadOk = 1;
    $category ="filelist4131";
    $target_dir="uploads/five/Rule4/filelist1/31/";
    $filename = basename($_FILES["Upload4131"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4131"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4131"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4132'])&&isset($_FILES['Upload4132'])){
    $uploadOk = 1;
    $category ="filelist4132";
    $target_dir="uploads/five/Rule4/filelist1/32/";
    $filename = basename($_FILES["Upload4132"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4132"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4132"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4133'])&&isset($_FILES['Upload4133'])){
    $uploadOk = 1;
    $category ="filelist4133";
    $target_dir="uploads/five/Rule4/filelist1/33/";
    $filename = basename($_FILES["Upload4133"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4133"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4133"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4134'])&&isset($_FILES['Upload4134'])){
    $uploadOk = 1;
    $category ="filelist4134";
    $target_dir="uploads/five/Rule4/filelist1/34/";
    $filename = basename($_FILES["Upload4134"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4134"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4134"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4135'])&&isset($_FILES['Upload4135'])){
    $uploadOk = 1;
    $category ="filelist4135";
    $target_dir="uploads/five/Rule4/filelist1/35/";
    $filename = basename($_FILES["Upload4135"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4135"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4135"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4136'])&&isset($_FILES['Upload4136'])){
    $uploadOk = 1;
    $category ="filelist4136";
    $target_dir="uploads/five/Rule4/filelist1/36/";
    $filename = basename($_FILES["Upload4136"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4136"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4136"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4137'])&&isset($_FILES['Upload4137'])){
    $uploadOk = 1;
    $category ="filelist4137";
    $target_dir="uploads/five/Rule4/filelist1/37/";
    $filename = basename($_FILES["Upload4137"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4137"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4137"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4138'])&&isset($_FILES['Upload4138'])){
    $uploadOk = 1;
    $category ="filelist4138";
    $target_dir="uploads/five/Rule4/filelist1/38/";
    $filename = basename($_FILES["Upload4138"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4138"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4138"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4139'])&&isset($_FILES['Upload4139'])){
    $uploadOk = 1;
    $category ="filelist4139";
    $target_dir="uploads/five/Rule4/filelist1/39/";
    $filename = basename($_FILES["Upload4139"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4139"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4139"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4140'])&&isset($_FILES['Upload4140'])){
    $uploadOk = 1;
    $category ="filelist4140";
    $target_dir="uploads/five/Rule4/filelist1/40/";
    $filename = basename($_FILES["Upload4140"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4140"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4140"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4141'])&&isset($_FILES['Upload4141'])){
    $uploadOk = 1;
    $category ="filelist4141";
    $target_dir="uploads/five/Rule4/filelist1/41/";
    $filename = basename($_FILES["Upload4141"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4141"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4141"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4142'])&&isset($_FILES['Upload4142'])){
    $uploadOk = 1;
    $category ="filelist4142";
    $target_dir="uploads/five/Rule4/filelist1/42/";
    $filename = basename($_FILES["Upload4142"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4142"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4142"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4143'])&&isset($_FILES['Upload4143'])){
    $uploadOk = 1;
    $category ="filelist4143";
    $target_dir="uploads/five/Rule4/filelist1/43/";
    $filename = basename($_FILES["Upload4143"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4143"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4143"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit4144'])&&isset($_FILES['Upload4144'])){
    $uploadOk = 1;
    $category ="filelist4144";
    $target_dir="uploads/five/Rule4/filelist1/44/";
    $filename = basename($_FILES["Upload4144"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload4144"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload4144"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit42112'])&&isset($_FILES['Upload42112'])){
    $uploadOk = 1;
    $category ="filelist42112";
    $target_dir="uploads/five/Rule4/filelist2/112/";
    $filename = basename($_FILES["Upload42112"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload42112"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload42112"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit42113'])&&isset($_FILES['Upload42113'])){
    $uploadOk = 1;
    $category ="filelist42113";
    $target_dir="uploads/five/Rule4/filelist2/113/";
    $filename = basename($_FILES["Upload42113"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload42113"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload42113"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit43112'])&&isset($_FILES['Upload43112'])){
    $uploadOk = 1;
    $category ="filelist43112";
    $target_dir="uploads/five/Rule4/filelist3/112/";
    $filename = basename($_FILES["Upload43112"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload43112"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload43112"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit43113'])&&isset($_FILES['Upload43113'])){
    $uploadOk = 1;
    $category ="filelist43113";
    $target_dir="uploads/five/Rule4/filelist3/113/";
    $filename = basename($_FILES["Upload43113"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload43113"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload43113"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit44'])&&isset($_FILES['Upload44'])){
    $uploadOk = 1;
    $category ="filelist44";
    $target_dir="uploads/five/Rule4/filelist4/";
    $filename = basename($_FILES["Upload44"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload44"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload44"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit45'])&&isset($_FILES['Upload45'])){
    $uploadOk = 1;
    $category ="filelist45";
    $target_dir="uploads/five/Rule4/filelist5/";
    $filename = basename($_FILES["Upload45"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload45"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload45"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit51'])&&isset($_FILES['Upload51'])){
    $uploadOk = 1;
    $category ="filelist51";
    $target_dir="uploads/five/Rule5/filelist1/";
    $filename = basename($_FILES["Upload51"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload51"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload51"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit52'])&&isset($_FILES['Upload52'])){
    $uploadOk = 1;
    $category ="filelist52";
    $target_dir="uploads/five/Rule5/filelist2/";
    $filename = basename($_FILES["Upload52"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload52"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload52"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit53'])&&isset($_FILES['Upload53'])){
    $uploadOk = 1;
    $category ="filelist53";
    $target_dir="uploads/five/Rule5/filelist3/";
    $filename = basename($_FILES["Upload53"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload53"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload53"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit54'])&&isset($_FILES['Upload54'])){
    $uploadOk = 1;
    $category ="filelist54";
    $target_dir="uploads/five/Rule5/filelist4/";
    $filename = basename($_FILES["Upload54"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload54"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload54"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit55'])&&isset($_FILES['Upload55'])){
    $uploadOk = 1;
    $category ="filelist55";
    $target_dir="uploads/five/Rule5/filelist5/";
    $filename = basename($_FILES["Upload55"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload55"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload55"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit56'])&&isset($_FILES['Upload56'])){
    $uploadOk = 1;
    $category ="filelist56";
    $target_dir="uploads/five/Rule5/filelist6/";
    $filename = basename($_FILES["Upload56"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload56"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload56"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit57'])&&isset($_FILES['Upload57'])){
    $uploadOk = 1;
    $category ="filelist57";
    $target_dir="uploads/five/Rule5/filelist7/";
    $filename = basename($_FILES["Upload57"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload57"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload57"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit58'])&&isset($_FILES['Upload58'])){
    $uploadOk = 1;
    $category ="filelist58";
    $target_dir="uploads/five/Rule5/filelist8/";
    $filename = basename($_FILES["Upload58"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload58"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload58"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit61'])&&isset($_FILES['Upload61'])){
    $uploadOk = 1;
    $category ="filelist61";
    $target_dir="uploads/five/Rule6/filelist1/";
    $filename = basename($_FILES["Upload61"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload61"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload61"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit62'])&&isset($_FILES['Upload62'])){
    $uploadOk = 1;
    $category ="filelist62";
    $target_dir="uploads/five/Rule6/filelist2/";
    $filename = basename($_FILES["Upload62"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload62"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload62"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit63'])&&isset($_FILES['Upload63'])){
    $uploadOk = 1;
    $category ="filelist63";
    $target_dir="uploads/five/Rule6/filelist3/";
    $filename = basename($_FILES["Upload63"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload63"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload63"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit64'])&&isset($_FILES['Upload64'])){
    $uploadOk = 1;
    $category ="filelist64";
    $target_dir="uploads/five/Rule6/filelist4/";
    $filename = basename($_FILES["Upload64"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload64"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload64"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit71'])&&isset($_FILES['Upload71'])){
    $uploadOk = 1;
    $category ="filelist71";
    $target_dir="uploads/five/Rule7/filelist1/";
    $filename = basename($_FILES["Upload71"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload71"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload71"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit72'])&&isset($_FILES['Upload72'])){
    $uploadOk = 1;
    $category ="filelist72";
    $target_dir="uploads/five/Rule7/filelist2/";
    $filename = basename($_FILES["Upload72"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload72"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload72"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit73'])&&isset($_FILES['Upload73'])){
    $uploadOk = 1;
    $category ="filelist73";
    $target_dir="uploads/five/Rule7/filelist3/";
    $filename = basename($_FILES["Upload73"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload73"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload73"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit74'])&&isset($_FILES['Upload74'])){
    $uploadOk = 1;
    $category ="filelist74";
    $target_dir="uploads/five/Rule7/filelist4/";
    $filename = basename($_FILES["Upload74"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload74"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload74"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit81'])&&isset($_FILES['Upload81'])){
    $uploadOk = 1;
    $category ="filelist81";
    $target_dir="uploads/five/Rule8/filelist1/";
    $filename = basename($_FILES["Upload81"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload81"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload81"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
  if(isset($_POST['submit82'])&&isset($_FILES['Upload82'])){
    $uploadOk = 1;
    $category ="filelist82";
    $target_dir="uploads/five/Rule8/filelist2/";
    $filename = basename($_FILES["Upload82"]["name"]);
    $target_file = $target_dir . $filename;
    $FileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $scrollTo = $_POST['scrollTo'];
    //檢查是否已存在
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["Upload82"]["size"] > 100*1024*1024) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["Upload82"]["tmp_name"], $target_file)) {
      // 寫入資料庫
      $stmt = $conn->prepare("INSERT INTO uploads3 (filename, filepath, category) VALUES (?, ?, ?)");
        if ($stmt) {
          $stmt->bind_param("sss", $filename, $target_file, $category);
          $stmt->execute();
          $stmt->close();
          echo "✅ 上傳成功並寫入資料庫！";
        } else {
          unlink($target_file); // 刪除搬進來的檔案
          echo "❌ 資料庫寫入失敗，檔案已移除。";
        }
      } else {
        echo "❌ 檔案搬移失敗（upload failed）。";
      }
    }
    header("Location:index.php?page=page3#$scrollTo");
  }
}
$conn->close();
// header("Location: index.php?page=page3");
?>