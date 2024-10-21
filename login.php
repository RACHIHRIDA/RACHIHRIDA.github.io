<?php
// ربط قاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التعامل مع بيانات النموذج عند إرسالها
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // استعلام للتحقق من وجود المستخدم
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // الحصول على البيانات من قاعدة البيانات
        $row = $result->fetch_assoc();

        // التحقق من كلمة المرور
        if (password_verify($password, $row['password'])) {
            echo "Welcome, " . $username;
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with this username";
    }
}

// إغلاق الاتصال
$conn->close();
?>
