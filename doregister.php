<?php

echo "<script>alert('注册成功，请登录！');";
echo "window.location.replace(\"login.php\");</script>";

// 连接数据库
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'abcd');
define('DB_NAME', 'bookdb');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 检查用户名是否重复
$input_username = $_POST['username'];
$sqlstr = "SELECT customer_ID FROM customer_view WHERE customer_ID = \"".$inputId."\"";
echo $sqlstr;
$result = mysqli_query($conn, $sqlstr);
$resultCount = 0;
while($row = mysqli_fetch_array($result)){
    $resultCount = $resultCount + 1;
}
// 若是，跳转回注册页面
if($resultCount != 0){
    echo "<script>alert('该用户名已经被人使用过，请重试！');";
    echo "window.location.replace(\"register.php\");</script>";
    exit;
}

// 插入新的用户信息
$stmt = $conn->prepare("INSERT INTO customer_view VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $inputId, $inputName, $inputCard, $inputAccount, $inputPwd);

$inputId = $_POST['cid'];
$inputName = $_POST['cname'];
$inputCard = $_POST['ccard'];
$inputAccount = $_POST['caccount'];
$inputPwd = sha1($_POST['cpwd']);

// 页面跳转
if($stmt->execute() == true){
    echo "<script>alert('注册成功，请登录！');";
    echo "window.location.replace(\"login.php\");</script>";
}else{
    echo "<script>alert('出现问题，请检查后重试！');";
    echo "window.location.replace(\"register.php\");</script>";
}

$stmt->close();
$conn->close();

?>
