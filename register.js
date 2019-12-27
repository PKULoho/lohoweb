function verify() {
    var username = document.getElementById("username").value;
    var pwd = document.getElementById("password").value;
    var pwd2 = document.getElementById("password2").value;
    if (username.length == 0) {
        alert("用户名不得为空");
        return false;
    }
    if (pwd.length < 6) {
        alert("密码至少6位");
        return false;
    }
    if (pwd != pwd2) {
        alert("两次输入的密码不一致");
        return false;
    }
    return true;
}