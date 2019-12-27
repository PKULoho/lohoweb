<?php
$username = $_POST['username'];
$input_pwd = $_POST['pwd'];

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'abcd');
define('DB_NAME', 'loho');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (($nickname = match_user($dbc, $username, $input_pwd)) != -1) {
    setcookie("username", $username);
    setcookie("usernickname", $nickname);
    echo "<script>window.location.replace(\"index.php\");</script>";
} else {
    echo "<script>alert('用户名或密码错误，请重试！');";
    echo "window.location.replace(\"login.php\");</script>";
}

function match_user($dbc, $inputAccount, $inputPassword)
{
    $query = "SELECT real_name FROM user_info WHERE user_name = '" . $inputAccount . "' AND user_password = '" . $inputPassword . "'";
    echo $query;
    $result = mysqli_query($dbc, $query);

    $isLoginInfoCorrect = 0;
    $customerName = "";
    while ($row = mysqli_fetch_array($result)) {
        $isLoginInfoCorrect = $isLoginInfoCorrect + 1;
        $customerName = $row[0];
    }

    if ($isLoginInfoCorrect == 1) {
        return $customerName;
    } else return -1;
}
