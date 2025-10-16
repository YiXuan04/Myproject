<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="IEETdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// 顯示清單
function renderList($conn, $category) {
    $stmt = $conn->prepare("SELECT filename, filepath, uploaded_at FROM uploads2 WHERE category = ? ORDER BY filename DESC");
    if (!$stmt) die("❌ prepare() 失敗: " . $conn->error);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<ul style='list-style-position: inside; margin: 0; padding: 1; display: inline-block; text-align: left;'>";
        while ($row = $result->fetch_assoc()) {
            $filename = htmlspecialchars($row['filename']);
            $filepath = htmlspecialchars($row['filepath']);
            $time = $row['uploaded_at'];
            echo "<li>
                    <a href='$filepath' target='_blank'>$filename</a>
                  </li>";
        }
        echo "</ul>";
    } else {
        echo "<p>目前沒有資料。</p>";
    }
}
?>