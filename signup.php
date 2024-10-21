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
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // التحقق من أن كلمات المرور متطابقة
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
    } else {
        // تشفير كلمة المرور
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // استعلام لإدخال المستخدم الجديد
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// إغلاق الاتصال
$conn->close();
?>
